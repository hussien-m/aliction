<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FeaturesController extends Controller
{
    public function index()
    {
        $data['pagename'] = 'المميزات';
        $data['features'] = Features::get();
        return view('dashboard.features.index',$data);
    }

    public function create()
    {
        $data['pagename'] = 'أضف جديد';
        return view('dashboard.features.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'body' => 'required',
        ]);

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/features"), $imageName);
            $request->image = $imageName;
            //$features->image = $imageName;

            Features::create([
                'title' => $request->title,
                'body' => $request->body,
                'image' => $imageName,
            ]);

            toast('تم الحفظ بنجاح','success');;
            return redirect()->route("admin.features.index");
        }


    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['pagename'] = 'مركز المساعدة';
        $data['feature'] = Features::findOrfail($id);
        return view('dashboard.features.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $features = Features::findOrFail($id);
        $image = public_path('images' . DIRECTORY_SEPARATOR . 'features' . DIRECTORY_SEPARATOR . $features->image);

        if ($request->hasFile('image')) {

            if (File::exists($image)) {
                File::delete($image);
            }

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/features"), $imageName);
            $request->image = $imageName;
            $features->image = $imageName;
        }

        $features->title = $request->title;
        $features->body = $request->body;

        $features->save();

        toast('تم الحفظ بنجاح','success');;
        return redirect()->route("admin.features.index");


    }

    public function destroy($id)
    {
        //
    }

}

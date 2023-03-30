<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Helpdesk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HelpdeskController extends Controller
{
    public function index()
    {
        $data['pagename'] = 'مركز المساعدة';
        $data['helpdesks'] = Helpdesk::get();
        return view('dashboard.helpdesk.index',$data);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data['pagename'] = 'مركز المساعدة';
        $data['helpdesk'] = Helpdesk::findOrfail($id);
        return view('dashboard.helpdesk.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $helpdesk = Helpdesk::findOrFail($id);
        $image = public_path('images' . DIRECTORY_SEPARATOR . 'helpdesk' . DIRECTORY_SEPARATOR . $helpdesk->image);

        if ($request->hasFile('image')) {

            if (File::exists($image)) {
                File::delete($image);
            }

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/helpdesk"), $imageName);
            $request->image = $imageName;
            $helpdesk->image = $imageName;
        }

        $helpdesk->title = $request->title;
        $helpdesk->body = $request->body;

        $helpdesk->save();

        toast('تم الحفظ بنجاح','success');;
        return redirect()->route("admin.helpdesk.index");


    }

    public function destroy($id)
    {
        //
    }
}

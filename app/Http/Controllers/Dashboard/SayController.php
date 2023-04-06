<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Say;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SayController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pagename'] = 'الاصناف';
        $data['says'] = Say::get();
        return view('dashboard.say.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pagename'] = 'الاصناف';
        return view('dashboard.say.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'client_name' => 'required',
            'jop' => 'required',
            'content' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/say"), $imageName);
            $request->image = $imageName;
            //$features->image = $imageName;


            Say::create([
                'client_name' => $request->client_name,
                'jop' => $request->jop,
                'content' => $request->content,
                'image' => $imageName,
            ]);

            toast('تم الحفظ بنجاح','success');;
            return redirect()->route("admin.say.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['say'] = Say::findOrfail($id);
        $data['pagename'] = 'اقوال العملاء';
        return view("dashboard.say.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $say = Say::findOrFail($id);
        $image = public_path('images' . DIRECTORY_SEPARATOR . 'say' . DIRECTORY_SEPARATOR . $say->image);

        if ($request->hasFile('image')) {

            if (File::exists($image)) {
                File::delete($image);
            }

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/say"), $imageName);
            $request->image = $imageName;
            $say->image = $imageName;
        }

        $say->client_name = $request->client_name;
        $say->jop = $request->jop;
        $say->content = $request->content;


        $say->save();

        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.say.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $say = Say::findOrFail($id);
        $say->delete();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.say.index");
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pagename'] = "مميزات الخطط";
        $data['extras']    = Extra::get();

        return view('dashboard.extra.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['pagename'] = "إضافة مميزة خطط";
        return view('dashboard.extra.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Extra::create([
            'name' => $request->name,
        ]);
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.extra.index");

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
        $data['pagename'] = "تعديل مميزة خطط";
        $data['extra'] = Extra::findOrfail($id);
        return view('dashboard.extra.edit',$data);
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
       $extra =  Extra::findOrfail($id);
       $extra->name = $request->name;
       $extra->save();
       toast('تم الحفظ بنجاح','success');
       return redirect()->route("admin.extra.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extra =  Extra::findOrfail($id);
        $extra->delete();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.extra.index");
    }
}

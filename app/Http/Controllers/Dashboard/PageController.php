<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data['pages'] = Page::get();
        $data['pagename'] = 'الصفحات';
        return view('dashboard.page.index',$data);
    }


    public function create()
    {
        $data['pagename'] = 'الصفحات اضافة';
        return view('dashboard.page.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Page::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.page.index");

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data['page'] = Page::findOrFail($id);
        $data['pagename'] = 'الصفحات تعديل';
        return view('dashboard.page.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.page.index");
    }


    public function destroy($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();
        toast('تم الحذف بنجاح','success');
        return redirect()->route("admin.page.index");
    }
}

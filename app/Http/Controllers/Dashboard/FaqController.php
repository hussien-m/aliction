<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        $data['faqs'] = Faq::get();
        $data['pagename'] = 'الاسئلة الشائعة';
        return view('dashboard.faq.index',$data);
    }


    public function create()
    {
        $data['pagename'] = 'الاسئلة الشائعة اضافة';
        return view('dashboard.faq.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        Faq::create($data);
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.faq.index");

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data['faq'] = Faq::findOrFail($id);
        $data['pagename'] = 'الاسئلة الشائعة تعديل';
        return view('dashboard.faq.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->title = $request->title;
        $faq->body = $request->body;
        $faq->save();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.faq.index");
    }


    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        toast('تم الحذف بنجاح','success');
        return redirect()->route("admin.faq.index");
    }
}

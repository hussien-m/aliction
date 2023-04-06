<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $data['pagename'] = 'الاصناف';
        $data['categories'] = Category::get();
        return view('dashboard.category.index',$data);
    }

    public function create()
    {
        $data['pagename'] = 'الاصناف';
        return view('dashboard.category.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',

        ]);

          Category::create([
                'name' => $request->name,
                'slug' => str_replace(' ','-',$request->name),
                'status' => 'active',
            ]);

            toast('تم الحفظ بنجاح','success');;
            return redirect()->route("admin.category.index");

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['category'] = Category::findOrfail($id);
        $data['pagename'] = 'التصنيفات';
        return view("dashboard.category.edit",$data);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->slug = str_replace(' ','-',$request->name);
        $category->save();

        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.category.index");
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.category.index");
    }
}

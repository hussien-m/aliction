<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $data['pagename'] = "المنشورات";
        $data['posts'] = Post::latest()->get();
        return view('dashboard.post.index',$data);
    }


    public function create()
    {
        $data['categories'] = Category::get();
        return view('dashboard.post.create', $data);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'body' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {

            $imagePath = $request->file('image');
            $imageName = time() . '-' . $request->name . '.' . $request->file("image")->extension();
            $path = $request->file('image')
                ->move(public_path("images/post"), $imageName);
            $request->image = $imageName;
            //$features->image = $imageName;


            Post::create([
                'title' => $request->title,
                'body'  => $request->body,
                'category_id'  => $request->category_id,
                'slug'  => str_replace(' ', '-', $request->title),
                'status'  => 'active',
                'image' => $imageName,
            ]);

            toast('تم الحفظ بنجاح', 'success');;
            return redirect()->route('admin.post.index');
        }
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
        $data['pagename'] = "تعديل بوست";
        $data['categories'] = Category::get();
        $data['post'] = Post::findOrfail($id);
        return view('dashboard.post.edit',$data);
    }


    public function update(Request $request, $id)
    {
    }


    public function destroy($id)
    {
        $post = Post::findOrfail($id);
        $post->delete();
        toast('تم الحذف بنجاح', 'success');;
        return redirect()->route('admin.post.index');

    }
}

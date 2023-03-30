<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{

    public function index()
    {
        $data['prices'] = Price::get();
        $data['pagename'] = 'الاسعار';
        return view('dashboard.price.index',$data);
    }


    public function create()
    {
        $data['pricename'] = 'الاسعار اضافة';
        return view('dashboard.price.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'features' => 'required',
        ]);

        Price::create([
            'name' => $request->name,
            'price' => $request->price,
            'features' => $request->features,
        ]);
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.price.index");

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data['price'] = Price::findOrFail($id);
        $data['pagename'] = 'الاسعار تعديل';
        return view('dashboard.price.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $price = Price::findOrFail($id);
        $price->name = $request->name;
        $price->price = $request->price;
        $price->features = $request->features;

        $price->save();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.price.index");
    }


    public function destroy($id)
    {
        $price = Price::findOrFail($id);
        $price->delete();
        toast('تم الحذف بنجاح','success');
        return redirect()->route("admin.price.index");
    }

}

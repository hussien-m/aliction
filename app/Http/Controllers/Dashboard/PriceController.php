<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Extra;
use App\Models\Price;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data['extras'] = Extra::get();
        return view('dashboard.price.create',$data);
    }

    public function store(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        dd($request->all());
        Price::create([
            'name' => $request->name,
            'price' => $request->price,
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
        $data['extras'] = Extra::get();
        $data['price']->load('extras');
        //dd([$data['price']]);
        $data['pagename'] = 'الاسعار تعديل';
        return view('dashboard.price.edit',$data);
    }


    public function update(Request $request, $id)
    {
        //dd(count($request->extra));
        DB::beginTransaction();
        try{

            $price = Price::findOrFail($id);
            $price->name = $request->name;
            $price->price = $request->price;
            $price->save();

            $price->extras()->sync($request->extra);
           DB::commit();
            toast('تم الحفظ بنجاح','success');
            return redirect()->route("admin.price.index");

        } catch (Exception $ex){
            DB::rollBack();
            toast($ex->getMessage(),'warning');
            return redirect()->route("admin.price.index");
        }

    }


    public function destroy($id)
    {
        $price = Price::findOrFail($id);
        $price->delete();
        toast('تم الحذف بنجاح','success');
        return redirect()->route("admin.price.index");
    }

}

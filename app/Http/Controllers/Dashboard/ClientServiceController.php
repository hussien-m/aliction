<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ClientService as ModelsClientService;
use Illuminate\Http\Request;

class ClientServiceController extends Controller
{

    public function index()
    {
        $data['clients'] = ModelsClientService::get();
        $data['pagename'] = 'خدمة العملاء';
        return view('dashboard.client_service.index',$data);
    }


    public function create()
    {
        $data['pagename'] = 'خدمة العملاء اضافة';
        return view('dashboard.client_service.create',$data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        ModelsClientService::create($data);
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.client-service.index");

    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $data['client'] = ModelsClientService::findOrFail($id);
        $data['pagename'] = 'خدمة العملاء تعديل';
        return view('dashboard.client_service.edit',$data);
    }


    public function update(Request $request, $id)
    {
        $client = ModelsClientService::findOrFail($id);
        $client->title = $request->title;
        $client->body = $request->body;
        $client->save();
        toast('تم الحفظ بنجاح','success');
        return redirect()->route("admin.client-service.index");
    }


    public function destroy($id)
    {
        $client = ModelsClientService::findOrFail($id);
        $client->delete();
        toast('تم الحذف بنجاح','success');
        return redirect()->route("admin.client-service.index");
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{


    public function index()
    {
       $data['user'] = Admin::findOrfail(Auth::id());
       $data['pagename'] = __('dash.account');

       return view('dashboard.account.index',$data);

    }

    public function update(Request $request)
    {
        $user= Admin::findOrFail(Auth::id());

        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->name= $request->name;
        $user->email= $request->email;
        $user->save();

        toast('تمت التعديل بنجاح', 'success');
        return redirect()->route('admin.my-account');
    }
}

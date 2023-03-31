<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.setting.index',['setting' => DB::table('settings')->select('*')->get(), 'pagename'=>'إعدادت عامة']);
    }

    public function update(Request $request)
    {
        $settings =  $request->validate([

            'site_name'             =>'required',
            'site_desc'             =>'required',
            'footer_logo'           =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'logo'                  =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone'                 =>'required',
            'facebook'              =>'required',
            'twitter'               =>'required',
            'instagram'             =>'required',
            'tiktok'                =>'required',
            'meta_tag'              =>'required',
            'meta_desc'             =>'required',
        ]);

        if ($request->hasFile('logo')) {
            $logo_old = DB::table('settings')->select('logo')->get();

            $image_old = public_path('images'.DIRECTORY_SEPARATOR.'settings'.DIRECTORY_SEPARATOR.$logo_old[0]->logo);

            //delete Old Image Form disk //1668330097-.jpg

            if(File::exists($image_old)) {
                File::delete($image_old);

            }

            $imagePath = $request->file('logo');
            $imageName = time() . '-' . $request->user_name . '.' . $request->file("logo")->extension();
            $path = $request->file('logo')
                ->move(public_path("images".DIRECTORY_SEPARATOR."settings"), $imageName);
            $request->logo_iamge = $imageName;


            $settings['logo']  = $imageName;

        }


        if ($request->hasFile('footer_logo')) {
            $footer_logo = DB::table('settings')->select('footer_logo')->get();

            $image_old2 = public_path('images'.DIRECTORY_SEPARATOR.'settings'.DIRECTORY_SEPARATOR.$footer_logo[0]->footer_logo);

            //delete Old Image Form disk //1668330097-.jpg

            if(File::exists($image_old2)) {
                File::delete($image_old2);

            }

            $imagePath = $request->file('footer_logo');
            $imageName2 = time() . '-' . $request->user_name . '.' . $request->file("footer_logo")->extension();
            $path = $request->file('footer_logo')
                ->move(public_path("images".DIRECTORY_SEPARATOR."settings"), $imageName2);
            $request->footer_logo = $imageName2;


            $settings['footer_logo']  = $imageName2;

        }

        DB::table('settings')->update($settings);
        toast('تم حفظ الاعدادت','success');
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SectionTitle;
use Illuminate\Http\Request;

class SectionTitleController extends Controller
{
    public function saveHow(Request $request)
    {
        $title = SectionTitle::findOrfail(1);
        $title->how_title = $request->how_title;
        $title->save();

        toast('تم الحفظ بنجاء','success');
        return redirect()->route('admin.helpdesk.index');
    }

    public function saveClient_title(Request $request)
    {
        $title = SectionTitle::findOrfail(1);
        $title->client_title = $request->client_title;
        $title->save();

        toast('تم الحفظ بنجاء','success');
        return redirect()->route('admin.client-service.index');
    }

    public function saveFaq(Request $request)
    {
        $title = SectionTitle::findOrfail(1);
        $title->faq_title = $request->faq_title;
        $title->save();

        toast('تم الحفظ بنجاء','success');
        return redirect()->route('admin.faq.index');
    }

    public function savePrice(Request $request)
    {
        $title = SectionTitle::findOrfail(1);
        $title->price_title = $request->price_title;
        $title->price_title2 = $request->price_title2;
        $title->save();

        toast('تم الحفظ بنجاء','success');
        return redirect()->route('admin.price.index');
    }

    public function saveFeature(Request $request)
    {
        $title = SectionTitle::findOrfail(1);
        $title->feature_title = $request->feature_title;
        $title->feature_title2 = $request->feature_title2;
        $title->save();

        toast('تم الحفظ بنجاء','success');
        return redirect()->route('admin.features.index');
    }
}

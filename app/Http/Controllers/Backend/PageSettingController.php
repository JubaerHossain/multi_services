<?php

namespace App\Http\Controllers\Backend;

use App\Footer;
use App\SocialIcon;
use App\StaticPage;
use App\BeforeAfter;
use App\AboutCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class PageSettingController extends Controller
{
    function about(){
        $data['edit'] = AboutCompany::first();
        return view('backend.page_setting.about',compact('data')); 
    }

    function aboutStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:250',
            'description' => 'required|',
            'document' => 'nullable|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = AboutCompany::find(1);
            $data->title = $request->title;
            $data->description =  $request->description;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/about_us';
                $fileName = imagePost($pathImage,$file);
                $data->image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/frontend-setting/about/page');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }

    }
    function homePage(){
        $data['edit'] = Footer::first();
        return view('backend.page_setting.home',compact('data')); 
    }

    function homePageStore(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'banner_img' => 'nullable|mimes:jpeg,png,jpg',
            'title' => 'required|',
            'header_description' => 'required|',
            'footer_description' => 'required|',
        ]);
        try {
            $data = Footer::find(1);
            $data->title = $request->title;
            $data->button_url = $request->button_url;
            $data->header_description = $request->header_description;
            $data->button_name = $request->button_name;
            $data->footer_description = $request->footer_description;
            $file = $request->file('document'); 
            if($request->hasFile('document')){ 
                $pathImage = 'public/uploads/banner';
                $fileName = imagePost($pathImage,$file);
                $data->banner_img =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect('/admin/frontend-setting/home-page');
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }

    }
    function term_conditionsPage(){
        $data['edit'] = StaticPage::where('type','term_condition')->first();
        return view('backend.page_setting.static_page',compact('data')); 
    }

    function term_conditionsPageStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:250',
            'content' => 'required|',
        ]);
        try {
            $data = StaticPage::find($request->id);
            $data->title = $request->title;
            $data->content = $request->content;
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->back();
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }

    }

    function privacy_policyPage(){
        $data['edit'] = StaticPage::where('type','privacy_policy')->first();
        return view('backend.page_setting.static_page',compact('data')); 
    }
    function Before_After(){
        $data['edit'] = BeforeAfter::first();
        return view('backend.page_setting.before_after',compact('data')); 
    }

    function Before_AfterStore(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|',
            'before_image' => 'required|mimes:jpeg,png,jpg',
            'after_image' => 'required|mimes:jpeg,png,jpg',
        ]);
        try {
            $data = BeforeAfter::find(1);
            $data->title = $request->title;
            $file = $request->file('before_image'); 
            if($request->hasFile('before_image')){ 
                $pathImage = 'public/uploads/before_image';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($data->before_image)) {
                    \File::delete($data->before_image);
                }
                $data->before_image =  $fileName;           
            }
            $file = $request->file('after_image'); 
            if($request->hasFile('after_image')){ 
                $pathImage = 'public/uploads/after_image';
                $fileName = imagePost($pathImage,$file);
                if (file_exists($data->after_image)) {
                    \File::delete($data->after_image);
                }
                $data->after_image =  $fileName;           
            }
            $data->save();
            Toastr::success('Operation Successfull', 'Success');
            return redirect()->back(); 
    
         } catch (\Exception $e) {
             Toastr::error('Something went wrong!', 'Error');
             return redirect()->back(); 
         }

    }

}

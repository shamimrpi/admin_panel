<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ContentController extends Controller
{
   
    // Company Profile 
    public function edit(){
        $company = CompanyProfile::first();
        return view('admin.content.profile',compact('company'));
    }
   
    public function update(Request $request, CompanyProfile $company)
    {
        $request->validate([
            'company_name' => 'required',
            'email' => 'required|email',
            'phone_1' => 'required',
            'address' => 'required|string',
            'logo' => 'mimes:jpg,jpeg,png,bmp',
        ]);
       
        // Image Update 
        $companyLogo = '';
        if($request->hasFile('logo'))
        {
            if(!empty($company->logo) && file_exists($company->logo))
            {
                unlink($company->logo);
            }
            $companyLogo = $this->imageUpload($request, 'logo', 'uploads/logo/');
        }
        else{
            $companyLogo = $company->logo;
        }
        $company->company_name = $request->company_name;
        $company->email = $request->email;
        $company->phone_1 = $request->phone_1;
        $company->phone_2 = $request->phone_2;
        $company->address = $request->address;
        $company->facebook = $request->facebook;
        $company->youtube = $request->youtube;
        $company->linkedin = $request->linkedin;
        $company->instagram = $request->instagram;
        $company->updated_by = 1;
        $company->logo = $companyLogo;
        $company->save();
        if($company){
            return redirect()->back('success','profile updated successfully');
        }
        return redirect()->back()->withInput();
    }



    //Welcome note
    public function welcome( CompanyProfile $company){
        $company = CompanyProfile::first();
        return view('admin.content.welcome',compact('company'));
    }

      // Welcome data update
    public function welcomeUpdate(Request $request){
        $this->validate($request,[
            'welcome_title' => 'required|max:200',
        ]);
        $company = CompanyProfile::first();
        $company->welcome_title = $request->welcome_title;
        $company->welcome_note = $request->welcome_note;
        $company->updated_by = 1;
        if($request->hasFile('welcome_image')){
            $image_path = public_path($company->welcome_image);
            @unlink($image_path);
            $company->welcome_image = $this->imageUpload($request, 'welcome_image', 'uploads/welcome');
          }

        $company->save();
        return back()->with('success','welcome note updated successfully.');
    }
    //service function
    public function service(){
        return view('admin.service.service');
    }
    public function banner(){
        return view('admin.banner.banner');
   
    }
    public function aboutUs(){
        $company = CompanyProfile::first();
        return view('admin.content.about_us',compact('company'));
    }
      // about data update
    public function aboutUpdate(Request $request){
        $company = CompanyProfile::first();
        $about_image = '';
        if($request->hasFile('about_image'))
        {
            if(!empty($company->about_image) && file_exists($company->about_image))
            {
                unlink($company->about_image);
            }
            $about_image = $this->imageUpload($request, 'about_image', 'uploads/about/');
        }
        else{
            $about_image = $company->about_image;
        }

        $company->about_image       = $about_image;
        $company->about_title       = $request->about_title;
        $company->about_description = $request->about_description;
        $company->save();
        return back()->with('success','welcome note updated successfully.');
    }
    public function mission(Request $request){
        $company = CompanyProfile::first();
        return view('admin.content.mission',compact('company'));
    }
      // mission vission data update
    public function missionUpdate(Request $request){
        $company = CompanyProfile::first();
        $company->mission_vision_title = $request->mission_vision_title;
        $company->mission_vision = $request->mission_vision;
        $company->trams_condition_title = $request->trams_condition_title;
        $company->trams_condition = $request->trams_condition;
        $company->save();
        return back()->with('success','Mission Vission & term condition updated successfully');
    }
    public function refund(CompanyProfile $company){
        $company = CompanyProfile::first();
        return view('admin.content.refund',compact('company'));
    }
    public function refundUpdate(Request $request){
        $company = CompanyProfile::first();
        $company->refund_title = $request->refund_title;
        $company->refund_details= $request->refund_details;
        $company->save();
        return back()->with('success','Refund data updated successfully');
        
    }
    public function faq(){
        $company = CompanyProfile::first();
        return view('admin.content.faq',compact('company'));
    }
    public function faqUpdate(Request $request){
        $company = CompanyProfile::first();
        $company->faq_title = $request->faq_title;
        $company->faq_details= $request->faq_details;
        $company->save();
        return back()->with('success','FAQ data updated successfully');
        
    }



    
    // public function videoGallary(){
    //     return view('admin.content.video_gallary');
    // }
    // public function photoGallary(){
    //     return view('admin.content.photo_gallary');
    // }
  
    

    // public function update(Request $request, CompanyProfile $company)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'phone' => 'required',
    //         'address' => 'required|string',
    //         'logo' => 'mimes:jpg,jpeg,png,bmp',
    //     ]);

    //     // Image Update 
    //     $companyLogo = '';
    //     if($request->hasFile('logo'))
    //     {
    //         if(!empty($company->logo) && file_exists($company->logo))
    //         {
    //             unlink($company->logo);
    //         }
    //         $companyLogo = $this->imageUpload($request, 'logo', 'upload');
    //     }
    //     else{
    //         $companyLogo = $company->logo;
    //     }
    //     $company->name = $request->name;
    //     $company->email = $request->email;
    //     $company->phone = $request->phone;
    //     $company->address = $request->address;
    //     $company->about = $request->about;
    //     $company->slogan = $request->slogan;
    //     $company->facebook = $request->facebook;
    //     $company->instagram = $request->instagram;
    //     $company->twitter = $request->twitter;
    //     $company->linkedin = $request->linkedin;
    //     $company->logo = $companyLogo;
    //     $company->save();
    //     if($company){
    //         return redirect()->back();
    //     }
    //     return redirect()->back()->withInput();
    // }
}

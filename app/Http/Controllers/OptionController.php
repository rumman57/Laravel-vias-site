<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteOption;
use Auth;
use Session;

class OptionController extends Controller
{
    public function getGlobalSiteOption(){
    	$options = SiteOption::find(1);
    	return view('myadmin.siteoptions.globalsiteoptions')->withSiteoptions($options);
    }

    public function postGlobalSiteOption(Request $request){

    	$this->validate($request,[
            'logo'       => 'image',
            'home_bg_img'        => 'image',
            'contact_bg_img' => 'image',
            'about_bg_img'        => 'image',
            'faq_bg_img'       => 'image',
            'ongoing_bg_img'   => 'image',
            'apply_bg_img'   => 'image',
            'gc_bg_img'   => 'image',
            'tmn_bg_img'   => 'image',
            'copyright_left'   => '',
            'copyright_right'   => ''
        ]);

        $option = SiteOption::find(1);

        $option->copyright_left = $request->copyright_left;
        $option->copyright_left_az = $request->copyright_left_az;
        $option->copyright_left_ru = $request->copyright_left_ru;
        $option->copyright_left_ar = $request->copyright_left_ar;
        $option->copyright_left_tr = $request->copyright_left_tr;

        $option->copyright_right = $request->copyright_right;
        $option->copyright_right_az = $request->copyright_right_az;
        $option->copyright_right_ru = $request->copyright_right_ru;
        $option->copyright_right_ar = $request->copyright_right_ar;
        $option->copyright_right_tr = $request->copyright_right_tr;

        if($request->hasFile('logo')){
            $image = $request->file('logo');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->logo = $filename;
         }


         if($request->hasFile('home_bg_img')){
            $image = $request->file('home_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->home_bg_img = $filename;
         }

         if($request->hasFile('contact_bg_img')){
            $image = $request->file('contact_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->contact_bg_img = $filename;
         }

         if($request->hasFile('about_bg_img')){
            $image = $request->file('about_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->about_bg_img = $filename;
         }

         if($request->hasFile('faq_bg_img')){
            $image = $request->file('faq_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->faq_bg_img = $filename;
         }

         if($request->hasFile('ongoing_bg_img')){
            $image = $request->file('ongoing_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->ongoing_bg_img = $filename;
         }

         if($request->hasFile('apply_bg_img')){
            $image = $request->file('apply_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->apply_bg_img = $filename;
         } 

         if($request->hasFile('gc_bg_img')){
            $image = $request->file('gc_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->gc_bg_img = $filename;
         }

         if($request->hasFile('tmn_bg_img')){
            $image = $request->file('tmn_bg_img');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $option->tmn_bg_img = $filename;
         }
        
        $option->save();
        
        Session::flash('adsuccess','Global Option Set Successfully Successfully');
        return redirect()->back();

    }
}

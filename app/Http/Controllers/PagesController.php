<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteOption;
use App\Models\Country;
use App\Mail\contactformmail;
use Auth;
use Session;
use Mail;

class PagesController extends Controller
{
    public function getGeneralConditions(){
        $options = SiteOption::find(1);
    	return view('pages.generalconditions')->withOption($options);
    }
    public function getFaqPage(){
        $options = SiteOption::find(1);
    	return view('pages.faq')->withOption($options);
    }
    public function getUrgentApplyPage(){
        $countries = Country::orderBy('name','asc')->get();
        $options = SiteOption::find(1);
    	return view('pages.urgent_apply')->withOption($options)->withCountries($countries);
    }
    public function getStandardApplyPage(){
        $countries = Country::orderBy('name','asc')->get();
        $options = SiteOption::find(1);
    	return view('pages.standard_apply')->withOption($options)->withCountries($countries);
    }
    public function getOngoingPage(){
        $options = SiteOption::find(1);
    	return view('pages.ongoing')->withOption($options);
    }
    public function getApplyNowPage(){
        $countries = Country::orderBy('name','asc')->get();
        $options = SiteOption::find(1);
    	return view('pages.applynow')->withOption($options)->withCountries($countries);
    }
    public function getContactPage(){
        $options = SiteOption::find(1);
    	return view('pages.contact')->withOption($options);
    }
    public function getAboutPage(){
        $options = SiteOption::find(1);
        return view('pages.about')->withOption($options);
    }
    public function getTestimonialPage(){
        $options = SiteOption::find(1);
    	return view('pages.testimonial')->withOption($options);
    }

    public function postContactPage(Request $request){
        $this->validate($request,[
            'message_type'       => 'required',
            'firstname'       => 'required',
            'lastname'        => '',
            'email' => 'required',
            'country'        => 'required',
            'doc_number'       => '',
            'message'       => 'required|max:600',
            'g-recaptcha-response' => 'required'
        ]);

        if($request->message_type==2){
                $this->validate($request,[
                'doc_number'        => 'required'
            ]);
        }

        Mail::send(new contactformmail($request));

        Session::flash('success','Mail Sent Successfully. You will be contacted as soon as possible.
                        Best Regards,
                        eVisa Azerbaijan Team');

        return redirect()->back();
    }
}

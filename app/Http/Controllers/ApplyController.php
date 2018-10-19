<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\SiteOption;
use App\Mail\AdminNewAppNtfc;
use App\Mail\UserNewAppNtfc;
use Session;
use Auth;
use Mail;


class ApplyController extends Controller
{
    public function postApply(Request $request){

    	 $this->validate($request,[
            'select_country'       => 'required',
            'document_type'        => 'required',
            'processing_type' => 'required',
            'purpose_type'        => 'required',
            'arrival_date'       => '',
            'arrival_date2'       => '',
            'end_date'       => '',
            'applicant'       => '',
            'g-recaptcha-response' => 'required'
        ]);

       $options = SiteOption::find(1);

    	 if($request->diseases_check !=1){
          $this->validate($request,[
            'diseases_check'       => 'required'
          ]);
         }

         if($request->eVisa_requirements !=1){
          $this->validate($request,[
            'eVisa_requirements'       => 'required'
          ]);
         } 
          if($request->agreement_check !=1){
          $this->validate($request,[
            'agreement_check'       => 'required'
          ]);
         }
         
         session(['signedup' => true]);
         session(['select_country' => $request->select_country]);
         session(['document_type' => $request->document_type]);
         session(['processing_type' => $request->processing_type]);
         session(['purpose_type' => $request->purpose_type]);
         session(['arrival_date' => $request->arrival_date]);
         session(['arrival_date2' => $request->arrival_date2]);
         session(['end_date' => $request->end_date]);
         session(['applicant' => $request->applicant]);
         session(['appcountmul' => $request->applicant]);


        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length=10;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
           $randomString .= $characters[rand(0, $charactersLength - 1)];
        }


        session(['ref_key' => $randomString]);
        
         if($request->processing_type==2){
            return redirect()->route('apply.urgentapplyconfirmation');
         }else{
          $options = SiteOption::find(1);
          $refNO = session('ref_key');
          $apply = Apply::where('ref_number','=',$refNO)->get();
         	return redirect()->route('apply.personalinfo')->withOption($options)->withApplies($apply);
         }
    }

    public function getUrgentApplyConfirmation(){
        $options = SiteOption::find(1);
        $isSignedUp = session('signedup');
    	if($isSignedUp==true){
          return view('apply.geturgenappconfimation')->withOption($options);
    	}
    	else{
    	   return redirect()->route('pages.apply.now');
    	}
     }
    
    public function getPersonalInfo(){
    	$isSignedUp = session('signedup');
      $options = SiteOption::find(1);
    	if($isSignedUp==true){
           $refNO = session('ref_key');
           $apply = Apply::where('ref_number','=',$refNO)->get();
           return view('apply.personalinfo')->withOption($options)->withApplies($apply);
    	}
    	else{
    	   return redirect()->route('pages.apply.now');
    	}
    }

    public function postPersonalInfo(Request $request){

    	$this->validate($request,[
            'person_surname'              => 'required',
            'person_other_name'           => '',
            'person_country_birth'        => 'required',
            'person_occupation'           => 'required',
            'country_phone_code'          => 'required',
            'person_mobile_number'        => 'required',
            'pemanent_residence_address'  => 'required',
            'Email'                       => 'required',
            'passport_expiry_date'        => 'required',
            'passport_form'                 => 'required',
            'person_residence_address'    => 'required',
            'person_visits_check'         => 'required',
            'person_reason'               => ''
        ]);

        if($request->person_visits_check ==1){
          
            $this->validate($request,[
                 'person_reason'  => 'required'
            ]);

        }

        $apply = new Apply();

        $options = SiteOption::find(1);
        
        $tud=0;
        $aplc=0;
        $apply->select_country = session('select_country');
        $apply->document_type = session('document_type');

        if(session('processing_type') ==1){
           $apply->processing_type = 'Standard ( 1-3 business days )';
        }else{
           $apply->processing_type = 'Urgent ( within 3-5 hours )';
        }

        $apply->purpose_type = session('purpose_type');
        $apply->arrival_date = session('arrival_date');
        $apply->arrival_date2 = session('arrival_date2');
        $apply->end_date = session('end_date');
        $apply->applicant = session('appcountmul');

         $aplc = session('appcountmul');

        if(session('processing_type') ==1){
           $apply->totalusd = session('appcountmul')*65;
           $tud = session('appcountmul')*65;
        }else{
           $apply->totalusd = session('appcountmul')*115;
           $tud = session('appcountmul')*115;
        }

        $apply->person_surname               = $request->person_surname;
        $apply->person_other_name            = $request->person_other_name;
        $apply->person_country_birth         = $request->person_country_birth;
        $apply->person_occupation            = $request->person_occupation;
        $apply->country_phone_code           = $request->country_phone_code;
        $apply->person_mobile_number         = $request->person_mobile_number;
        $apply->pemanent_residence_address   = $request->pemanent_residence_address;
        $apply->Email                        = $request->Email;
        $apply->passport_expiry_date         = $request->passport_expiry_date;
        $apply->person_residence_address     = $request->person_residence_address;
        $apply->person_other_name            = $request->person_other_name;
        $apply->person_visits_check          = $request->person_visits_check;
        $apply->person_reason                = $request->person_reason;


        if($request->hasFile('passport_form')){
            $image = $request->file('passport_form');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = 'uploads/';
            $image->move($location, $filename);
            $apply->Attach_file = $filename;
         }

      
        $randomString = session('ref_key');
        $apply->ref_number = $randomString;

        $apply->save();

      if(Session::get('applicant')>1){

          $options = SiteOption::find(1);
       
          $refNO = session('ref_key');

          $apply = Apply::where('ref_number','=',$refNO)->get();

          $sap = Session::get('applicant');
          $sap = $sap-1;
          session(['applicant' => $sap]);

          return view('apply.personalinfo')->withApplies($apply)->withOption($options);     
            
       }else{

        $request->session()->forget('signedup');
        $request->session()->forget('select_country');
        $request->session()->forget('document_type');
        $request->session()->forget('processing_type');
        $request->session()->forget('arrival_date');
        $request->session()->forget('arrival_date2');
        $request->session()->forget('arrival_date');
        $request->session()->forget('end_date');
        $request->session()->forget('applicant');
        $request->session()->forget('ref_key');
        $request->session()->forget('appcountmul');
        
        Mail::send(new AdminNewAppNtfc($randomString));
        Mail::send(new UserNewAppNtfc($randomString));

        $options->total_aplctns = $options->total_aplctns+1;
        $options->save();
        
        return view('apply.applyactivate')->withRef($randomString)->withTotalusd($tud)->withApplicant($aplc)->withOption($options);

       }   
    }


    public function postOngoingApplicationStatus(Request $request){

        $this->validate($request,[
            'reference_no' => 'required',
            'g-recaptcha-response' => 'required'

        ]);

        $options = SiteOption::find(1);

        $apply = Apply::where('ref_number','=',$request->reference_no)->first();
        if($apply){
            return view('apply.ongoingstatus')->withApply($apply)->withOption($options);
        }else{
            Session::flash('loginerror','Ooops!! Wrong Reference No. Try Again!!!');
            return redirect()->back();
        }
        
    }
    

   

   
}

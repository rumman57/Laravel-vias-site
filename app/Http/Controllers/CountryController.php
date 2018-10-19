<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Auth;
use Session;

class CountryController extends Controller
{
    public function getAllCountries(){
      
      $coutries = Country::orderBy('name','asc')->get();
      return view('myadmin.country.allcountry')->withCountries($coutries);
      
    }

    public function getBlockVisaCountries(){
      
      $coutries = Country::where('visa_block','=',2)->orderBy('id','DESC')->get();
      return view('myadmin.country.blockvisacnty')->withCountries($coutries);
      
    }

    public function getExemptVisaCountries(){
      
      $coutries = Country::where('visa_exempt','=',3)->orderBy('id','DESC')->get();
      return view('myadmin.country.exmptcontries')->withCountries($coutries);
      
    }

    public function getAddCountry(){
    	return view('myadmin.country.addcountry');
    }
    public function postAddCountry(Request $request){
    	
    	$this->validate($request,array(
            'name' => 'required|max:100'
        ));
        $country = new Country;
        $country->name = $request->name;
        $country->save();

        Session::flash('adsuccess',"Country Added Successfully");

        return redirect()->back();
    }


    public function getMakeCountryExempt($id){
      
       $country = Country::find($id);
       $country->visa_exempt = 3;
       $country->save();
       return redirect()->back();
    }

    public function getRemoveCountryExempt($id){
      
       $country = Country::find($id);
       $country->visa_exempt = 1;
       $country->save();
       return redirect()->back();
    }

    public function getMakeCountryBlock($id){
      
       $country = Country::find($id);
       $country->visa_block = 2;
       $country->save();
       return redirect()->back();
    }

    public function getRemoveCountryBlock($id){
      
       $country = Country::find($id);
       $country->visa_block = 1;
       $country->save();
       return redirect()->back();
    }

    public function destroy($id){
        $country = Country::find($id);
        $country->delete();
        return redirect()->back();
    }

    public function getManageSpecificPassport($id){
       
       $country = Country::find($id);
       return view('myadmin.country.country_passport_manage')->withCountry($country);

    }

    public function putManageSpecificPassport(Request $request,$id){
       
       $this->validate($request,[
            'ordinary'       => '',
            'diplomatic'        => '',
            'service' => '',
            'special'        => '',
            'stateless'       => '',
            'official'       => '',
            'days'       => ''
        ]);

       $country = Country::find($id);

      // dd($request->ordinary);

       if($request->ordinary =='ordinary'){
         $country->ordinary = 2;
       }else{
        $country->ordinary = 1;
       }

       if($request->diplomatic =='diplomatic'){
         $country->diplomatic = 2;
       }else{
        $country->diplomatic = 1;
       }

       if($request->service =='service'){
         $country->service = 2;
       }else{
        $country->service = 1;
       }

       if($request->special =='special'){
         $country->special = 2;
       }else{
        $country->special = 1;
       }

       if($request->stateless =='stateless'){
         $country->stateless = 2;
       }else{
        $country->stateless = 1;
       }

       if($request->official =='official'){
         $country->official = 2;
       }else{
        $country->official = 1;
       }

       if($request->days ==30){
         $country->days = 30;
       }

       if($request->days ==14){
         $country->days = 14;
       }
       if($request->days ==90){
         $country->days = 90;
       }

       if($request->ccv ==1){
         $country->is_partial_exempt = 1;
       }

       if($request->ccv ==4){
         $country->is_partial_exempt = 4;
       }

       $country->save();
       Session::flash('adsuccess',"Options Set Successfully");
       return redirect()->back();
       
    }
}

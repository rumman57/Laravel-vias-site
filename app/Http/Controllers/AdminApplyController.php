<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Apply;

class AdminApplyController extends Controller
{
    public function getNewApplicationLists(){
      
       $applies = Apply::select('ref_number')
                   ->where('application_complete', '=', 1)
                   ->groupBy('ref_number')
                   ->orderBy('id','desc')
                   ->get();

    	return view('myadmin.application.newapplicationlist')->withApplies($applies);
    }

    public function getNewApplicationSinglePage($id){
    	$apply = Apply::where('ref_number','=',$id)->get();
    	return view('myadmin.application.singlenewapplication')->withApplies($apply);
    }

    public function getMakeApplicationComplete($id){

    	$applies = Apply::where('ref_number','=',$id)->get();
        foreach ($applies as $apply) {
            $apply->application_complete = 2;
            $apply->save();
        }
    	
    	$applies = Apply::select('ref_number')
                   ->where('application_complete', '=', 1)
                   ->groupBy('ref_number')
                   ->orderBy('id','desc')
                   ->get();

        return view('myadmin.application.newapplicationlist')->withApplies($applies);

    }

    public function getCompleteApplicationLists(){

    	$applies = Apply::select('ref_number')
                   ->where('application_complete', '=', 2)
                   ->groupBy('ref_number')
                   ->orderBy('id','desc')
                   ->get();
    	return view('myadmin.application.completeapplicationlist')->withApplies($applies);

    }

    public function getMakeApplicationInComplete($id){

    	$applies = Apply::where('ref_number','=',$id)->get();
        foreach ($applies as $apply) {
            $apply->application_complete = 1;
            $apply->save();
        }
    	$applies = Apply::select('ref_number')
                   ->where('application_complete', '=', 2)
                   ->groupBy('ref_number')
                   ->orderBy('id','desc')
                   ->get();
        return view('myadmin.application.completeapplicationlist')->withApplies($applies);
    }

    public function destroy($id){

        $applies = Apply::where('ref_number','=',$id)->get();
        foreach ($applies as $apply) {
            $apply->delete();
        }
        return redirect()->back();
    }
}

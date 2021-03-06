<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use App\Models\Apply;

class AdminNewAppNtfc extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($randomString)
    {
        $this->data=$randomString;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $apply = Apply::where('ref_number','=',$this->data)->first();
        $processing_type = $apply->processing_type;
        $select_country = $apply->select_country;
        $document_type = $apply->document_type;
        $purpose_type = $apply->purpose_type;
        $arrival_date = $apply->arrival_date;
        $end_date = $apply->end_date;
        $applicant = $apply->applicant;
        $totalusd = $apply->totalusd;

        return $this->view('mails.adminapplyntfc',['processing_type'=>$processing_type,'select_country'=>$select_country,'document_type'=>$document_type,'purpose_type'=>$purpose_type,'arrival_date'=>$arrival_date,'end_date'=>$end_date,'applicant'=>$applicant,'totalusd'=>$totalusd])->to('rumman142228@gmail.com');
    }
}

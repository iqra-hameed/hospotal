<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use App\Models\Batch;
use App\Models\Refrel;
use Illuminate\Http\Request;
use DB;
class RegisterationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function checkLeaddata(Request $request)
    {
        $lead_id=$request->post('lead_id');
$lead=Lead::where(['id'=>$lead_id, "lead_status"=>"active" ])->get();
$lead_down= '';
foreach($lead as $list)
{

    $lead_down.='
    <label for="example-text-input" class="col-3 text-primary col-form-label">Phone</label>
    <input value=" '.$list->phone.'" placeholder= " enter name" class=\"form-control\"><br>
    ';
    $lead_down.='
    <label for="example-text-input" class="col-3 col-form-label">Date</label>
    <input value="'.$list->date.'" class=\"form-control\"><br>
    ';

    $lead_down.='
    <label for="example-text-input" class="col-3 col-form-label">Purpose</label>
    <input value="'.$list->purpose.'" class=\"form-control\"><br>
    ';
    $lead_down.='
    <label for="example-text-input" class="col-3 col-form-label">Refrel</label>
    <input value="'.$list->refrel.'" class=\"form-control \"><br>
    ';
    $lead_down.='
    <label for="example-text-input" class="col-3 col-form-label">Lead_Status</label>
    <input value="'.$list->lead_status.'" class=\"form-control\"><br>
    ';
}
return response()->json([$lead_down]);

    }

    public function checkBatchdata(Request $request)
    {
        $batch_id=$request->post('batch_id');
        $batch=Batch::where(['id'=>$batch_id])->get();
        $batch_down= '';
        foreach($batch as $list)
        {
            $batch_down.='
            <input value="'.$list->name.'" class=\"form-control\">
            ';
            $batch_down.='
            <input value="'.$list->starting_date.'" class=\"form-control\">
            ';

            $batch_down.='
            <input value="'.$list->ending_date.'" class=\"form-control\">
            ';
            $batch_down.='
            <input value="'.$list->batch_no.'" class=\"form-control\">
            ';

        }



        return response()->json([$batch_down]);
    }
    public function checkRefreldata(Request $request)
    {
        $refrel_id=$request->post('refrel_id');
        $refrel=Refrel::where(['id'=>$refrel_id])->get();
        $refrel_down= '';
        foreach($refrel as $list)
        {
            $refrel_down.='
            <input value="'.$list->name.'" class=\"form-control\">
            ';
            $refrel_down.='
            <input value="'.$list->phone.'" class=\"form-control\">
            ';

            $refrel_down.='
            <input value="'.$list->status.'" class=\"form-control\">
            ';
            $refrel_down.='
            <input value="'.$list->balance.'" class=\"form-control\">
            ';

        }



        return response()->json([$refrel_down]);
    }
    public function create(Request $request)
    {

//  $leads = Lead::select("name")->where("lead_status", "=", 'active')->get();

//  return view('registeration',compact('leads'));

 $leads = Lead::where("lead_status", "=", 'active')->get();
$batch=Batch::all();
$refrel=Refrel::all();
        return view('registeration',compact('leads','batch','refrel'));

    }






    public function lead(Registeration $Registeration, Request $request){
           dd("aimhere");
           $lead=Lead::find($request->id);
           dd($lead);
           $registeration->where('id', $request->id)->update(array('lead'=>'name'));
          return redirect()->back();

         }
        }

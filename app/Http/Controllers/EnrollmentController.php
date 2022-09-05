<?php

namespace App\Http\Controllers;
use App\Models\Enrollment;
use App\Models\Refrel;
use App\Models\Courses;
use App\Models\Batch;
use App\Models\Lead;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Enrollment::all();
          return view('enrollment.enrollments', compact('data'));
    }

    /**
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    { $refrels= Refrel::all();
        $courses= Courses::all();
        $leads = Lead::select("name")
                        ->where("lead_status", "=", 'active')
                        ->get();
        //$leads= Lead::where('leads.lead_status', 'active') ->orderBy('id', 'desc');
        $batches= Batch::all();
        return view('enrollment.enroll_create',compact('refrels','courses','batches','leads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Enrollment;
        $data->lead_id=$request->lead_id;
        $data->father_name=$request->father_name;
        $data->course=$request->course;
        $data->discount=$request->discount;
        $data->installments=$request->installments;
        $data->course_status=$request->course_status;
        $data->admission_date=$request->admission_date;
        $data->fee_date=$request->fee_date;
        $data->status=$request->status;
        $data->refrel=$request->refrel;
        $data->refrel_percentage=$request->refrel_percentage;
        $data->batch_id=$request->batch_id;
$data->save();
return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function refrel(Enrollment $Enrollment, Request $request){
        dd("aimhere");
             $refrel=Refrel::find($request->id);
             dd($refrel);
             $enrollment->where('id', $request->id)->update(array('refrel'=>'name'));
             return redirect()->back();

             }
         public function course(Enrollment $Enrollment, Request $request){
                dd("aimhere");
                     $course=Courses::find($request->id);
                     dd($course);
                     $enrollment->where('id', $request->id)->update(array('course'=>'name'));
                     return redirect()->back();

                     }
         public function batch(Enrollment $Enrollment, Request $request){
                        dd("aimhere");
                             $refrel=Batch::find($request->id);
                             dd($batch);
                             $enrollment->where('id', $request->id)->update(array('batch'=>'name'));
                             return redirect()->back();

                             }
         public function lead(Enrollment $Enrollment, Request $request){
                         dd("aimhere");
                         $lead=Lead::find($request->id);
                         dd($lead);
                         $enrollment->where('id', $request->id)->update(array('lead'=>'name'));
                         return redirect()->back();

                                     }
}


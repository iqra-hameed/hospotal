<?php

namespace App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Refrel;

use Validator;
class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Lead::all();
        // $data=Lead::join('refrels','refrels.id','=','leads.refrel');
          return view('lead.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $refrels= Refrel::all();
          return view('lead.leads', compact('refrels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
                    'name' => 'required | unique:leads,name,id',
                    'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                    'date' => 'required',
                    'purpose' => 'required',
                ]);

        $data= new Lead;
        $data->name=$request->name;
        $data->phone=$request->phone ;
        $data->date=$request->date;
        $data->purpose=$request->purpose;
        $data->lead_status=$request->lead_status;
        $data->refrel=$request->refrel;
$data->save();


       return redirect()->back();

    //     $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required',
    //         'date' => 'required',
    //         'purpose' => 'required',
    //         'lead_status' => 'required',
    //         'referal' => 'required',
    //     ]);
    //   Lead::create($request->all());


    //     return redirect()->route('lead.leads') ->with('success',' lead data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('lead.index',compact('data'));
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
    public function refrel(Lead $lead, Request $request){
        dd("aimhere");
             $refrel=Refrel::find($request->id);
             dd($refrel);
             $lead->where('id', $request->id)->update(array('refrel'=>'name'));
             return redirect()->back();

             }



}

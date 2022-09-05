<?php

namespace App\Http\Controllers;

use App\Models\Labes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LabesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=URL('add/Lab');
        return view('add_Labes')->with(compact('url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'Lab_name'=>'required',
            'Lab_price'=>'required',
            'Lab_location'=>'required'
        ]);

        $Labes=new Labes;
        $Labes->Lab_name=$request->input('Lab_name');
        $Labes->Lab_location=$request->input('Lab_location');
        $Labes->Lab_price=$request->input('Lab_price');
        $Labes->save();
        return redirect('Labes/show')->with('success','New Lab was success fully registerd');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Labes  $labes
     * @return \Illuminate\Http\Response
     */
    public function show(Labes $labes)
    {
        $labes=Labes::paginate(100);
        $total_labes=count($labes);
        $title="Labes";
        return view('Labes_manage')->with(compact('labes','title','total_labes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Labes  $labes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $labes=Labes::where('lab_id',$id)->get();
        $url=url('update/Lab').'/'.$id;

        return view('update_labes')->with(compact('labes','url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Labes  $labes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        Labes::where('lab_id',$id)->update([
            'Lab_name'=>$request->input('Lab_name'),
            'Lab_location'=>$request->input('Lab_location'),
            'Lab_price'=>$request->input('Lab_price'),
        ]);

        return redirect('Labes/show')->with('success','Lab was success fully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Labes  $labes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Labes::where('lab_id',$id)->delete();
        return redirect()->back()->with('success','Lab was success fully deleted');
    }
}

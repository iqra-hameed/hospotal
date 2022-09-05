<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Courses::all();
        return view('course.course_index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data= new Courses;
        // $data->course_name=$request->course_name;
        // $data->course_duration=$request->course_duration;
        // $data->course_fee=$request->course_fee;
        // $data->course_status=$request->course_status;
        // $data->save();
        // return redirect('/courses')->with('success','courses created successfully.');
        // Courses::insert([
        //     'course_name'=>$request->course_name,
        //    'course_duration'=>$request->course_duration,
        //    'course_fee'=>$request->course_fee,
        //    'course_status'=>$request->course_status
        //  ]);

        //  return Redirect()->back()->with('success','courses added successfully');

        DB::table('courses')->insert([
            'course_name' =>$request->course_name,

                    'course_duration'=>$request->course_duration,
                    'course_fee'=>$request->course_fee,
                    'course_status'=>$request->course_status
        ]);
        return redirect()->back();
   }

    //     Courses::insert([
    //         //'course_name'=>(!is_null($request->course_name) ? $request->course_name : ""),
    //          'course_name'=>$request->course_name,
    //         //'course_name' => $request->input('course_name', ''),
    //         'course_duration'=>$request->course_duration,
    //         'course_fee'=>$request->course_fee,
    //         'course_status'=>$request->course_status
    //       ]);
    //  return Redirect()->back()->with('success','courses added successfully');


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
}

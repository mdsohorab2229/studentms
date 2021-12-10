<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studentms;
use Illuminate\Support\Facades\File;
class studentmController extends Controller
{


 public function __construct()
 {
     $this->middleware('auth');
 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student=Studentms::all();
        $student=Studentms::paginate(3);
        return view('admin.pages.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    
        $this->validate($request,
        [
            'fastname'=>'required',
            'lastname'=>'required',
            'fathername'=>'required',
            'number'=>'required',
            
        ]);
        $student =new Studentms;
        $student->fastname=$request->fastname;
        $student->lastname=$request->lastname;
        if($request->hasfile('img'))
        {
            $file=$request->file('img');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/images',$filename);
            $student->img=$filename;
        }
        $student->fathername=$request->fathername;
        $student->number=$request->number;
        $student->save();
        return redirect('/student-info')->with('status','Data Add Success Fully');
        
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
       $student=Studentms::find($id);
       return view('admin.pages.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        $student =Studentms::find($id);
        $student->fastname=$request->fastname;
        $student->lastname=$request->lastname;
        $student->fathername=$request->fathername;
        $student->number=$request->number;
        if($request->hasfile('img'))
        {
            $detanition='uploads/images'.$student->img;
            if(File::exists($detanition))
            {
                File::delete($detanition);
            }

            $file=$request->file('img');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/images',$filename);
            $student->img=$filename;
        }

        $student->update();
        return redirect('/student-info')->with('status','Data Add Success Fully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $student=Studentms::find($id);
      $student->delete();
      return redirect('/student-info')->with('status','Data Add Success Fully');
    }
}

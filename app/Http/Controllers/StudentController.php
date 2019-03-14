<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use\App\Faculty;
use App\Student;
use App\Group;

use App\Http\Requests;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exec = DB::table('faculties')
        ->join('groups','faculties.id','=','groups.faculty_id')
        ->join('students','groups.id','=','students.group_id')
        ->select('students.id','students.sname','students.age','students.rate','groups.gname','faculties.fname')->get(); //запрос на выборку.
        
        $data = ['exec' => $exec];  

        return view('students.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       $exec = DB::table('faculties')->join('groups','faculties.id','=','groups.faculty_id')->select('groups.gname','faculties.fname', 'groups.id')->get(); //запрос на выборку.
       $data = ['exec' => $exec];

        return view('students.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student = new Student();

       $sname=$request->sname;
       $student->sname=$sname;

       $age=$request->age;
       $student->age=$age;

       $rate=$request->rate;
       $student->rate=$rate;

       $group_id=$request->group_id;
       $student->group_id=$group_id;

       $student->save();
       $data = ['sname'=>$sname, 'age'=>$age, 'rate'=>$rate, 'group_id'=>$group_id];
       return view('students.store',$data);
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
        $student = Student::find($id);
        $data = ['student' => $student]; 

        $exec = DB::table('faculties')
        ->join('groups','faculties.id','=','groups.faculty_id')
        ->join('students','groups.id','=','students.group_id')
        ->select('groups.id','students.rate','groups.gname','faculties.fname')
        ->where('students.id','=',$id)
        ->get();

        /*$exec2 = DB::table('faculties')
        ->join('groups','faculties.id','=','groups.faculty_id')
        ->select('groups.id','groups.gname','faculties.fname')
        ->get();*/

        $data1 = ['exec' => $exec];
        //$data2 = ['exec2' => $exec2];             

        return view('students.edit', $data, $data1);
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
       $student = Student::find($id);

       $sname=$request->sname;
       $student->sname=$sname;

       $age=$request->age;
       $student->age=$age;

       $rate=$request->rate;
       $student->rate=$rate;

       $group_id=$request->group_id;
       $student->group_id=$group_id;

       $student->save();
       
       return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id', '=', $id)->delete();        

        return redirect()->route('students.index');
    }
}

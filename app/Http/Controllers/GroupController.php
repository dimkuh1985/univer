<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Faculty;
use App\Group;
use App\Http\Requests;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $exec = DB::table('faculties')->join('groups','faculties.id','=','groups.faculty_id')->select('groups.gname','faculties.fname')->get(); //запрос на выборку.
        $data = ['exec' => $exec];  

        return view('groups.index', $data);         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $data = ['groups' => $groups];
        
        $faculties = Faculty::all();
        $data1 = ['faculties' => $faculties];

        return view('groups.create', $data, $data1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $group = new Group();

       $gname=$request->gname;
       $group->gname=$gname;

       $faculty_id=$request->faculty_id;
       $group->faculty_id=$faculty_id;

       $group->save();
       $data = ['gname'=>$gname, 'faculty_id'=>$faculty_id];
       return view('groups.store',$data);
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
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct(){
        // $this->middleware('auth');
    }
    public function index()
    {
        return "kjdjdsjsd";
    }
    public function ss()
    {
        return "kjdjdsjsd";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "in create method";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        // return view(view :'welcome')->with("data",23);
        // return view(view :'welcome')->with(["age"=> 23 ,"name" => "asmaa ashraf"]);
        $data=[];
        $data['name']="asmaa";
        $data['id']=2354;
        $obj= new \stdClass();
        $obj->name="asmaa ashraf kamal";
        $obj->id=789;
        $data=['a'=>'ahmed','b'=>'basma'];
        return view('welcome',compact('data'));
        // return view('welcome')->with('data'->$data);

    }
    
    public function show($id)
    {
        return "in show";
    }
    public function land()
    {
        return view('langding');
        }
        public function land1()
        {
            return view('layout/master');
            }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

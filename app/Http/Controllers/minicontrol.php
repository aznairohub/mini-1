<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\treg;
use App\Models\syllabus;
use App\Models\timetable;
use App\Models\result;
use App\Models\feed;

class minicontrol extends Controller
{
    public function __construct()
    {
        $this->obj=new treg;
        $this->obj1=new syllabus;
        $this->obj2=new timetable;
        $this->obj3=new result;
        $this->obj4=new feed;
    }
    public function index()
    {
        return view('user.index');
    }
    // public function login()
    // {
    //     return view('user.adlogin');
    // }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function adhome()
    {
        return view('user.adhome');
    }
    public function apptchr()
    {
        $data['result']=$this->obj->apptr('tregs');
        return view('user.apptchr',$data);
    }
    public function appsyllabus()
    {
        $data['res']=$this->obj1->apps('syllabi');
        return view('user.appsyllabus',$data);
    }
    public function apptimetable()
    {
        $data['result']=$this->obj2->appt('timetables');
        return view('user.appt',$data);
    }
   public function appresults()
    {
        $data['result']=$this->obj3->appr('results');
        return view('user.appresults',$data);
    }
    public function vfeed()
    {   
        $data['result']=$this->obj4->viewf('feeds');
        return view('user.vfeed',$data);
    }
    public function ares($id)
    {
        $data=['status'=>"approved"];
        $this->obj3->status('results',$data,$id);
        return redirect('/appresults');
    }
    public function approvesyl($id)
    {
        $data=['status'=>"approved"];
        // print_r($data);
        // exit();
        $this->obj1->status('syllabi',$data,$id);
        return redirect('/appsyllabus');
    }
    public function apptym($id)
    {
        $data=['status'=>"approved"];
        $this->obj2->status('timetables',$data,$id);
        return redirect('/appt');
    }
    public function approvetchr($id)
    {
        $data=['status'=>"approved"];
        $this->obj->status('tregs',$data,$id);
        return redirect('/apptchr');
    }
    public function logout(Request $req)
    {
       $req->session()->forget('sess');
       return redirect('/');
    }
}

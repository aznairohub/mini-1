<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\treg;
use App\Models\syllabus;
use App\Models\note;
use App\Models\timetable;
use App\Models\result;
use App\Models\feed;

class tControl extends Controller
{
    public function __construct()
    {
        $this->obj=new treg;
        $this->obj1=new syllabus;
        $this->obj2=new note;
        $this->obj3=new timetable;
        $this->obj4=new result;
        $this->obj5=new feed;
    }
    public function tregister()
    {
        return view('user.tregister');
    }
    public function rvalt(Request $req)
    {
        $title=$req->input('title');
        $name=$req->input('name');
        $email=$req->input('email');
        $address=$req->input('address');
        $dob=$req->input('dob');
        $place=$req->input('place');
        $username=$req->input('username');
        $password=$req->input('password');
        $data=[
            'title'=>$title,
            'name'=>$name,
            'email'=>$email,
            'address'=>$address,
            'dob'=>$dob,
            'place'=>$place,
            'username'=>$username,
            'password'=>$password,
            'status'=>'not defined',
            'usertype'=>'user'
        ];
        $this->obj->insert('tregs',$data);
        return redirect('/login');
    }

    // login view
    public function login()
    {
        return view('user.tlogin');
    }
    // login as teacher 
    public function logaction(request $req)
    {
        $username=$req->input('username');
        $password=$req->input('password');
        // echo $password;
        // exit();
        $data=$this->obj->log('tregs',$username,$password);
        // print_r($data);
        // echo $data;
        // exit();
        if(isset($data))
        {
            if($data->status=='approved')
            {
                $req->session()->put(array('sess'=>$data->id));
                return redirect('/thome');
            }
            else
            {
                return redirect('/tlogin');
            }
        }
        else{
            return redirect('/tlogin')->with('error','invalid details');
        }
    }
    public function thome()
    {
        return view('user.thome');
    }
    // view upload syllabus page 
    public function upsyllabus()
    {
        return view('user.upsyllabus');
    }
     //  upload syllabus 
    public function upload(Request $rqst)
    {
        $class=$rqst->input('class');
        $subject=$rqst->input('subject');
        $syllabus=$rqst->input('syllabus');
        $data=[
            'class'=>$class,
            'subject'=>$subject,
            'syllabus'=>$syllabus,
            'status'=>'not defined'
        ];
        $this->obj1->insert('syllabi',$data);
        return redirect('/upsyllabus');
    }
     // view upload notes page
    public function upnotes()
    {
        return view('user.upnotes');
    }
    // upload notes 
    public function uploadnotes(Request $rqst)
    {
        $class=$rqst->input('class');
        $subject=$rqst->input('subject');
        $notes=$rqst->file('notes');
        $filename = $notes->getClientOriginalName();
        $notes->move(public_path().'/upload', $filename);
        $data=[
            'class'=>$class,
            'subject'=>$subject,
            'notes'=>$filename,
            'status'=>'not defined'
        ];
        $this->obj2->insert('notes',$data);
        return redirect('/upnotes');
    }
    // view upload timetable page
    public function uptimetable()
    {
        return view('user.uptimetable');
    }
    public function uptime(Request $rt)
    {
        $class=$rt->input('class');
        $subject=$rt->input('subject');
        $timetable=$rt->file('timetable');
        $filename = $timetable->getClientOriginalName();
        $timetable->move(public_path().'/upload', $filename);
        $data=[
            'class'=>$class,
            'subject'=>$subject,
            'timetable'=>$filename,
            'status'=>'not defined'
        ];
        $this->obj3->insert('timetables',$data);
        return redirect('/uptimetable');
    }
    // view upload notes page
    public function upresults()
    {
        return view('user.upresults');
    }
    public function upres(Request $rqt)
    {
        $name=$rqt->input('name');
        $class=$rqt->input('class');
        $subject=$rqt->input('subject');
        $results=$rqt->file('results');
        $filename = $results->getClientOriginalName();
        $results->move(public_path().'/upload', $filename);
        $data=[
            'name'=>$name,
            'class'=>$class,
            'subject'=>$subject,
            'results'=>$results,
            'status'=>'not defined'
        ];
        $this->obj3->insert('results',$data);
        return redirect('/upresults');
    }
    // view feedback page 
    public function view()
    {   
        $id=session('sess');
        $data['result']=feed::join('tregs','tregs.name','=','feeds.tchrname')
        ->where('tregs.id',$id)
        ->select('feeds.stname','feeds.tchrname','feeds.feedback')
        ->get();
        return view('user.view',$data);
    }
}

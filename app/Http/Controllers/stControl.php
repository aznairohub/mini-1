<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\streg;
use App\Models\syllabus;
use App\Models\note;
use App\Models\timetable;
use App\Models\result;
use App\Models\feed;

class stControl extends Controller
{
    public function __construct()
    {
        $this->obj=new streg;
        $this->obj1=new syllabus;
        $this->obj2=new note;
        $this->obj3=new timetable;
        $this->obj4=new result;
        $this->obj5=new feed;
    }
    public function register()
    {
        return view('user.registration');
    }

    // insertvalues to table 
    public function rval(Request $req)
    {
        $title=$req->input('title');
        $name=$req->input('name');
        $email=$req->input('email');
        $fname=$req->input('fname');
        $mname=$req->input('mname');
        $address=$req->input('address');
        $dob=$req->input('dob');
        $place=$req->input('place');
        $pincode=$req->input('pincode');
        $class=$req->input('class');
        $division=$req->input('division');
        $username=$req->input('username');
        $password=$req->input('password');
        $data=[
            'title'=>$title,
            'name'=>$name,
            'email'=>$email,
            'fname'=>$fname,
            'mname'=>$mname,
            'address'=>$address,
            'dob'=>$dob,
            'place'=>$place,
            'pincode'=>$pincode,
            'class'=>$class,
            'division'=>$division,
            'username'=>$username,
            'password'=>$password,
            'status'=>'not defined',
            'usertype'=>'user'
        ];
        $this->obj->insert('stregs',$data);
        return redirect('/login');
    }
    // login 
    public function login()
    {
        return view('user.login');
    }
    public function log(Request $rqst)
    {
        $username=$rqst->input('username');
        $password=$rqst->input('password');
        $data=$this->obj->logData('stregs',$username,$password);
        if(isset($data))
        {
            $rqst->session()->put(array('sess'=>$data->id));
            if($data->usertype=='admin')
            {
                // $req->session()->put(array('sess'=>$data->id));
                return redirect('/adhome');
            }
            else
            {
                return redirect('/sthome');
            }
        }
    }
    public function sthome()
    {
        return view('user.sthome');
    }
    public function feed()
    {
        return view('user.feed');
    }
    public function fb(Request $rt)
    {
        $stname=$rt->input('stname');
        $tchrname=$rt->input('tchrname');
        $feedback=$rt->input('feedback');
        $data=[
            'stname'=>$stname,
            'tchrname'=>$tchrname,
            'feedback'=>$feedback
        ];
        $this->obj5->infeed('feeds',$data);
        return redirect('/feed');
    }
    // view syllabus
    public function vsyllabus()
    {   
        // $data['result']=$this->obj1->select('syllabi');
        $id=session('sess');
        $data['result']=syllabus::join('stregs','stregs.class','=','syllabi.class')
        ->where('stregs.id',$id)
        ->select('syllabi.class','syllabi.subject','syllabi.syllabus','syllabi.status')
        ->get();
        return view('user.vsyllabus',$data);
    }
    public function vnotes()
    {   
        $id=session('sess');
        $data['result']=note::join('stregs','stregs.class','=','notes.class')
        ->where('stregs.id',$id)
        ->select('notes.id','notes.class','notes.subject','notes.notes')
        ->get();
        return view('user.vnotes',$data);
    }
    public function vtimetable()
    {
        $id=session('sess');
        $data['result']=timetable::join('stregs','stregs.class','=','timetables.class')
        ->where('stregs.id',$id)
        ->select('timetables.id','timetables.class','timetables.subject','timetables.timetable','timetables.status')
        ->get();
        return view('user.vtimetable',$data);
    }
    public function vresults()
    {
        $id=session('sess');
        // echo $id;
        // exit();
        $data['result']=result::join('stregs','stregs.name','=','results.name')
        ->where('stregs.id',$id)
        ->select('results.id','results.name','results.class','results.subject','results.results','results.status')
        ->get();
        return view('user.vresults',$data);
    }
    // public function logout(Request $req)
    // {
    //    $req->session()->forget('sess');
    //    return redirect('/');
    // }
}

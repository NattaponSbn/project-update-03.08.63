<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Project;
use App\Projectmdd;
use App\Owner;
use App\Ownermdd;

class AdminController extends Controller
{
    //viewaddprojectBD
    public function viewaddbd() {
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('admin.addproject_Ad',compact('chk_type','chk_genre','chk_category','chk_branch'));
    }

    //viewaddprojectMDD
    public function viewaddmdd() {
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('admin.addprojectMDD_Ad',compact('chk_type','chk_genre','chk_category','chk_branch'));
    }

    public function insertprojectBD_Ad(Request $request) {

        $codeu = 'PB';
        $codea = 'A';
        $cont = count(DB::select("SELECT No_PB FROM projects"));
        $nextint = $cont+1;
        $string_id = substr("000".$nextint,-4);
        $nextid = $codeu.$string_id.$codea;

        $project = new Project;
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['adminid'];
        $logo = 'defaultlogo.png';
        // echo $userid;

        $project->user_id=$userid;
        $project->project_id=$nextid;
        $project->project_name=$request->project_name;
        $project->name_en=$request->project_name_en;
        $project->keyword_project=$request->keyword_project;
        $project->des_project=$request->des_project;
        
        $project->type_id=$request->type_project;
        $project->genre_id=$request->genre_project;
        $project->category_id=$request->category_project;
        $project->branch_id=$request->branch_project;
        $project->owner_p=$request->owner_p;
        $project->advisor_p=$request->advisor_p;
        $project->facebook_p=$request->facebook_p;
        $project->email_p=$request->email_p;
        $project->phone_p=$request->phone_p;
        $project->logo=$logo;
        $project->save();

        $imgproject1 = 'defaultimg1.png';
        $imgproject2 = 'defaultimg2.png';
        $imgproject3 = 'defaultimg3.png';

        DB::INSERT("INSERT INTO img_project (img_p_1, img_p_2, img_p_3, p_id) VALUES ('$imgproject1','$imgproject1','$imgproject1','$userid')");
        return redirect('viewproject')->with('successappproject', 'สร้างผลงานเรียบร้อย');

        
    }

    public function insertprojectMDD_Ad(Request $request) {
        
        $codeu = 'PM';
        $codea = 'A';
        $cont = count(DB::select("SELECT No_PM FROM projectmdd"));
        $nextint = $cont+1;
        $string_id = substr("000".$nextint,-4);
        $nextid = $codeu.$string_id.$codea;

        $project = new Project;
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['adminid'];
        $logo = 'defaultlogo.png';
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['adminid'];
       
        // echo $userid;

        $project = new Projectmdd;
        $project->user_id=$userid;
        $project->project_m_id=$nextid;
        $project->project_m_name=$request->project_name;
        $project->project_m_name_en=$request->project_name_en;
        $project->keyword_m_project=$request->keyword_project;
        $project->des_m_project=$request->des_project;
        $project->type_id=$request->type_project;
        $project->genre_id=$request->genre_project;
        $project->category_id=$request->category_project;
        $project->branch_id=$request->branch_project;
        $project->owner_m_name=$request->owner_m;
        $project->advisor_m=$request->advisor_m;
        $project->facebook_m=$request->facebook_m;
        $project->email_m=$request->email_m;
        $project->phone_m=$request->phone_m;
        $project->save();
        return redirect('viewprojectmdd')->with('successappproject', 'สร้างผลงานเรียบร้อย');

        
    }
}

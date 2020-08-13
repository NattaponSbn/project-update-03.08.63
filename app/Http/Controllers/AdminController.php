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
        $project = new Project;
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['adminid'];
        $logo = 'defaultlogo.png';
        // echo $userid;

        $project->user_id=$userid;
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

        // $dataowner = new Owner;
        // $dataowner->owner_p=$request->owner_p;
        // $dataowner->advisor_p=$request->advisor_p;
        // $dataowner->facebook_p=$request->facebook_p;
        // $dataowner->email_p=$request->email_p;
        // $dataowner->phone_p=$request->phone_p;
        // $project->save();

        // $ownerid = DB::select("SELECT owner_id FROM owner_project,projects,admin_company WHERE projects.user_id=admin_company.admin_company_id and projects.user_id='$userid'");
        // echo $ownerid;
        // compact('ownerid');
        // foreach($ownerid as $ownerids) {
        //     $ownerids->$owner_id;
        // }

        // DB::INSERT("INSERT INTO owner_project (adimn_id) VALUES ('$userid')");
        // DB::INSERT("INSERT INTO owner_project (adimn_id) VALUES ('$userid')");

        

        // INSERT INTO `admin_company`( `admin_company_user`, `admin_company_pass`, `admin_company_name`, `status`, `pathimg`, `admin_email`) 
        // VALUES ('admin1','1234567893','คนดูเเลระบบคนที่1','admin','1366155295.DSC_0096-Edit-1.jpg','admin1@gmail.com')
    }

    public function insertprojectMDD_Ad(Request $request) {
        
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['adminid'];
       
        // echo $userid;

        $project = new Projectmdd;
        $project->user_id=$userid;
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

        // $dataowner = new Ownermdd;
        // $dataowner->owner_m_name=$request->owner_m;
        // $dataowner->advisor_m=$request->advisor_m;
        // $dataowner->facebook_m=$request->facebook_m;
        // $dataowner->email_m=$request->email_m;
        // $dataowner->phone_m=$request->phone_m;
        // $dataowner->admin_id=$userid;
        // $dataowner->save();

        // DB::INSERT("INSERT INTO owner_projectmdd (p_m_id ='$owner_id' WHERE projectmdd.user_id='$userid' OR )");
        // $ownerid = DB::select("SELECT owner_m_id FROM owner_projectmdd
        // WHERE owner_projectmdd.admin_id='$userid' OR owner_projectmdd.admin_id='$userid'");
        // compact('ownerid');
        // foreach($ownerid as $ownerids) {
        //      $owner_id=$ownerids->owner_m_id;
        // }

        // DB::INSERT("INSERT INTO projectmdd (owner_m ='$owner_id' WHERE projectmdd.user_id='$userid' OR )");

        

        // INSERT INTO `admin_company`( `admin_company_user`, `admin_company_pass`, `admin_company_name`, `status`, `pathimg`, `admin_email`) 
        // VALUES ('admin1','1234567893','คนดูเเลระบบคนที่1','admin','1366155295.DSC_0096-Edit-1.jpg','admin1@gmail.com')
    }
}

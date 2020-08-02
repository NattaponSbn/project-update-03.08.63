<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    //เพิ่มข้อมูล project
    public function insertproject(Request $request) {
        $project = new Project;
        session_start();
        $userid = $_SESSION['usersid'];
        $logo = 'defaultlogo.png';
        $project->user_id=$userid;
        $project->project_name=$request->project_name;
        $project->keyword_project=$request->keyword_project;
        $project->des_project=$request->des_project;
        // $dataproject->facebook=$request->facebook;
        // $dataproject->email=$request->email;
        // $dataproject->phone=$request->phone;
        $project->type_id=$request->type_project;
        $project->genre_id=$request->genre_project;
        $project->category_id=$request->category_project;
        $project->branch_id=$request->branch_project;
        $project->logo=$logo;
        $project->save();

        $imgproject1 = 'defaultimg1.png';
        $imgproject2 = 'defaultimg2.png';
        $imgproject3 = 'defaultimg3.png';
        DB::INSERT("INSERT INTO img_project (img_p_1, img_p_2, img_p_3, p_id) VALUES ('$imgproject1','$imgproject1','$imgproject1','$userid')");
        return redirect('homeBD')->with('successappproject', 'สร้างผลงานเรียบร้อย');
    }

    public function showproject() {
        $project = Project::with('user')->orderby('project_id')->paginate(5);
        return view('admin.project',compact('project'));
    }

    // dropdown show
    public function viewadd() {
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.addproject',compact('chk_type','chk_genre','chk_category','chk_branch'));
    }

    // join หน้า detailprject เเละโชว์ข้อมูล project
    public function project() {
        session_start();
        $chkidproject = $_SESSION['usersid'];
        
        $data = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.id=projects.user_id and id='$chkidproject' AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.project_id=img_project.p_id");
        
        $imglogoproject = DB::select("SELECT * FROM img_project,projects WHERE img_project.p_id=projects.project_id and project_id='$chkidproject'");
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailproject',compact('data','chk_type','chk_genre','chk_category','chk_branch','imglogoproject'));
    }

    public function editproject(Request $request) {
        session_start();
        $chkidproject = $_SESSION['usersid'];


         // upload logo project
        $this->validate($request,
        ['filelogo' => 'required|image|mimes:png,jpeg|max:5048']);
    
        //upload
        $foder = 'project\img_logo';
        $filename = $request->file('filelogo')->getClientOriginalName();
        $nameimg = rand() . '.' . $filename;
        
        
        // $pathimg = $request->file('img')->store('imgaccount/',$nameimg);
        $pathimg = Image::make($request->file('filelogo'))->fit(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        });
        
        $pathimg->save(public_path($foder. '/' .$nameimg));
        
        $logoproject=$nameimg;
        // return ['path'=>$path,'upload'=>'success'];
        
        // upload img project
        // upload logo project
        $this->validate($request,
        ['fileimg' => 'required|image|mimes:png,jpeg|max:5048']);
    
        //upload
        $foder = 'project\img_project';
        $filename = $request->file('fileimg')->getClientOriginalName();
        $nameimg = rand() . '.' . $filename;
        
        
        // $pathimg = $request->file('img')->store('imgaccount/',$nameimg);
        $pathimg = Image::make($request->file('fileimg'))->fit(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        });
        
        $pathimg->save(public_path($foder. '/' .$nameimg));
        
        $imgproject=$nameimg;
        
        $project_name = $request->input('project_name');
        $keyword_project = $request->input('keyword_project');
        $des_project = $request->input('des_project');
        $type_project = $request->input('type_project');
        $genre_project = $request->input('genre_project');
        $category_project = $request->input('category_project');

        DB::update("UPDATE users,projects SET project_name = '$project_name', keyword_project ='$keyword_project', des_project ='$des_project', type_id ='$type_project',
         genre_id ='$genre_project', category_id ='$category_project', logo = '$logoproject'  WHERE users.id=projects.user_id AND id='$chkidproject'");
        
        return redirect('project.detailproject')->with('success', 'อัพเดทข้อมูลเรียบร้อย');
    }

    public function itemproject() {
        session_start();
        // $chkid = $_SESSION['usersid'];
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $item = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id and project_id='1'");
        $imgaccount = DB::select("SELECT * FROM users WHERE id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");

        return view('homeBD',compact('item','imgaccount','adminaccount'));
    }


}
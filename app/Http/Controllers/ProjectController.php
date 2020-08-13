<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\Imgproject;
use DB;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ProjectController extends Controller
{
    //เพิ่มข้อมูล project
    public function insertproject(Request $request) {
        $project = new Project;
        session_start();
        $_SESSION['dataprject'] = 'project';
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
        $imgproject = new Imgproject;
        $imgproject->imp_p_1=$imgproject1;
        $imgproject->imp_p_2=$imgproject2;
        $imgproject->imp_p_3=$imgproject3;
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
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id");

        $datapubilc = DB::select("SELECT * FROM users WHERE id = '$chkidproject '");

        $dataimg = DB::select("SELECT * FROM img_project,projects WHERE projects.user_id=img_project.p_id and projects.user_id='$chkidproject'");

        $imglogoproject = DB::select("SELECT * FROM img_project,projects WHERE img_project.p_id=projects.project_id and project_id='$chkidproject'");
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailproject',compact('data','chk_type','chk_genre','chk_category','chk_branch','imglogoproject','dataimg','datapubilc'));
    }

    public function editproject(Request $request) {
        session_start();
        $chkidproject = $_SESSION['usersid'];
        $_SESSION['project'] = "successproject";

        
        $project_name = $request->input('project_name');
        $name_en = $request->input('project_name_en');
        $keyword_project = $request->input('keyword_project');
        $des_project = $request->input('des_project');
        $type_project = $request->input('type_project');
        $genre_project = $request->input('genre_project');
        $category_project = $request->input('category_project');
        $facebook = $request->input('facebook');
        $email = $request->input('email');
        $phone = $request->input('phone');
        
        DB::update("UPDATE users,projects SET project_name = '$project_name', name_en = '$name_en' , keyword_project ='$keyword_project', des_project ='$des_project', type_id ='$type_project',
        genre_id ='$genre_project', category_id ='$category_project', users.facebook = '$facebook', users.email = '$email', users.phone = '$phone' 
        , projects.updated_at = CURRENT_TIMESTAMP(), users.updated_at = CURRENT_TIMESTAMP() WHERE users.id=projects.user_id AND id='$chkidproject'");
        

        // upload logo project
        if(isset($_FILES['fileimg']['name']) || isset($_FILES['filelogo']['name'])) {
            $this->validate($request,
            ['filelogo' => 'required|image|mimes:png,jpeg|max:5048']);
            $foder = 'project\img_logo';
            $foderimg = 'project\img_backgrund';
            $filename = $request->file('filelogo')->getClientOriginalName();
            $nameimg = rand() . '.' . $filename;
            // $pathimg = $request->file('img')->store('imgaccount/',$nameimg);
            $pathimg = Image::make($request->file('filelogo'))->fit(170, 180, function ($constraint) {
                $constraint->aspectRatio();
            });
            $pathimg->save(public_path($foder. '/' .$nameimg));
            $logoproject=$nameimg;
            // count มาจากการที่เลือกภาพมากี่ภาพ
            $conut = count($_FILES['fileimg']['name']);

            for($i=0; $i<$conut; $i++) {
                // ทำการวน loop for จนครบ ตาม count 
                $name=$request->file('fileimg')[$i];
                // echo $name;
                $foder = 'project\img_backgrund';
                $filename =  $request->file('fileimg')[$i]->getClientOriginalName();
                $nameimg = rand() . '.' . $filename;
                
                $pathimg = Image::make($name)->fit(400, 250, function ($constraint) {
                        $constraint->aspectRatio();
                    });

                $pathimg->save(public_path($foder. '/' .$nameimg));
                $fileimg = $nameimg;
                    // เมื่อ i ถึง ตำเเหน่งที่ 1 ให้ทำการเก็บค่า nameimg ไว้ใน fileimg0 เเล้วทำการอัพลง database
                if ($i == 0) {
                    $fileimg0=$nameimg;
                    DB::update("UPDATE users,projects,img_project SET img_p_1 = '$fileimg0' WHERE users.id=projects.user_id 
                    AND projects.user_id=img_project.p_id AND id='$chkidproject'");
                }; echo '<br>';
                if ($i == 1) {
                    $fileimg1=$nameimg;
                    DB::update("UPDATE projects,img_project SET img_p_2 = '$fileimg1'
                    WHERE projects.user_id=img_project.p_id AND img_project.p_id='$chkidproject'");
                };
                if ($i == 2) {
                    $fileimg2=$nameimg;
                    DB::update("UPDATE projects,img_project SET img_p_3 = '$fileimg2', img_project.updated_at = CURRENT_TIMESTAMP() 
                    WHERE projects.user_id=img_project.p_id AND img_project.p_id='$chkidproject'");
                };     
            }
        DB::update("UPDATE users,projects SET logo = '$logoproject', projects.updated_at = CURRENT_TIMESTAMP() WHERE users.id=projects.user_id AND id='$chkidproject'");
        return redirect('projectview')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
        }
    return redirect('projectview')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
    }

            // DB::update("UPDATE users,projects,img_project SET project_name = '$project_name', keyword_project ='$keyword_project', des_project ='$des_project', type_id ='$type_project',
            // genre_id ='$genre_project', category_id ='$category_project', logo = '$logoproject' img_p_1 = '$fileimg'  WHERE users.id=projects.user_id AND
            // projects.user_id=img_project.p_id AND id='$chkidproject'");
            // return redirect('projectview')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');

    public function itemproject() {
        session_start();
        // $chkid = $_SESSION['usersid'];
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        
        
      
        // $item = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id and project_id='6'");
        $item = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id ORDER BY projects.created_at DESC,4");//SELECT * FROM projects ORDER BY created_at ASC
        
        $imgaccount = DB::select("SELECT * FROM users WHERE id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");
        
        return view('homeBD',compact('item','imgaccount','adminaccount'));
    }

    public function detailitem($project_id){
        session_start();
        
        $item  = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id AND projects.project_id = $project_id"  );

        $itemadmin  = DB::select("SELECT * FROM admin_company,projects,type_project,genre_project,category_project
        WHERE admin_company.admin_company_id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.project_id = $project_id"  );

        $imgback = DB::select("SELECT * FROM projects,img_project WHERE projects.user_id=img_project.p_id AND projects.project_id = $project_id");

        return view('project.itemdetaliBD',compact('item','project_id','imgback','itemadmin'));
    }

    public function index() {
        session_start();
        // $chkid = $_SESSION['usersid'];
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");
        $item  = DB::select("SELECT projects.project_id, projects.logo, projects.project_name, projects.keyword_project, users.name FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id" );

        return view('project.itemdetaliBD',compact('imgaccount','adminaccount','item'));
    }


    // admin show
    public function showdata() {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");

        $project = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id ");

        $projectA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,projects,img_project 
        WHERE admin_company.admin_company_id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id ");

        
        return view('admin.project',compact('project','imgaccount','projectA'));
    }

    public function showdatamdd() {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");

        $projectmdd = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projectmdd
        WHERE users.id=projectmdd.user_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id ");

        $projectmddA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,projectmdd
        WHERE admin_company.admin_company_id=projectmdd.user_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id ");

        return view('admin.projectmdd',compact('projectmdd','imgaccount','projectmddA'));
    }

    // editadmin

    public function editprojectbd(Request $request) {
        session_start();
        
        $_SESSION['project'] = "successproject";

        $project_id = $request->input('project_id');
        $user_id = $request->input('user_id');
        $project_name = $request->input('project_name');
        $name_en = $request->input('project_name_en');
        $keyword_project = $request->input('keyword_project');
        $des_project = $request->input('des_project');
        $type_project = $request->input('type_project');
        $genre_project = $request->input('genre_project');
        $category_project = $request->input('category_project');
        $facebook = $request->input('facebook');
        $email = $request->input('email');
        $phone = $request->input('phone');
        
        DB::update("UPDATE users,projects SET project_name = '$project_name', name_en = '$name_en' , keyword_project ='$keyword_project', des_project ='$des_project', type_id ='$type_project',
        genre_id ='$genre_project', category_id ='$category_project', users.facebook = '$facebook', users.email = '$email', users.phone = '$phone' 
        , projects.updated_at = CURRENT_TIMESTAMP(), users.updated_at = CURRENT_TIMESTAMP() WHERE users.id=projects.user_id AND project_id='$project_id'");
        
        

            // upload logo project
            if(isset($_FILES['fileimg']['name']) || isset($_FILES['filelogo']['name'])) {
                $this->validate($request,
                ['filelogo' => 'required|image|mimes:png,jpeg']);
                $foder = 'project\img_logo';
                $foderimg = 'project\img_backgrund';
                $filename = $request->file('filelogo')->getClientOriginalName();
                $nameimg = rand() . '.' . $filename;
                // $pathimg = $request->file('img')->store('imgaccount/',$nameimg);
                $pathimg = Image::make($request->file('filelogo'))->fit(170, 180, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $pathimg->save(public_path($foder. '/' .$nameimg));
                $logoproject=$nameimg;
                // count มาจากการที่เลือกภาพมากี่ภาพ
                $conut = count($_FILES['fileimg']['name']);

                for($i=0; $i<$conut; $i++) {
                    // ทำการวน loop for จนครบ ตาม count 
                    $name=$request->file('fileimg')[$i];
                    // echo $name;
                    $foder = 'project\img_backgrund';
                    $filename =  $request->file('fileimg')[$i]->getClientOriginalName();
                    $nameimg = rand() . '.' . $filename;
                    
                    $pathimg = Image::make($name)->fit(400, 250, function ($constraint) {
                            $constraint->aspectRatio();
                        });

                    $pathimg->save(public_path($foder. '/' .$nameimg));
                    $fileimg = $nameimg;
                        // เมื่อ i ถึง ตำเเหน่งที่ 1 ให้ทำการเก็บค่า nameimg ไว้ใน fileimg0 เเล้วทำการอัพลง database
                    if ($i == 0) {
                        $fileimg0=$nameimg;
                        DB::update("UPDATE users,projects,img_project SET img_p_1 = '$fileimg0' WHERE users.id=projects.user_id 
                        AND projects.user_id=img_project.p_id AND img_project.p_id='$user_id'");
                    }; echo '<br>';
                    if ($i == 1) {
                        $fileimg1=$nameimg;
                        DB::update("UPDATE projects,img_project SET img_p_2 = '$fileimg1'
                        WHERE projects.user_id=img_project.p_id AND img_project.p_id='$user_id'");
                    };
                    if ($i == 2) {
                        $fileimg2=$nameimg;
                        DB::update("UPDATE projects,img_project SET img_p_3 = '$fileimg2', img_project.updated_at = CURRENT_TIMESTAMP() 
                        WHERE projects.user_id=img_project.p_id AND img_project.p_id='$user_id'");
                    };     
                }
                DB::update("UPDATE users,projects SET logo = '$logoproject', projects.updated_at = CURRENT_TIMESTAMP() WHERE users.id=projects.user_id AND project_id='$project_id'");
                return redirect('viewproject')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
               
            }
        return redirect('viewproject')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
    }

    // admin edit BD
    public function projectbd($project_id) {
        
        
        $data = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.id=projects.user_id and project_id='$project_id' AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id");

        $img = DB::select("SELECT users.id FROM users,projects WHERE users.id=projects.user_id and project_id='$project_id'");
        compact('img');
        foreach($img as $imgs) {
             $imgs->id;
        }

        $dataimg = DB::select("SELECT * FROM img_project,projects WHERE projects.user_id=img_project.p_id and projects.user_id='$imgs->id;'");

        $imglogoproject = DB::select("SELECT * FROM img_project,projects WHERE img_project.p_id=projects.project_id and project_id='$project_id'");
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailproject_Ad',compact('data','chk_type','chk_genre','chk_category','chk_branch','imglogoproject','dataimg'));
    }


}

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
        $codeu = 'PB';
        $cont = count(DB::select("SELECT No_PB FROM projects"));
        $nextint = $cont+1;
        $string_id = substr("000".$nextint,-4);
        $nextid = $codeu.$string_id;

        $project = new Project;
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['usersid'];
        $logo = 'defaultlogo.png';

        $project->project_id=$nextid;
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
        WHERE users.u_id=projects.user_id and u_id='$chkidproject' AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id");

        $datapubilc = DB::select("SELECT * FROM users WHERE U_id = '$chkidproject '");

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
        , projects.updated_at = CURRENT_TIMESTAMP(), users.updated_at = CURRENT_TIMESTAMP() WHERE users.U_id=projects.user_id AND U_id='$chkidproject'");
        

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
                    DB::update("UPDATE users,projects,img_project SET img_p_1 = '$fileimg0' WHERE users.U_id=projects.user_id 
                    AND projects.user_id=img_project.p_id AND U_id='$chkidproject'");
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
        DB::update("UPDATE users,projects SET logo = '$logoproject', projects.updated_at = CURRENT_TIMESTAMP() WHERE users.U_id=projects.user_id AND U_id='$chkidproject'");
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
        
        //ดึง id มา เพื่อทำการเเยก id ที่มาจากการ by order วันที่สร้าง (ในเเท็กมาใหม่)
        $itemloop = DB::select("SELECT project_id FROM projects,type_project WHERE projects.type_id=type_project.type_id ORDER BY projects.created_at DESC");
        $item0 = $itemloop[0]; //เลือกตำเเหน่งของข้อมูล
        compact('item0'); // ส่งค่า item0 จากการเลือกตำเเหน่ง
        foreach($item0 as $ite0){ // ทำการวง loop foreach เพื่อ เอาค่า id ออกจาก array
            // echo $ite0;
            $ite0; // id ของ ตำเเหน่งที่ 0 ที่ได้มาจากการ loop 
        }
        $item1 = $itemloop[1];
        compact('item1');
        foreach($item1 as $ite1){
            // echo $ite1;
            $ite1;
        }
        $item2 = $itemloop[2];
        compact('item2');
        foreach($item2 as $ite2){
            // echo $ite2;
            $ite2;
        }
        $item3 = $itemloop[3];
        compact('item3');
        foreach($item3 as $ite3){
            // echo $ite3;
            $ite3;
        }
        // หลังจากได้ id ที่ เป็น str ก็นำมา select จาก database ทีละ id เเล้วส่งค่าไปแสดงผลหน้า homeBD
        $itemlp0 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
        AND projects.project_id='$ite0'");
        $itemlp1 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
        AND projects.project_id='$ite1'");
        $itemlp2 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
        AND projects.project_id='$ite2'");
        $itemlp3 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
        AND projects.project_id='$ite3'");

        $itemgenre = DB::select("SELECT * FROM projects,genre_project,type_project WHERE genre_project.genre_name in ('ไอโอที(IoT)') AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id");
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        
        return view('homeBD',compact('itemlp0','itemlp1','itemlp2','itemlp3','imgaccount','adminaccount','itemgenre'));
    }

    public function detailitem($project_id){
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $item  = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.U_id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id AND projects.project_id = '$project_id'"  );
        

        $itemadmin  = DB::select("SELECT * FROM admin_company,owner_project,projects,type_project,genre_project,category_project
        WHERE owner_project.owner_id=projects.user_id AND admin_company.admin_id=projects.ad_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.project_id = '$project_id'"  );

        $imgback = DB::select("SELECT * FROM projects,img_project WHERE projects.user_id=img_project.p_id AND projects.project_id = '$project_id'");
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        return view('project.itemdetaliBD',compact('item','project_id','imgback','itemadmin','imgaccount','adminaccount'));
    }

    public function detailitemmdd($project_m_id){
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $item  = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projectmdd
        WHERE users.U_id=projectmdd.user_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND projectmdd.project_m_id = '$project_m_id'"  );
        

        $itemadmin  = DB::select("SELECT * FROM admin_company,owner_projectmdd,projectmdd,type_project,genre_project,category_project
        WHERE owner_projectmdd.owner_m_id=projectmdd.user_id AND admin_company.admin_id=projectmdd.adm_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND projectmdd.project_m_id = '$project_m_id'"  );

        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        return view('project.itemdetalimdd',compact('item','project_m_id','itemadmin','imgaccount','adminaccount'));
    }

    public function index() {
        session_start();
        // $chkid = $_SESSION['usersid'];
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        $item  = DB::select("SELECT projects.project_id, projects.logo, projects.project_name, projects.keyword_project, users.name FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.U_id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id" );

        return view('project.itemdetaliBD',compact('imgaccount','adminaccount','item'));
    }

    public function indexMDD() {
        session_start();
        // $chkid = $_SESSION['usersid'];
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        $item  = DB::select("SELECT projectmdd.project_m_id, projectmdd.project_m_name, projectmdd.keyword_m_project, 
        projects.owner_m_name,type_project.type_name,category_project.category_name
        FROM type_project,genre_project,category_project,admin_company,projectmdd,img_project 
        WHERE admin_company.admin_id=projectmdd.user_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=img_project.p_id" );

        return view('project.itemdetaliMDD',compact('imgaccount','adminaccount','item'));
    }


    // admin show
    public function showdata() {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        $project = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.U_id=projects.user_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id ");

        $projectA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,owner_project,projects,img_project 
        WHERE owner_project.owner_id=projects.user_id and admin_company.admin_id=projects.ad_id AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id ");

        return view('admin.project',compact('project','imgaccount','projectA'));
    }

    public function showdatamdd() {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        $projectmdd = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projectmdd
        WHERE users.U_id=projectmdd.user_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id ");

        $projectmddA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,owner_projectmdd,projectmdd 
        WHERE owner_projectmdd.owner_m_id=projectmdd.user_id and admin_company.admin_id=projectmdd.adm_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id");

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
        , projects.updated_at = CURRENT_TIMESTAMP(), users.updated_at = CURRENT_TIMESTAMP() WHERE users.U_id=projects.user_id AND project_id='$project_id'");

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
                    DB::update("UPDATE users,projects,img_project SET img_p_1 = '$fileimg0' WHERE users.U_id=projects.user_id 
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
                    break;
                };     
            }
            DB::update("UPDATE users,projects SET logo = '$logoproject', projects.updated_at = CURRENT_TIMESTAMP() WHERE users.U_id=projects.user_id AND project_id='$project_id'");
        
        }   
        return redirect('viewproject')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
    }

    public function editprojectbd_ad(Request $request) {
        session_start();
        
        $_SESSION['project'] = "successproject";

        $project_id = $request->input('project_id');
        $user_id = $request->input('user_id');
        $project_name = $request->input('project_name');
        $name_en = $request->input('project_name_en');
        $keyword_project = $request->input('keyword_project');
        $des_project = $request->input('des_project');
        $owner_p = $request->input('owner_p');
        $advisor_p = $request->input('advisor_p');
        $type_project = $request->input('type_project');
        $genre_project = $request->input('genre_project');
        $category_project = $request->input('category_project');
        $facebook = $request->input('facebook');
        $email = $request->input('email');
        $phone = $request->input('phone');
        
        DB::update("UPDATE admin_company,owner_project,projects SET project_name = '$project_name', name_en = '$name_en' , keyword_project ='$keyword_project', des_project ='$des_project', type_id ='$type_project',
        genre_id ='$genre_project', category_id ='$category_project', owner_project.owner_p='$owner_p', owner_project.advisor_p='$advisor_p', owner_project.facebook_p = '$facebook', owner_project.email_p = '$email', owner_project.phone_p = '$phone' 
        , projects.updated_at = CURRENT_TIMESTAMP() WHERE owner_project.owner_id=projects.user_id and admin_company.admin_id=projects.ad_id AND project_id='$project_id'");

        // upload logo project
        if(isset($_FILES['fileimg']['name']) || isset($_FILES['filelogo']['name'])); {
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
                    DB::update("UPDATE admin_company,projects,img_project SET img_p_1 = '$fileimg0' WHERE admin_company.admin_id=projects.user_id 
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
            DB::update("UPDATE admin_company,projects SET logo = '$logoproject', projects.updated_at = CURRENT_TIMESTAMP() WHERE admin_company.admin_id=projects.user_id AND project_id='$project_id'");
            return redirect('viewproject')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
            
        }
        return redirect('viewproject')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
    }

    // admin edit BD
    public function projectbd($project_id) {
        session_start();
        $_SESSION['data']='data';

        $data = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projects,img_project 
        WHERE users.U_id=projects.user_id and project_id='$project_id' AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id");

        $dataA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,owner_project,projects,img_project 
        WHERE owner_project.owner_id=projects.user_id and admin_company.admin_id=projects.ad_id and project_id='$project_id' AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id");

        $img = DB::select("SELECT users.U_id FROM users,projects WHERE users.U_id=projects.user_id and project_id='$project_id'");
        compact('img');
        foreach($img as $imgs) {
            $photo=$imgs->U_id;
        }
        $dataimg = DB::select("SELECT * FROM img_project,projects WHERE projects.user_id=img_project.p_id and projects.user_id='$photo'");
        

        $imglogoproject = DB::select("SELECT * FROM img_project,projects WHERE img_project.p_id=projects.project_id and project_id='$project_id'");
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailproject_Ad',compact('data','chk_type','chk_genre','chk_category','chk_branch','imglogoproject','dataimg'));
    }

    public function projectbd_A($project_id) {
        session_start();
        $_SESSION['dataA']='dataA';

        $dataA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,owner_project,projects,img_project 
        WHERE owner_project.owner_id=projects.user_id and admin_company.admin_id=projects.ad_id and project_id='$project_id' AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
        AND projects.category_id=category_project.category_id AND projects.user_id=img_project.p_id");

        $img = DB::select("SELECT owner_project.owner_id FROM owner_project,projects WHERE owner_project.owner_id=projects.user_id and project_id='$project_id'");
        compact('img');
        foreach($img as $imgs) {
            $photo=$imgs->owner_id;
        }
        $dataimgA = DB::select("SELECT * FROM img_project,projects WHERE projects.user_id=img_project.p_id and projects.user_id='$photo'");
        
        $imglogoproject = DB::select("SELECT * FROM img_project,projects WHERE img_project.p_id=projects.project_id and project_id='$project_id'");
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailproject_Ad_admin',compact('chk_type','chk_genre','chk_category','chk_branch','imglogoproject','dataimgA','dataA'));
    }


}

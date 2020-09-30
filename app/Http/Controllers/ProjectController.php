<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\Imgproject;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Http\Controllers\callAPI;


class ProjectController extends Controller
{
    //เพิ่มข้อมูล project
    public function insertproject(Request $request) {
        $codeu = 'PB';
        $cont = count(DB::select("SELECT No_PB FROM projects"));
        $nextint = $cont+1;
        $string_id = substr("000".$nextint,-4);
        $nextid = $codeu.$string_id;

        $status_p = '0';

        $project = new Project;
        session_start();
        $_SESSION['dataprject'] = 'project';
        $userid = $_SESSION['usersid'];
        $logo = 'defaultlogo.png';

        
        $foder = 'project/fileproject/p_BD';
        $fileP = $request->file('fileproject');
        $filename = $request->file('fileproject')->getClientOriginalName();
        $nameimg = '/'.rand() . '.' . $filename;
        $fileP->move(public_path($foder),$nameimg);

        $fileproject='/fileproject/p_BD'.$nameimg;

        //file_chk
        $foderchk = 'project/fileproject/p_chk';
        $filePchk = $request->file('fileproject_chk');
        $filenamechk = $request->file('fileproject_chk')->getClientOriginalName();
        $namechk = '/'.rand() . '.' . $filenamechk;
        $filePchk->move(public_path($foderchk),$namechk);

        $fileproject_chk='/fileproject/p_chk'.$namechk;

        //add keyword
        $keyword1 =$request->keyword_project_1;
        $keyword2 =$request->keyword_project_2;
        $keyword3 =$request->keyword_project_3;
        $keyword4 =$request->keyword_project_4;

        // keyword
        $kw1 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword1%'");
        $kw2 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword2%'");
        $kw3 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword3%'");
        $kw4 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword4%'");

        if(empty($kw1)) {
            $key = 'K';
            $countkw = count(DB::select("SELECT id FROM keyword_p"));
            $num = $countkw+1;
            $kw_id = substr("000".$num,-4);
            $keyword_id = $key.$kw_id;
            
            DB::INSERT("INSERT INTO keyword_p (keyp_id, name_key ) VALUES ('$keyword_id','$keyword1')");
            

            
        }
        if(empty($kw2)) {
            $key = 'K';
            $countkw = count(DB::select("SELECT id FROM keyword_p"));
            $num = $countkw+1;
            $kw_id = substr("000".$num,-4);
            $keyword_id = $key.$kw_id;
            DB::INSERT("INSERT INTO keyword_p (keyp_id, name_key ) VALUES ('$keyword_id','$keyword2')");
            
        }
        if(empty($kw3)) {
            $key = 'K';
            $countkw = count(DB::select("SELECT id FROM keyword_p"));
            $num = $countkw+1;
            $kw_id = substr("000".$num,-4);
            $keyword_id = $key.$kw_id;
            DB::INSERT("INSERT INTO keyword_p (keyp_id, name_key ) VALUES ('$keyword_id','$keyword3')");
            
        }
        if(empty($kw4)) {
            $key = 'K';
            $countkw = count(DB::select("SELECT id FROM keyword_p"));
            $num = $countkw+1;
            $kw_id = substr("000".$num,-4);
            $keyword_id = $key.$kw_id;
            DB::INSERT("INSERT INTO keyword_p (keyp_id, name_key ) VALUES ('$keyword_id','$keyword4')");
        }

        //add keyword to project
        $addkw1 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword1%'");
        $addkw2 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword2%'");
        $addkw3 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword3%'");
        $addkw4 = DB::select("SELECT * FROM keyword_p WHERE keyword_p.name_key LIKE '%$keyword4%'");
        // print_r($addkw4);

        if(isset($addkw1)){
            $keyid1 = $addkw1[0]->keyp_id;
        }
        if(isset($addkw2)){
            $keyid2 = $addkw2[0]->keyp_id;
        }
        if(isset($addkw3)){
            $keyid3 = $addkw3[0]->keyp_id;
        }
        if(isset($addkw4)){
            $keyid4 = $addkw4[0]->keyp_id;
        }

        // $item='example';
        // $tmp = exec("C:/xampp/htdocs/projectmange-code/resources/views/elasticsearch/querydata.py .$item");
        // echo $tmp;
    
        $project->project_id=$nextid;
        $project->user_id=$userid;
        $project->status_p=$status_p;
        $project->project_name=$request->project_name;
        // $project->keyword_project=$request->keyword_project;
        $project->keyword_project_1=$request->keyword_project_1;
        $project->keyword_project_2=$request->keyword_project_2;
        $project->keyword_project_3=$request->keyword_project_3;
        $project->keyword_project_4=$request->keyword_project_4;
        $project->des_project=$request->des_project;
        $project->type_id=$request->type_project;
        $project->genre_id=$request->genre_project;
        $project->category_id=$request->category_project;
        $project->branch_id=$request->branch_project;
        $project->logo=$logo;
        $project->file_p=$fileproject;
        $project->namefile=$filename;
        $project->temp_file_chk=$fileproject_chk;
        $project->temp_namefile_chk=$filenamechk;
        $project->save();
       
        //รูปโปรเจค
        $imgproject1 = 'defaultimg1.png';
        $imgproject2 = 'defaultimg2.png';
        $imgproject3 = 'defaultimg3.png';
        $imgproject = new Imgproject;
        $imgproject->imp_p_1=$imgproject1;
        $imgproject->imp_p_2=$imgproject2;
        $imgproject->imp_p_3=$imgproject3;
        DB::INSERT("INSERT INTO img_project (img_p_1, img_p_2, img_p_3, p_id) VALUES ('$imgproject1','$imgproject1','$imgproject1','$userid')");
        
        //เก็บค่า ดาว=0
        $codeu = 'R';
        $cont = count(DB::select("SELECT NO_R FROM rating_p"));
        $nextint = $cont+1;
        $string_id = substr("00".$nextint,-3);
        $nextidrate = $codeu.$string_id;
        $project_id=$nextid;
        DB::INSERT("INSERT INTO rating_p(rating_id, rate_index, project_id) VALUES ('$nextidrate','0','$project_id')");
        $_SESSION['project'];

        return redirect('homeBD')->with('successappproject', 'สร้างผลงานเรียบร้อย');
    }

    public function getdes_project(Request $request)
    {   
        
        $des_p ="IoT Web Ai game&talk:";
        return response()->json($des_p,200);
        // $des_p = $request->var1;
        // echo $des_p;
        
        // $process = new Process("python3 C:/xampp/htdocs/projectmange-code/resources/views/elasticsearch/querydata.py \"{$des_p}\"");
        
        // // $process = new Process(['ls', '-lsa']);
        // $process->run();

        // // executes after the command finishes
        // if (!$process->isSuccessful()) {
        //     throw new ProcessFailedException($process);
        // }

        // echo $process->getOutput();

        
        
    }

    public function list_keyword(Request $request)
    {   

        $listkey = DB::select("SELECT * FROM temp_keyword ");
        
        session_start();
        if ($request->key1){
            
            if (isset($listkey[0])){
                $listkey1 = $listkey[0];
                
                $_SESSION['keyid1'] = 1 ;
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_1" id="keyword_project_1" value="'.$listkey1->name_key.'">';
            }else{
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_1" id="keyword_project_1" value="'.$listkey1="".'">';
            }
        }
        if ($request->key2){
            if (isset($listkey[1])){
                $listkey2 = $listkey[1];
                $_SESSION['keyid2'] = 1 ;
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_2" id="keyword_project_2" value="'.$listkey2->name_key.'">';
            } else{
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_2" id="keyword_project_2" value="'.$listkey2="".'">';
            }
        }
        if ($request->key3) {
            if (isset($listkey[2])){
                $listkey3 = $listkey[2];
                $_SESSION['keyid3'] = 1 ;
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_3" id="keyword_project_3" value="'.$listkey3->name_key.'">';
            } else{
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_3" id="keyword_project_3" value="'.$listkey3="".'">';
            }
        }   
        if ($request->key4){
            if (isset($listkey[3])){
                $listkey4 = $listkey[3];
                $_SESSION['keyid4'] = 1 ;
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_4" id="keyword_project_4" value="'.$listkey4->name_key.'">';
            } else{
                echo '<input type="text" class="rounded-0 border-info" name="keyword_project_4" id="keyword_project_4" value="'.$listkey4="".'">';
            }
        }    
            
        // DB::table('temp_keyword')->truncate();
        
    }

    public function des_project(Request $request){
        $dse = $request->data1;
        session_start();
        $_SESSION["key"] = "1";
        echo '<input type="text" class="rounded-0 border-info" name="keyword_project_1" id="keyword_project_1" value="'.$dse.'">';
    }

    public function keyword(Request $request)
    {
        if($request->key_p_1) {
            $key_p_1=$request->key_p_1;
            $chk_key = DB::select("SELECT * FROM keyword_p WHERE name_key LIKE '$key_p_1%' ");
            session_start();
            $key_1 = $_SESSION['key_p_1']=$key_p_1;
            if(isset($chk_key)?$chk_key:''){
                foreach ($chk_key as $chk_key) {
                    echo "<a href='#' class='list-group-item list-group-item-action border-1' style='width: 80%;'>".$chk_key->name_key."</a>";
                }
            }
            else{
                // echo "<p class='list-group-item border-1'>ไม่พบคำสำคัญ</p>";
            }
        }

        elseif($request->key_p_2){
            $key_p_2=$request->key_p_2;
            $chk_key = DB::select("SELECT * FROM keyword_p WHERE name_key LIKE '$key_p_2%' ");
         
            if(isset($chk_key)?$chk_key:''){
                foreach ($chk_key as $chk_key) {
                    echo "<a href='#' class='list-group-item list-group-item-action border-1' style='width: 80%;'>".$chk_key->name_key."</a>";
                }
            }
            else{
                // echo "<p class='list-group-item border-1'>ไม่พบคำสำคัญ</p>";
            }
        }

        elseif($request->key_p_3){
            $key_p_3=$request->key_p_3;
            $chk_key = DB::select("SELECT * FROM keyword_p WHERE name_key LIKE '$key_p_3%' ");
         
            if(isset($chk_key)?$chk_key:''){
                foreach ($chk_key as $chk_key) {
                    echo "<a href='#' class='list-group-item list-group-item-action border-1' style='width: 80%;'>".$chk_key->name_key."</a>";
                }
            }
            else{
                // echo "<p class='list-group-item border-1'>ไม่พบคำสำคัญ</p>";
            }
            
        }

        elseif($request->key_p_4){
            $key_p_4=$request->key_p_4;
            $chk_key = DB::select("SELECT * FROM keyword_p WHERE name_key LIKE '$key_p_4%' ");
         
            if(isset($chk_key)?$chk_key:''){
                foreach ($chk_key as $chk_key) {
                    echo "<a href='#' class='list-group-item list-group-item-action border-1' style='width: 80%;'>".$chk_key->name_key."</a>";
                }
            }
            else{
                // echo "<p class='list-group-item border-1'>ไม่พบคำสำคัญ</p>";
            }
            
        }
        else{
            // echo "<p class='list-group-item border-1'>ไม่พบคำสำคัญ2</p>";
        }
    }

    public function downloadfile(Request $request) {
        session_start();
        $project_id = $request->project_id;
        $rating = $request->rating;
        $userID = $_SESSION['usersid'];

        $codeu = 'R';
        $cont = count(DB::select("SELECT NO_R FROM rating_p"));
        $nextint = $cont+1;
        $string_id = substr("00".$nextint,-3);
        $nextid = $codeu.$string_id;

        DB::INSERT("INSERT INTO rating_p (rating_id, rate_index, project_id, users_id) VALUES ('$nextid','$rating','$project_id','$userID')");
        $file_p = DB::select("SELECT namefile,file_p FROM projects WHERE project_id='$project_id'");
        compact('file_p');
        foreach($file_p as $file_p){
            $file = $file_p->file_p;
            $namefile = $file_p->namefile;
        }
        $file_path = public_path('project/'.$file);
        return response()->download($file_path,$namefile);
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
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        $chk_project = count(DB::select("SELECT No_PB FROM projects WHERE projects.status_p in ('1')"));
        if($chk_project>4){
            $sum_project = $chk_project;
        }else{$sum_project = $chk_project-$chk_project;}
        
        //ดึง id มา เพื่อทำการเเยก id ที่มาจากการ by order วันที่สร้าง (ในเเท็กมาใหม่)
        $itemloop = DB::select("SELECT project_id FROM projects,type_project WHERE projects.type_id=type_project.type_id ORDER BY projects.created_at DESC");
        if(isset($itemloop[0])? $itemloop[0]:'') {
            $item0 = $itemloop[0]; //เลือกตำเเหน่งของข้อมูล
            compact('item0'); // ส่งค่า item0 จากการเลือกตำเเหน่ง
            foreach($item0 as $ite0){ // ทำการวง loop foreach เพื่อ เอาค่า id ออกจาก array
                // echo $ite0;
                $ite0; // id ของ ตำเเหน่งที่ 0 ที่ได้มาจากการ loop 
                // หลังจากได้ id ที่ เป็น str ก็นำมา select จาก database ทีละ id เเล้วส่งค่าไปแสดงผลหน้า homeBD
                $itemlp0 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite0'");  

                //rateingproject

                // $rate0 = DB::select("SELECT * FROM rating_p WHERE projects.type_id=type_project.type_id 
                // AND projects.project_id='$ite0'");  

                $svg0 = DB::select("SELECT AVG(rate_index) AS AvgRate FROM rating_p WHERE project_id='$ite0'"); 
                $svgrate0 = $svg0[0];
                compact('svgrate0');
                foreach($svgrate0 as $svgrate0){
                    $svgrate0 = round($svgrate0,$percision=1);
                }
                
            }
        }else {
            $itemlp0='';
        }

        
        if(isset($itemloop[1])? $itemloop[1]:'') {
            $item1 = $itemloop[1];
            compact('item1');
            foreach($item1 as $ite1){
                // echo $ite1; echo '<br>';
                $ite1;
                $itemlp1 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite1'");
                 
                $svg1 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite1'");
                $svgrate1 = $svg1[0];
                compact('svgrate1');
                foreach($svgrate1 as $svgrate1){
                    $svgrate1=round($svgrate1,$percision=1);;
                }
               
            }
        }else {
            $itemlp1='';
        }
        
        if(isset($itemloop[2])? $itemloop[2]:'') {
            $item2 = $itemloop[2];
            compact('item2');
            foreach($item2 as $ite2){
                // echo $ite2;
                $ite2;
                $itemlp2 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite2'");
                
                $svg2 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite2'");
                $svgrate2 = $svg2[0];
                compact('svgrate2');
                foreach($svgrate2 as $svgrate2){
                    $svgrate2=round($svgrate2,$percision=1);;
                }
            }
        }else {
            $itemlp2='';
        }

        if(isset($itemloop[3])? $itemloop[3]:'') {
            $item3 = $itemloop[3];
            compact('item3');
            foreach($item3 as $ite3){
                // echo $ite3;
                $ite3;
                $itemlp3 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite3'");
                
                $svg3 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite3'");
                $svgrate3 = $svg3[0];
                compact('svgrate3');
                foreach($svgrate3 as $svgrate3){
                    $svgrate3=round($svgrate3,$percision=1);;
                }
            }
        }else {
            $itemlp3='';
        }

        if(isset($itemloop[4])? $itemloop[4]:'') {
            $item4 = $itemloop[4];
            compact('item4');
            foreach($item4 as $ite4){
                // echo $ite3;
                $ite4;
                $itemlp4 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite4'");

                $svg4 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite4'");
                $svgrate4 = $svg4[0];
                compact('svgrate4');
                foreach($svgrate4 as $svgrate4){
                    $svgrate4=round($svgrate4,$percision=1);;
                }
            }
        }else {
            $itemlp4='';
        }
        
        if(isset($itemloop[5])? $itemloop[5]:'') {
            $item5 = $itemloop[5];
            compact('item5');
            foreach($item5 as $ite5){
                // echo $ite3;
                $ite5;
                $itemlp5 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite5'");

                $svg5 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite5'");
                $svgrate5 = $svg5[0];
                compact('svgrate5');
                foreach($svgrate5 as $svgrate5){
                    $svgrate5=round($svgrate5,$percision=1);;
                }
            }
        }else {
            $itemlp5='';
        }
        
        if(isset($itemloop[6])? $itemloop[6]:'') {
            $item6 = $itemloop[6];
            compact('item6');
            foreach($item6 as $ite6){
                // echo $ite3;
                $ite6;
                $itemlp6 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite6'");
                $svg6 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite6'");
                $svgrate6 = $svg6[0];
                compact('svgrate6');
                foreach($svgrate6 as $svgrate6){
                    $svgrate6=round($svgrate6,$percision=1);;
                }
            }
        }else {
            $itemlp6='';
        }
        
        if(isset($itemloop[7])? $itemloop[7]:'') {
            $item7 = $itemloop[7];
            compact('item7');
            foreach($item7 as $ite7){
                // echo $ite3;
                $ite7;
                $itemlp7 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite7'");

                $svg7 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite7'");
                $svgrate7 = $svg7[0];
                compact('svgrate7');
                foreach($svgrate7 as $svgrate7){
                    $svgrate7=round($svgrate7,$percision=1);;
                }
            }
        }else {
            $itemlp7='';
        }
        
        if(isset($itemloop[8])? $itemloop[8]:'') {
            $item8 = $itemloop[8];
            compact('item8');
            foreach($item8 as $ite8){
                // echo $ite3;
                $ite8;
                $itemlp8 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id 
                AND projects.project_id='$ite8'");

                $svg8 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite8'");
                $svgrate8 = $svg8[0];
                compact('svgrate8');
                foreach($svgrate8 as $svgrate8){
                    $svgrate8=round($svgrate8,$percision=1);;
                }
            }
        }else {
            $itemlp8='';
        }

        //genre(ไอโอที(IoT)) item 
        $chk_project_type = count(DB::select("SELECT No_PB FROM projects,genre_project WHERE projects.status_p in ('1') AND projects.genre_id=genre_project.genre_id AND genre_project.genre_name in ('ไอโอที(IoT)')"));
        if($chk_project_type>4){
            $sum_type_p = $chk_project_type;
        }else{$sum_type_p = $chk_project_type-$chk_project_type;}

        $itemgenre = DB::select("SELECT project_id FROM projects,genre_project,type_project WHERE genre_project.genre_name in ('ไอโอที(IoT)') AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id ORDER BY projects.created_at ASC");
        if(isset($itemgenre[0])? $itemgenre[0]:'') {
            $item0 = $itemgenre[0]; //เลือกตำเเหน่งของข้อมูล
            compact('item0'); // ส่งค่า item0 จากการเลือกตำเเหน่ง
            foreach($item0 as $ite0){ // ทำการวง loop foreach เพื่อ เอาค่า id ออกจาก array
                // echo $ite0;
                $ite0; // id ของ ตำเเหน่งที่ 0 ที่ได้มาจากการ loop
                // หลังจากได้ id ที่ เป็น str ก็นำมา select จาก database ทีละ id เเล้วส่งค่าไปแสดงผลหน้า homeBD
                $itemlg0 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
                AND projects.project_id='$ite0'"); 

                $svg0 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite0'");
                $svgrateg0 = $svg0[0];
                compact('svgrateg0');
                foreach($svgrateg0 as $svgrateg0){
                    $svgrateg0=round($svgrateg0,$percision=1);;
                }
            }
            
        }else {
            $itemlg0='';
        }

        if(isset($itemgenre[1])?$itemgenre[1]:''){
            $item1 = $itemgenre[1];
            compact('item1');
            foreach($item1 as $ite1){
                // echo $ite1;

                $ite1;
                $itemlg1 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite1'");

                $svg1 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite1'");
                $svgrateg1 = $svg1[0];
                compact('svgrateg1');
                foreach($svgrateg1 as $svgrateg1){
                    $svgrateg1=round($svgrateg1,$percision=1);;
                }
            }
            
        }else {
            $itemlg1='';
        }
       
        if(isset($itemgenre[2])?$itemgenre[2]:''){
            $item2 = $itemgenre[2];
            compact('item2');
            foreach($item2 as $ite2){
                // echo $ite2;
                $ite2;
                $itemlg2 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite2'");

                $svg2 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite2'");
                $svgrateg2 = $svg2[0];
                compact('svgrateg2');
                foreach($svgrateg2 as $svgrateg2){
                    $svgrateg2=round($svgrateg2,$percision=1);;
                }
            }
        }else {
            $itemlg2='';
        }
        
        if(isset($itemgenre[3])?$itemgenre[3]:''){
            $item3 = $itemgenre[3];
            compact('item3');
            foreach($item3 as $ite3){
                // echo $ite3;
                $ite3;
                $itemlg3 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite3'");

                $svg3 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite3'");
                $svgrateg3 = $svg3[0];
                compact('svgrateg3');
                foreach($svgrateg3 as $svgrateg3){
                    $svgrateg3=round($svgrateg3,$percision=1);;
                }
            }
        }else {
            $itemlg3='';
        }

        if(isset($itemgenre[4])?$itemgenre[4]:''){
            $item4 = $itemgenre[4];
            compact('item4');
            foreach($item4 as $ite4){
                // echo $ite3;
                $ite4;
                $itemlg4 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite4'");

                $svg4 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite4'");
                $svgrateg4 = $svg4[0];
                compact('svgrateg4');
                foreach($svgrateg4 as $svgrateg4){
                    $svgrateg4=round($svgrateg4,$percision=1);;
                }
            }
        }else {
            $itemlg4='';
        }

        if(isset($itemgenre[5])?$itemgenre[5]:''){
            $item5 = $itemgenre[5];
            compact('item5');
            foreach($item5 as $ite5){
                // echo $ite3;
                $ite5;
                $itemlg5 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite5'");

                $svg5 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite5'");
                $svgrateg5 = $svg5[0];
                compact('svgrateg5');
                foreach($svgrateg5 as $svgrateg5){
                    $svgrateg5=round($svgrateg5,$percision=1);;
                }
            }
        }else {
            $itemlg5='';
        }

        if(isset($itemgenre[6])?$itemgenre[6]:''){
            $item6 = $itemgenre[6];
            compact('item6');
            foreach($item6 as $ite6){
                // echo $ite3;
                $ite6;
                $itemlg6 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite6'");

                $svg6 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite6'");
                $svgrateg6 = $svg6[0];
                compact('svgrateg6');
                foreach($svgrateg6 as $svgrateg6){
                    $svgrateg6=round($svgrateg6,$percision=1);;
                }
            }
        }else {
            $itemlg6='';
        }

        if(isset($itemgenre[7])?$itemgenre[7]:''){
            $item7 = $itemgenre[7];
            compact('item7');
            foreach($item7 as $ite7){
                // echo $ite3;
                $ite7;
                $itemlg7 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
                AND projects.project_id='$ite7'");

                $svg7 = DB::select("SELECT AVG(rate_index) FROM rating_p WHERE project_id='$ite7'");
                $svgrateg7 = $svg7[0];
                compact('svgrateg7');
                foreach($svgrateg7 as $svgrateg7){
                    $svgrateg7=round($svgrateg7,$percision=1);;
                }
            }
        }else {
            $itemlg7='';
        }
        
        //poppulay item 
        $chk_p_pop = count(DB::select("SELECT project_id, AVG(rate_index) ratesum FROM rating_p GROUP BY project_id ORDER BY AVG(rate_index) DESC"));
        // echo $chk_p_pop;
        if($chk_p_pop>4){
            $sum_pop_p = $chk_p_pop;
        }else{$sum_pop_p = $chk_p_pop-$chk_p_pop;}

        
        $itempop = DB::select("SELECT project_id, AVG(rate_index) ratesum FROM rating_p GROUP BY project_id ORDER BY AVG(rate_index) DESC");
        // print_r($itempop);
        if(isset($itempop[0])? $itempop[0]:'') {
            $item0 = $itempop[0]; //เลือกตำเเหน่งของข้อมูล
            // print_r($item0);
            $pop0 = $item0->project_id;
            $avgpop0 = round($item0->ratesum,$percision=1);
            $itempop0 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id 
            AND projects.project_id='$pop0'"); 
            // print_r($itemlpop0);
        }else {
            $itemlg0='';
        }

        if(isset($itempop[1])?$itempop[1]:''){
            $item1 = $itempop[1];
            $pop1 = $item1->project_id;
            $avgpop1 = round($item1->ratesum,$percision=1);
            $itempop1 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop1'");
            
        }else {
            $itemlg1='';
        }
       
        if(isset($itempop[2])?$itempop[2]:''){
            $item2 = $itempop[2];
            $pop2 = $item2->project_id;
            $avgpop2 = round($item2->ratesum,$percision=1);
            $itempop2 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop2'");

        }else {
            $itemlg2='';
        }
        
        if(isset($itempop[3])?$itempop[3]:''){
            $item3 = $itempop[3];
            $pop3 = $item3->project_id;
            $avgpop3 = round($item3->ratesum,$percision=1);
            $itempop3 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop3'");

        }else {
            $itemlg3='';
        }

        if(isset($itempop[4])?$itempop[4]:''){
            $item4 = $itempop[4];
            $pop4 = $item4->project_id;
            $avgpop4 = round($item4->ratesum,$percision=1);
            $itempop4 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop4'");
    
        }else {
            $itemlg4='';
        }

        if(isset($itempop[5])?$itempop[5]:''){
            $item5 = $itempop[5];
            $pop5 = $item5->project_id;
            $avgpop5 = round($item5->ratesum,$percision=1);
            $itempop5 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop5'");

        }else {
            $itemlg5='';
        }

        if(isset($itempop[6])?$itempop[6]:''){
            $item6 = $itempop[6];
            $pop6 = $item6->project_id;
            $avgpop6 = round($item6->ratesum,$percision=1);
            $itempop6 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop6'");

        }else {
            $itemlg6='';
        }

        if(isset($itempop[7])?$itempop[7]:''){
            $item7 = $itempop[7];
            $pop7 = $item7->project_id;
            $avgpop7 = round($item7->ratesum,$percision=1);
            $itempop7 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id
            AND projects.project_id='$pop7'");

        }else {
            $itemlg7='';
        }

        return view('homeBD',compact('itemlp0','itemlp1','itemlp2','itemlp3','itemlp4','itemlp5','itemlp6','itemlp7','itemlp8',
        'itemlg0','itemlg1','itemlg2','itemlg3','itemlg4','itemlg5','itemlg6','itemlg7','imgaccount','adminaccount','itemgenre','sum_type_p','sum_project',
        'svgrate0','svgrate1','svgrate2','svgrate3','svgrate4','svgrate5','svgrate6','svgrate7','svgrateg0','svgrateg1','svgrateg2','svgrateg3',
        'itempop0','itempop1','itempop2','itempop3','itempop4','avgpop0','avgpop1','avgpop2','avgpop3','avgpop4','sum_pop_p'));
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

    public function typeitem($type_id){
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $datas = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id AND projects.type_id='$type_id'");

        $imgback = DB::select("SELECT * FROM projects,img_project WHERE projects.user_id=img_project.p_id AND projects.project_id = '$type_id'");
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        return view('pagewedsum.typesumBD',compact('datas','type_id','imgback','imgaccount','adminaccount'));
    }


    public function typeitemmdd($type_id){
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $item  = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projectmdd
        WHERE users.U_id=projectmdd.user_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND projectmdd.type_id = '$type_id'"  );
        

        $itemadmin  = DB::select("SELECT * FROM admin_company,owner_projectmdd,projectmdd,type_project,genre_project,category_project
        WHERE owner_projectmdd.owner_m_id=projectmdd.user_id AND admin_company.admin_id=projectmdd.adm_id AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND projectmdd.type_id = '$type_id'"  );

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

    public function test($method,$data,$url,$lease,$tenant_count){
    //     $data_array =  array(
    //         "key"        => "",
    //         "data"         => ""
    //   );
    //   $make_call = callAPI('POST', 'https://api.example.com/post_url/', json_encode($data_array));
    //   $response = json_decode($make_call, true);
    //   $errors   = $response['response']['errors'];
    //   $data     = $response['response']['data'][0];
    //     // // $query="Insidethatcagetherewasagreenteddybear";
        // $url = 'https://www.prepostseo.com/apis/checkPlag/key=8405791ef34d67710469e7fc10fc6e50/';
        // // $config['permitted_uri_chars'] = 'a-z 0-9~%.:\_\=+%\&';
        // $data = array(
        //     'query'=>"Insidethatcagetherewasagreenteddybear",
        //     // "config['permitted_uri_chars']" => 'a-z 0-9~%.:_\-',
        //     // 'Content-type' => 'application/json',
        // );
        // $ch = curl_init(); // เริ่มต้นใช้งาน cURL
        // curl_setopt($ch, CURLOPT_URL, $url); // กำหนดค่า URL
        // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)); // กำหนดค่า HTTP Request
        // curl_setopt($ch, CURLOPT_POST, true); // กำหนดรูปแบบการส่งข้อมูลเป็นแบบ $_POST
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // กำหนดให้ cURL คืนค่าผลลัพท์
        // $response = curl_exec($ch); // ประมวลผล cURL
        // curl_close($ch); // ปิดการใช้งาน cURL
        // print_r($response);
        // // $data = json_decode(file_get_contents($response), true);
        // // echo $data;
        // return Http::get('https://www.prepostseo.com/plagiarism-checker');
        // $data = 'This is unique paragraph black permanent marker.';

        // header("Access-Control-Allow-Origin: *");
        // header("Access-Control-Allow-Headers: access");
        // header("Access-Control-Allow-Methods: GET,POST");
        // header("Access-Control-Allow-Credentials: true");
        // header('Content-Type: application/json;charset=utf-8');


        // $output= '{
        // "messages": [
        // {"text": "This Form OPDEV API"},
        // {"text": "Connection Success !"}
        // ]
        // }';

        // print_r($output);
        // $url = 'http://server.com/path';
        // $data = array('key1' => 'value1', 'key2' => 'value2');

        // // use key 'http' even if you send the request to https://...
        // $options = array(
        //     'http' => array(
        //         'header'  => "Content-type: application/json",
        //         'method'  => 'POST',
        //         'content' => http_build_query($data)
        //     )
        // );
        // $context  = stream_context_create($options);
        // $result = file_get_contents($url, false, $context);
        // if ($result === FALSE) { /* Handle error */ }

        // var_dump($result);

        // $data = DB::select("SELECT name_en FROM projects WHERE project_id='PB0005' ");
        // return response()->json($data);
        // create & initialize a curl session

           


    }

    public function search_auto(Request $request){
        if($request->keysearch){
            $key = $request->keysearch;
            // echo $key;
            $chk_search_key = DB::select("SELECT project_name FROM projects WHERE project_name LIKE '%$key%'");
            compact('chk_search_key');
            if(isset($chk_search_key)?$chk_search_key:''){
                $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                foreach ($chk_search_key as $chk_search_key) {
                    $output .='<li><a href="#">'.$chk_search_key->project_name.'</a></li>';
                    // echo"<a href='#' class='list-group-item list-group-item-action border-1' style='width: 80%;'>".$chk_search_key->project_name."</a>";;
                }
                $output .= '</ul>';
                echo $output;

            }
            else{
                // echo "<p class='list-group-item border-1'>ไม่พบคำสำคัญ</p>";
            }

        }
    }

}

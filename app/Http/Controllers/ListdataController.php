<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Datauser;
use App\Dataproject;
use App\Datalist;
use App\User;
use App\Dataupload;
use App\Datafileupload;
use App\Http\Controllers;

class ListdataController extends Controller
{
    //
    public function Datalist()
    {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        $data = DB::select("SELECT * FROM users");
        $dataadmin = DB::select("SELECT * FROM admin_company");
        return view('admin.datauser', compact('data', 'dataadmin', 'imgaccount'));
    }

    public function Datalistadmin()
    {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        $dataadmin = DB::select("SELECT * FROM admin_company");
        return view('admin.dataadmin', compact('dataadmin', 'imgaccount'));
    }

    public function Datalistproject()
    {
        // $dataproject = DB::select('SELECT * FROM addproject');
        $dataproject = Dataproject::all();
        return view('dataproject', ['dataproject' => $dataproject]);
    }

    public function Data()
    {
        $datas = Datalist::all();
        return view('homeBD', ['datas' => $datas]);
    }

    public function Newarrivaldata()
    {
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        // $item = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id and project_id='6'");
        $datas0 = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id AND projects.status_p in ('0') ORDER BY projects.created_at DESC");
        $datas1 = DB::select("SELECT *,AVG(rate_index) AS AvgRate  
                                FROM projects,type_project,rating_p WHERE projects.type_id=type_project.type_id 
                                AND projects.project_id=rating_p.project_id AND projects.status_p in ('1') 
                                GROUP BY rating_p.project_id 
                                ORDER BY projects.created_at DESC");
        $datascount = count(DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id AND projects.status_p in ('1') ORDER BY projects.created_at DESC"));

        return view('pagewedsum.Newarrival', compact('datas0', 'datas1', 'imgaccount', 'adminaccount','datascount'));
    }


    public function dataIot()
    {
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        // $item = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id and project_id='6'");
        $datas0 = DB::select("SELECT * FROM projects,genre_project,type_project WHERE genre_project.genre_name in ('ไอโอที(IoT)') AND projects.status_p in ('0') AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id ");
        $datas1 = DB::select("SELECT *, AVG(rate_index) AvgRate 
        FROM projects,genre_project,type_project,rating_p 
        WHERE genre_project.genre_name in ('ไอโอที(IoT)') AND projects.status_p in ('1') 
        AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id AND projects.project_id=rating_p.project_id
        GROUP BY rating_p.project_id");

        return view('pagewedsum.pageIot', compact('datas', 'imgaccount', 'adminaccount'));
    }

    public function pursue(){
        session_start();
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");
        // $item = DB::select("SELECT * FROM projects,type_project WHERE projects.type_id=type_project.type_id and project_id='6'");
        $datas0 = DB::select("SELECT * FROM users,projectmdd,genre_project,type_project,category_project WHERE category_project.category_name in ('ติดตาม') AND projectmdd.type_id=type_project.type_id 
        AND projectmdd.genre_id=genre_project.genre_id AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=users.U_id AND projectmdd.status_m in ('0') ORDER BY RAND()");
        // $itemA = DB::select("SELECT project_m_id FROM owner_projectmdd,projectmdd,genre_project,type_project,category_project WHERE category_project.category_name in ('ติดตาม') AND projectmdd.type_id=type_project.type_id 
        // AND projectmdd.genre_id=genre_project.genre_id AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=owner_projectmdd.owner_m_id  ORDER BY RAND()");
        $datas1 = DB::select("SELECT *,AVG(rate_m_index) AS AvgRate 
        FROM users,projectmdd,genre_project,type_project,category_project,rating_m WHERE category_project.category_name in ('ติดตาม') AND projectmdd.type_id=type_project.type_id 
        AND projectmdd.genre_id=genre_project.genre_id AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=users.U_id AND projectmdd.status_m in ('1') AND projectmdd.project_m_id=rating_m.project_m_id 
        GROUP BY rating_m.project_m_id
        ORDER BY RAND()");
        $datasA1 = DB::select("SELECT *,AVG(rate_m_index) AS AvgRate 
        FROM owner_projectmdd,projectmdd,genre_project,type_project,category_project,rating_m WHERE category_project.category_name in ('ติดตาม') AND projectmdd.type_id=type_project.type_id 
        AND projectmdd.genre_id=genre_project.genre_id AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=owner_projectmdd.owner_m_id AND projectmdd.status_m in ('1') AND projectmdd.project_m_id=rating_m.project_m_id 
        GROUP BY rating_m.project_m_id
        ORDER BY RAND() " );
        // print_r($datasA1);
        // $datas1 = DB::select("SELECT *, AVG(rate_index) AvgRate 
        // FROM projects,genre_project,type_project,rating_p 
        // WHERE genre_project.genre_name in ('ไอโอที(IoT)') AND projects.status_p in ('1') 
        // AND projects.type_id=type_project.type_id AND projects.genre_id=genre_project.genre_id AND projects.project_id=rating_p.project_id
        // GROUP BY rating_p.project_id");

        
        return view('pagewedsum.MDD.pursue', compact('datas0', 'datas1', 'datasA1', 'imgaccount', 'adminaccount'));
    }

    function adduser(Request $request)
    {
        $userdata = new User;
        $userdata->name = $request->name;
        $userdata->gender = $request->gender;
        $userdata->province = $request->province;
        $userdata->email = $request->email;
        $userdata->username = $request->username;
        $userdata->password = $request->password;
        $userdata->save();
        return redirect('dataview')->with('success', 'เพิ่มข้อมูลเรียบร้อย');

        // print_r($request->input());
    }

    public function addfileproject(Request $request)
    {
        //
        // echo ("อัพโหลดเรียบร้อย...");
        $path = $request->file('fileimgToUpload')->store('imgupload');
        $pathfile = $request->file('fileToUpload')->store('fileupload');
        return ['path' => $path, $pathfile, 'upload' => 'success'];
    }
}

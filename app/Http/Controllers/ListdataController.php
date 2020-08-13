<?php

namespace App\Http\Controllers;

use DB;
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
    public function Datalist() {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");
        $data = DB::select("SELECT * FROM users");
        $dataadmin = DB::select("SELECT * FROM admin_company");
        return view('admin.datauser', compact('data','dataadmin','imgaccount'));
    }

    public function Datalistadmin() {
        session_start();
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';

        $imgaccount = DB::select("SELECT * FROM admin_company WHERE admin_company_id='$chkidadmin'");
      
        $dataadmin = DB::select("SELECT * FROM admin_company");
        return view('admin.dataadmin', compact('dataadmin','imgaccount'));
    }
 
    public function Datalistproject() {
        // $dataproject = DB::select('SELECT * FROM addproject');
        $dataproject = Dataproject::all();
        return view('dataproject', ['dataproject'=>$dataproject]);
    }

    public function Data() {
        $datas = Datalist::all();
        return view('homeBD', ['datas'=>$datas]);
    }

    public function Newarrivaldata() {
        $datas = Datalist::all();
        return view('pagewedsum.Newarrival', ['datas'=>$datas]);
    }

    function adduser(Request $request) {
        $userdata = new User;
        $userdata->name=$request->name;
        $userdata->gender=$request->gender;
        $userdata->province=$request->province;
        $userdata->email=$request->email;
        $userdata->username=$request->username;
        $userdata->password=$request->password;
        $userdata->save();
        return redirect('dataview')->with('success', 'เพิ่มข้อมูลเรียบร้อย');

        // print_r($request->input());
    }

    public function destroy($id) {
        DB::delete('DELETE FROM users WHERE id=?',[$id]);
        return redirect('dataview')->with('success', 'ลบข้อมูลเรียบร้อย'); 
    }

    public function deleteadmin($id) {
        DB::delete('DELETE FROM admin_company WHERE admin_company_id=?',[$id]);
        return redirect('viewadmin')->with('success', 'ลบข้อมูลเรียบร้อย'); 
        
    }

    public function deleteproject($id) {
        DB::delete('DELETE FROM addproject WHERE project_id=?',[$id]);
        return redirect('viewproject')->with('success', 'ลบข้อมูลเรียบร้อย'); 
        
    }

    public function addfileproject(Request $request)
    {
        //
        // echo ("อัพโหลดเรียบร้อย...");
        $path=$request->file('fileimgToUpload')->store('imgupload');
        $pathfile=$request->file('fileToUpload')->store('fileupload');
        return ['path'=>$path,$pathfile,'upload'=>'success'];
    }
    
}


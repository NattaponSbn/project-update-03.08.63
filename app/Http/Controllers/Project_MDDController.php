<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projectmdd;

class Project_MDDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //เพิ่มข้อมูล project
    public function insertproject(Request $request) {

        $codeu = 'PM';
        $cont = count(DB::select("SELECT No_PM FROM projectmdd"));
        $nextint = $cont+1;
        $string_id = substr("000".$nextint,-4);
        $nextid = $codeu.$string_id;

        $project = new Projectmdd;
        session_start();
        $userid = $_SESSION['usersid'];
        $project->user_id=$userid;
        $project->project_m_id=$nextid;
        $project->project_m_name=$request->project_name;
        $project->keyword_m_project=$request->keyword_project;
        $project->des_m_project=$request->des_project;
        // $dataproject->facebook=$request->facebook;
        // $dataproject->email=$request->email;
        // $dataproject->phone=$request->phone;
        $project->type_id=$request->type_project;
        $project->genre_id=$request->genre_project;
        $project->category_id=$request->category_project;
        $project->branch_id=$request->branch_project;
        $project->save();
        return redirect('homeMDD')->with('successappproject', 'สร้างผลงานเรียบร้อย');
    }

    public function showproject() {
        $project = Projectmdd::with('user')->orderby('project_id')->paginate(5);
        return view('admin.project',compact('project'));
    }

    // dropdown show
    public function viewadd() {
        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.addprojectMDD',compact('chk_type','chk_genre','chk_category','chk_branch'));
    }

    // join หน้า detailprject เเละโชว์ข้อมูล project
    public function project() {
        session_start();
        $chkidproject = $_SESSION['usersid'];
        
        $data = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projectmdd 
        WHERE users.U_id=projectmdd.user_id and U_id='$chkidproject' AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id ");

        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailprojectMDD',compact('data','chk_type','chk_genre','chk_category','chk_branch'));
    }

    public function editproject(Request $request) {
        session_start();
        $chkidproject = $_SESSION['usersid'];

        $project_name = $request->input('project_name');
        $keyword_project = $request->input('keyword_project');
        $des_project = $request->input('des_project');
        $type_project = $request->input('type_project');
        $genre_project = $request->input('genre_project');
        $category_project = $request->input('category_project');

        DB::update("UPDATE users,projectmdd SET project_m_name = '$project_name', keyword_m_project ='$keyword_project', des_m_project ='$des_project', type_id ='$type_project',
         genre_id ='$genre_project', category_id ='$category_project', projectmdd.updated_at = CURRENT_TIMESTAMP() WHERE users.id=projectmdd.user_id AND U_id='$chkidproject'");
        
        return redirect('project.detailprojectMDD')->with('success', 'อัพเดทข้อมูลเรียบร้อย');
    }

    public function itemproject() {
        session_start();
        // $chkid = $_SESSION['usersid'];
        $chkid = (isset($_SESSION['usersid'])) ? $_SESSION['usersid'] : '';
        $chkidadmin = (isset($_SESSION['adminid'])) ? $_SESSION['adminid'] : '';
        $userimg = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $imgaccount = DB::select("SELECT * FROM users WHERE U_id='$chkid'");
        $adminaccount = DB::select("SELECT * FROM admin_company WHERE admin_id='$chkidadmin'");

        $chk_follow = count(DB::select("SELECT NO_PM FROM projectmdd,category_project WHERE projectmdd.status_m in ('1') AND projectmdd.category_id=category_project.category_id AND category_project.category_name in ('ติดตาม')"));
        $sum_follow = $chk_follow;
        // if($chk_follow){
        //     $sum_follow = $chk_follow;
        // }else{$sum_follow = $chk_follow-$chk_follow;

        // $item = DB::select("SELECT * FROM projectmdd,type_project,category_project,users WHERE projectmdd.type_id=type_project.type_id and projectmdd.user_id=users.U_id
        // and projectmdd.category_id=category_project.category_id ORDER BY projectmdd.category_id=1");
        $item = DB::select("SELECT * FROM users,projectmdd,genre_project,type_project,category_project WHERE category_project.category_name in ('ติดตาม') AND projectmdd.type_id=type_project.type_id 
        AND projectmdd.genre_id=genre_project.genre_id AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=users.U_id ORDER BY RAND()");

        $itemA = DB::select("SELECT * FROM owner_projectmdd,projectmdd,genre_project,type_project,category_project WHERE category_project.category_name in ('ติดตาม') AND projectmdd.type_id=type_project.type_id 
        AND projectmdd.genre_id=genre_project.genre_id AND projectmdd.category_id=category_project.category_id AND projectmdd.user_id=owner_projectmdd.owner_m_id  ORDER BY RAND()");
        // $item2 = DB::select("SELECT * FROM projectmdd,type_project,category_project,admin_company,owner_projectmdd WHERE projectmdd.type_id=type_project.type_id 
        // and projectmdd.user_id=owner_projectmdd.owner_m_id and projectmdd.adm_id=admin_company.admin_id 
        // and projectmdd.category_id=category_project.category_id ORDER BY projectmdd.category_id=1");
       

        return view('homeMDD',compact('item','adminaccount','userimg','imgaccount','itemA','sum_follow'));
    }
    
    public function editprojectadmin(Request $request) {
        
        $project_m_id = $request->input('project_m_id');
        $project_name = $request->input('project_name');
        $keyword_project = $request->input('keyword_project');
        $des_project = $request->input('des_project');
        $owner_p = $request->input('owner_m');
        $advisor_p = $request->input('advisor_m');
        $type_project = $request->input('type_project');
        $genre_project = $request->input('genre_project');
        $category_project = $request->input('category_project');
        $project_m_name_en = $request->input('project_name_en');

        DB::update("UPDATE projectmdd SET project_m_name = '$project_name', keyword_m_project ='$keyword_project', des_m_project ='$des_project', type_id ='$type_project',
         genre_id ='$genre_project', category_id ='$category_project', project_m_name_en ='$project_m_name_en', projectmdd.updated_at = CURRENT_TIMESTAMP() WHERE project_m_id='$project_m_id'");
        
        return redirect('viewprojectmdd')->with('successupdate', 'อัพเดทข้อมูลเรียบร้อย');
    }

    public function projectmdd($project_m_id) {

        $data = DB::select("SELECT * FROM type_project,genre_project,category_project,users,projectmdd 
        WHERE project_m_id='$project_m_id' AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND users.U_id=projectmdd.user_id ");
        
        $dataA = DB::select("SELECT * FROM type_project,genre_project,category_project,admin_company,owner_projectmdd,projectmdd 
        WHERE project_m_id='$project_m_id' AND projectmdd.type_id=type_project.type_id AND projectmdd.genre_id=genre_project.genre_id 
        AND projectmdd.category_id=category_project.category_id AND owner_projectmdd.owner_m_id=projectmdd.user_id AND admin_company.admin_id=projectmdd.adm_id ");

        $chk_type = DB::select("SELECT * FROM type_project");
        $chk_genre = DB::select("SELECT * FROM genre_project");
        $chk_category = DB::select("SELECT * FROM category_project");
        $chk_branch = DB::select("SELECT * FROM branch_project");
        return view('project.detailprojectMDD_Ad',compact('data','chk_type','chk_genre','chk_category','chk_branch','project_m_id','dataA'));
    }

    
}
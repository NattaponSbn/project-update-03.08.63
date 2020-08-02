@extends('layouts.mainhomeadmin')
        

        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-th-list"></i>รายละเอียดดูเเลระบบ</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active"><a href="#">รายละเอียดผู้ดูเเลระบบ</a></li>
                </ul>
            </div>
            
            <div align="right"><a href="adduser" class="btn btn-success">เพิ่มข้อมูล</a></div>

                <!-- เเสดงเเจ้งเตือนว่าข้อมูลถูกลบเรียบร้อยเเล้ว -->
                @if(\Session::has('success')) 
                    <div class="alert alert-success"> 
                    <p>{{ \Session::get('success') }}</p> 
                    </div> 
                @endif 

            <div class="row">
                <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <div class="table-responsive">
                    
                        <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>ลำดับที่</th>
                                <th>ชื่อนามสุกล</th>
                                <th>อีเมล</th>
                                <th>ชื่อผู้ใช้</th>
                                <th>สถานะ</th>
                                <!-- <th>รหัสผ่าน</th> -->
                                <th>วันเดือนปี</th>
                                
                                <th>จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataadmin as $datauser)
                            <tr>
                                <td>{{$datauser->admin_company_id}}</td>
                                <td>{{$datauser->admin_company_name}}</td>
                                <td>1</td>
                                <td>{{$datauser->admin_company_user}}</td>
                                <td>1</td>
                                <!-- <td>{{$datauser->admin_company_pass}}</td> -->
                                <td>1</td>
                                
                                <td>
                                    <a onClick="return confirm('การเเก้ไขข้อมูลจะต้องเช็คความถูกต้องทุกครั้งก่อนที่จะทำการบันทึก')" href="edituseradmin/{ {{$datauser->admin_company_id}} }"><button type="submit"><img src="img/edit.png" alt="" class="imgdata"></button></a>
                                    
                                    <a onClick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่?')" href="delete/{ {{$datauser->admin_company_id}} }"><button type="submit"><img  src="img/trash.png" alt="" class="imgdata"></button></a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>


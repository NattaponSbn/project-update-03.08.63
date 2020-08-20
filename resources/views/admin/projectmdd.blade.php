@extends('layouts.mainhomeadmin')
@section('content')
        <main class="app-content">
            <div class="app-title">
                <div>
                    <h1><i class="fa fa-th-list"></i>รายละเอียดผลงาน</h1>
                </div>
                <ul class="app-breadcrumb breadcrumb side">
                    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                    <li class="breadcrumb-item">ตาราง</li>
                    <li class="breadcrumb-item active"><a href="#">รายละเอียดผลงาน</a></li>
                </ul>
            </div>
            

                <!-- เเสดงเเจ้งเตือนว่าข้อมูลถูกลบเรียบร้อยเเล้ว -->
                @if(\Session::has('success')) 
                    <div class="alert alert-success"> 
                    <p>{{ \Session::get('success') }}</p> 
                    </div> 
                @endif 

                
        @if ($message = Session::get('successappproject'))
            <script>
            swal({
                title: "เรียบร้อย",
                text: "ข้อมูลได้บันทึกเรียบร้อยเเล้ว",
                icon: "success",
                button: "ตกลง",
            });
            </script>
        @endif

        @if ($message = Session::get('delete_project'))
            <script>
            swal({
                title: "ลบข้อมูลเรียบร้อย",
                icon: "success",
                button: "ตกลง",
            });
            </script>
        @endif
        
        <h2>ผลงงานปริญญาเอก/โท</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อผลงาน</th>
                                            <th>คำสำคัญ</th>
                                            <th>บทคัดย่อ</th>
                                            <th>ประเภทเอกสาร</th>
                                            <th>เจ้าของ</th>
                                            <th>ผู้สร้าง</th>
                                            <th>วันเดือนปี</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($projectmdd as $data)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data->project_m_name}}</td>
                                                <td>{{$data->keyword_m_project}}</td>
                                                <td>{{$data->des_m_project}}</td>
                                                <td>{{$data->type_name}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->status}}</td>
                                                <td>1</td>
                                                
                                                
                                                <td>
                                                    <a onClick="return confirm('การเเก้ไขข้อมูลจะต้องเช็คความถูกต้องทุกครั้งก่อนที่จะทำการบันทึก')" href="projectviewmdd/{{$data->project_m_id}}"><button type="submit"><img src="img/edit.png" alt="" class="imgdata"></button></a>
                                                    <br>
                                                    <a onClick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่?')" href="delete_p_mdd/{{$data->project_m_id}}"><button type="submit"><img  src="img/trash.png" alt="" class="imgdata"></button></a>

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
            <div align="right"><a href="addMDD" class="btn btn-success">เพิ่มข้อมูล</a></div>
            <h2>ผลงงานปริญญาเอก/โท(ผู้ดูเเลระบบ)</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อผลงาน</th>
                                            <th>คำสำคัญ</th>
                                            <th>บทคัดย่อ</th>
                                            <th>ประเภทเอกสาร</th>
                                            <th>เจ้าของ</th>
                                            <th>ผู้สร้าง</th>
                                            <th>วันเดือนปี</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($projectmddA as $data)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$data->project_m_name}}</td>
                                                <td>{{$data->keyword_m_project}}</td>
                                                <td>{{$data->des_m_project}}</td>
                                                <td>{{$data->type_name}}</td>
                                                <td>{{$data->owner_m_name}}</td>
                                                <td>{{$data->status}}</td>
                                                <td>1</td>

                                                <td>
                                                    <a onClick="return confirm('การเเก้ไขข้อมูลจะต้องเช็คความถูกต้องทุกครั้งก่อนที่จะทำการบันทึก')" href="projectviewmdd/{{$data->project_m_id}}"><button type="submit"><img src="img/edit.png" alt="" class="imgdata"></button></a>
                                                    <br>
                                                    <a onClick="return confirm('คุณต้องการลบข้อมูลใช่หรือไม่?')" href="delete_p_mdd/{{$data->project_m_id}}"><button type="submit"><img  src="img/trash.png" alt="" class="imgdata"></button></a>

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
@endsection

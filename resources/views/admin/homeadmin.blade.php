@extends('layouts.mainhomeadmin')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1> </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
    <div class="row">
        <div class="col-md-6 col-lg-3 width">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users"></i>
            <div class="info">
              <h4>ผู้ใช้</h4>
              @if(isset($sum_user)?$sum_user:'')
                <p><b><?php echo $sum_user;?></b></p>
                @else
                <p><b>0</b></p>
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon far fa-thumbs-up"></i>
            <div class="info">
              <h4>ชอบ</h4>
              @if(isset($sum_like)?$sum_like:'')
                <p><b><?php echo $sum_like;?></b></p>
                @else
                <p><b>0</b></p>
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fas fa-upload"></i>
            <div class="info">
              <h4>อัพโหลด</h4>
              @if(isset($sum_upload)?$sum_upload:'')
                <p><b><?php echo $sum_upload;?></b></p>
                @else
                <p><b>0</b></p>
              @endif
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fas fa-atlas"></i>
            <div class="info">
              <h4>ผลงาน</h4>
              @if(isset($sum_project)?$sum_project:'')
                <p><b><?php echo $sum_project;?></b></p>
                @else
                <p><b>0</b></p>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">คำขอ</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">เเจ้งปัญหา</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
    </main>
@stop
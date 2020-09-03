
@extends('layouts.mainhomeBD')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile1">
                    <div class="tile-body">
                        <div class="texthe1 font-Athiti">มาใหม่</div>
                            <a href="Newarrival"><button type="button" class="btnsum btn btn-default" style="color: #D9A327;background-color: #F8F8FF;" >
                            ดูทั้งหมด (<?php if($sum_project){echo $sum_project;}?>)</button></a>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="table-responsive">
                                            @foreach($itemlp0 as $items)
                                                <?php $status_p0 = $items->status_p;?>
                                                @foreach($itemlp1 as $items)
                                                    <?php $status_p1 = $items->status_p;?>
                                                    @foreach($itemlp2 as $items)
                                                        <?php $status_p2 = $items->status_p;?>
                                                        @foreach($itemlp3 as $items)
                                                            <?php $status_p3 = $items->status_p;?>
                                                                <!-- เงื่อนไข เช็คว่า project ถูกต้อง -->
                                                                @if($status_p0=='0' & $status_p1=='0' & $status_p2=='0' & $status_p3=='0')
                                                                    @foreach($itemlp4 as $items)
                                                                        <?php $status_p4 = $items->status_p;?>
                                                                            @foreach($itemlp4 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                    @endforeach
                                                                    @foreach($itemlp5 as $items)
                                                                        <?php $status_p5 = $items->status_p;?>
                                                                            @foreach($itemlp5 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                    @endforeach
                                                                    @foreach($itemlp6 as $items)
                                                                        <?php $status_p6 = $items->status_p;?>
                                                                            @foreach($itemlp6 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                    @endforeach
                                                                    @foreach($itemlp7 as $items)
                                                                        <?php $status_p7 = $items->status_p;?>
                                                                            @foreach($itemlp7 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                    @endforeach

                                                                        @elseif($status_p0=='0' & $status_p1=='0' & $status_p2=='0' & $status_p3=='1')
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                            @foreach($itemlp5 as $items)
                                                                                <?php $status_p5 = $items->status_p;?>
                                                                                    @foreach($itemlp5 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                            @foreach($itemlp6 as $items)
                                                                                <?php $status_p6 = $items->status_p;?>
                                                                                    @foreach($itemlp6 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                        @elseif($status_p0=='0' & $status_p1=='0' & $status_p2=='1' & $status_p3=='1')
                                                                            @foreach($itemlp2 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                            @foreach($itemlp5 as $items)
                                                                                <?php $status_p5 = $items->status_p;?>
                                                                                    @foreach($itemlp5 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach

                                                                        @elseif($status_p0=='0' & $status_p1=='1' & $status_p2=='1' & $status_p3=='1')
                                                                            @foreach($itemlp1 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp2 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach

                                                                        @elseif($status_p0=='1' & $status_p1=='1' & $status_p2=='1' & $status_p3=='1')
                                                                            @foreach($itemlp0 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp1 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp2 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                        @elseif($status_p0=='1' & $status_p1=='0' & $status_p2=='0' & $status_p3=='1')
                                                                            @foreach($itemlp0 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                            @foreach($itemlp5 as $items)
                                                                                <?php $status_p5 = $items->status_p;?>
                                                                                    @foreach($itemlp5 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                    @endforeach
                                                                            @endforeach

                                                                        @elseif($status_p0=='1' & $status_p1=='0' & $status_p2=='1' & $status_p3=='1')
                                                                            @foreach($itemlp0 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp1 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                    @endforeach
                                                                            @endforeach

                                                                        @elseif($status_p0=='1' & $status_p1=='1' & $status_p2=='0' & $status_p3=='1')
                                                                            @foreach($itemlp0 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp1 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp2 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach

                                                                        @elseif($status_p0=='1' & $status_p1=='0' & $status_p2=='0' & $status_p3=='0')
                                                                            @foreach($itemlp0 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        if($count>20) {
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcut = $strcount1.'...';
                                                                                            echo $strcut;
                                                                                        }elseif($count>30){
                                                                                            $strcount = substr($str,0,-10);
                                                                                            $strcount1 = substr($strcount,0,-8);
                                                                                            $strcount2 = substr($strcount1,0,-10);
                                                                                            $strcount3 = substr($strcount2,0,-8);
                                                                                            $strcut = $strcount3.'...';
                                                                                            echo $strcut;
                                                                                        }else {
                                                                                            echo $items->project_name;
                                                                                        }  
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp4 as $items)
                                                                                <?php $status_p4 = $items->status_p;?>
                                                                                    @foreach($itemlp4 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                            @foreach($itemlp5 as $items)
                                                                                <?php $status_p5 = $items->status_p;?>
                                                                                    @foreach($itemlp6 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                            @foreach($itemlp6 as $items)
                                                                                <?php $status_p6 = $items->status_p;?>
                                                                                    @foreach($itemlp6 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                    @endforeach
                                                                            @endforeach
                                                                @endif
                                                        @endforeach
                                                    @endforeach
                                                @endforeach
                                            @endforeach

                                        </div>
                                    </div>
                                </div>   
                    </div>
                </div>
            </div>
        </div>
    

        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile2">
                    <div class="tile-body">
                    <div class="texthe1 font-Athiti">ยอดนิยม</div>    
                    <a href="Popular" ><button type="button" class="btnsum btn btn-default" style="color: #D9A327;background-color: #F8F8FF;">ดูทั้งหมด</button></a>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="table-responsive">
                                
                                    <a href="Detailproject"><div class="column" ><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="Detailproject"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="Detailproject"><div class="textimg2">ประเภท</div></a></center>
                                    </div>
                                
                                    <a href="Detailproject"><div class="column1"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="Detailproject"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="Detailproject"><div class="textimg2">ประเภท</div></a></center>
                                    </div>
                                
                                    <a href="Detailproject"><div class="column2"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="Detailproject"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="Detailproject"><div class="textimg2">ประเภท</div></a></center>
                                    </div>
                                    <a href="Detailproject"><div class="column3"><div class="columnimg"><img src="img/fromimg.png" alt="" class="fromimg"></div></a>
                                        <center><a href="Detailproject"><div class="textimg">เรื่อง</div></a></center>
                                        <center><a href="Detailproject"><div class="textimg2">ประเภท</div></a></center>
                                    </div>
                                
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile3">
                    <div class="tile-body">
                        <div class="texthe1 font-Athiti">IOT</div>
                            <a href="pageIot" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >
                            ดูทั้งหมด (<?php if($sum_type_p){echo $sum_type_p;}?>)</button></a>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="table-responsive">
                                    
                                        @foreach($itemlg0 as $genre)
                                            <?php $status_g0=$genre->status_p;?>
                                            @foreach($itemlg1 as $genre)
                                                <?php $status_g1=$genre->status_p;?>
                                                    @foreach($itemlg2 as $genre)
                                                        <?php $status_g2=$genre->status_p;?>
                                                            @foreach($itemlg3 as $genre)
                                                                <?php $status_g3=$genre->status_p;?>
                                                                    @if($status_g0=='0' & $status_g1=='0' & $status_g2=='0' & $status_g3=='0')
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg5)?$itemlg5:'')
                                                                                @foreach($itemlg5 as $items)
                                                                                    <?php $status_g5 = $items->status_p;?>
                                                                                        @foreach($itemlg5 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg6)?$itemlg6:'')
                                                                                @foreach($itemlg6 as $items)
                                                                                    <?php $status_g6 = $items->status_p;?>
                                                                                        @foreach($itemlg6 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg7)?$itemlg7:'')
                                                                                @foreach($itemlg7 as $items)
                                                                                    <?php $status_g7 = $items->status_p;?>
                                                                                        @foreach($itemlg7 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif

                                                                        @elseif($status_g0=='0' & $status_g1=='0' & $status_g2=='0' & $status_g3=='1')
                                                                            @if(isset($itemlg3)?$itemlg3:'')
                                                                                @foreach($itemlg3 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg5)?$itemlg5:'')
                                                                                @foreach($itemlg5 as $items)
                                                                                    <?php $status_g5 = $items->status_p;?>
                                                                                        @foreach($itemlg5 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg6)?$itemlg6:'')
                                                                                @foreach($itemlg6 as $items)
                                                                                    <?php $status_g6 = $items->status_p;?>
                                                                                        @foreach($itemlg6 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                        @elseif($status_g0=='0' & $status_g1=='0' & $status_g2=='1' & $status_g3=='1')
                                                                            @if(isset($itemlg2)?$itemlg2:'')
                                                                                @foreach($itemlg2 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg3)?$itemlg3:'')
                                                                                @foreach($itemlg3 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg5)?$itemlg5:'')
                                                                                @foreach($itemlg5 as $items)
                                                                                    <?php $status_g5 = $items->status_p;?>
                                                                                        @foreach($itemlg5 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                        @elseif($status_g0=='1' & $status_g1=='1' & $status_g2=='1' & $status_g3=='0')
                                                                            @if(isset($itemlg0)?$itemlg0:'')
                                                                                @foreach($itemlg0 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg1)?$itemlg1:'')
                                                                                @foreach($itemlg1 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg2)?$itemlg2:'')
                                                                                @foreach($itemlg2 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg5)?$itemlg5:'')
                                                                                @foreach($itemlg5 as $items)
                                                                                    <?php $status_g5 = $items->status_p;?>
                                                                                        @foreach($itemlg5 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif

                                                                        @elseif($status_g0=='1' & $status_g1=='1' & $status_g2=='1' & $status_g3=='1')
                                                                            @if(isset($itemlg0)?$itemlg0:'')
                                                                                @foreach($itemlg0 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg1)?$itemlg1:'')
                                                                                @foreach($itemlg1 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg2)?$itemlg2:'')
                                                                                @foreach($itemlg2 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg3)?$itemlg3:'')
                                                                                @foreach($itemlg3 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif

                                                                        @elseif($status_g0=='1' & $status_g1=='0' & $status_g2=='0' & $status_g3=='1')
                                                                            @if(isset($itemlg0)?$itemlg0:'')
                                                                                @foreach($itemlg0 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg3)?$itemlg3:'')
                                                                                @foreach($itemlg3 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg5)?$itemlg5:'')
                                                                                @foreach($itemlg5 as $items)
                                                                                    <?php $status_g5 = $items->status_p;?>
                                                                                        @foreach($itemlg5 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif

                                                                        @elseif($status_g0=='1' & $status_g1=='0' & $status_g2=='1' & $status_g3=='1')
                                                                            @if(isset($itemlg0)?$itemlg0:'')
                                    
                                                                                @foreach($itemlg0 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg1)?$itemlg1:'')
                                                                                @foreach($itemlg1 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg3)?$itemlg3:'')
                                                                                @foreach($itemlg3 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif

                                                                        @elseif($status_g0=='1' & $status_g1=='1' & $status_g2=='0' & $status_g3=='1')
                                                                            @if(isset($itemlg0)?$itemlg0:'')
                                                                                @foreach($itemlg0 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg1)?$itemlg1:'')
                                                                                @foreach($itemlg1 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg2)?$itemlg2:'')
                                                                                @foreach($itemlg2 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif

                                                                        @elseif($status_g0=='1' & $status_g1=='0' & $status_g2=='0' & $status_g3=='0')
                                                                            @if(isset($itemlg0)?$itemlg0:'')
                                                                                @foreach($itemlg0 as $items)
                                                                                    <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                        <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                        <?php 
                                                                                            $str = $items->project_name;
                                                                                            $count = utf8_strlen("$str");
                                                                                            if($count>20) {
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcut = $strcount1.'...';
                                                                                                echo $strcut;
                                                                                            }elseif($count>30){
                                                                                                $strcount = substr($str,0,-10);
                                                                                                $strcount1 = substr($strcount,0,-8);
                                                                                                $strcount2 = substr($strcount1,0,-10);
                                                                                                $strcount3 = substr($strcount2,0,-8);
                                                                                                $strcut = $strcount3.'...';
                                                                                                echo $strcut;
                                                                                            }else {
                                                                                                echo $items->project_name;
                                                                                            }  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    </div>
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg4)?$itemlg4:'')
                                                                                @foreach($itemlg4 as $items)
                                                                                    <?php $status_g4 = $items->status_p;?>
                                                                                        @foreach($itemlg4 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg5)?$itemlg5:'')
                                                                                @foreach($itemlg5 as $items)
                                                                                    <?php $status_g5 = $items->status_p;?>
                                                                                        @foreach($itemlg6 as $items)
                                                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                            <?php 
                                                                                                $str = $items->project_name;
                                                                                                $count = utf8_strlen("$str");
                                                                                                if($count>20) {
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcut = $strcount1.'...';
                                                                                                    echo $strcut;
                                                                                                }elseif($count>30){
                                                                                                    $strcount = substr($str,0,-10);
                                                                                                    $strcount1 = substr($strcount,0,-8);
                                                                                                    $strcount2 = substr($strcount1,0,-10);
                                                                                                    $strcount3 = substr($strcount2,0,-8);
                                                                                                    $strcut = $strcount3.'...';
                                                                                                    echo $strcut;
                                                                                                }else {
                                                                                                    echo $items->project_name;
                                                                                                }  
                                                                                            ?></div></a></center>
                                                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                            @if(isset($itemlg6)?$itemlg6:'')
                                                                                @foreach($itemlg6 as $items)
                                                                                    <?php $status_g6 = $items->status_p;?>
                                                                                        @foreach($itemlg6 as $items)
                                                                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                                <?php 
                                                                                                    $str = $items->project_name;
                                                                                                    $count = utf8_strlen("$str");
                                                                                                    if($count>20) {
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcut = $strcount1.'...';
                                                                                                        echo $strcut;
                                                                                                    }elseif($count>30){
                                                                                                        $strcount = substr($str,0,-10);
                                                                                                        $strcount1 = substr($strcount,0,-8);
                                                                                                        $strcount2 = substr($strcount1,0,-10);
                                                                                                        $strcount3 = substr($strcount2,0,-8);
                                                                                                        $strcut = $strcount3.'...';
                                                                                                        echo $strcut;
                                                                                                    }else {
                                                                                                        echo $items->project_name;
                                                                                                    }  
                                                                                                ?></div></a></center>
                                                                                                <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                            </div>
                                                                                        @endforeach
                                                                                @endforeach
                                                                                @else
                                                                                    <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                                                        <center><a href="#"><div class="textimg">ไม่มีข้อมูล</div></a></center>
                                                                                        <center><a href="#"><div class="textimg2">ไม่มีข้อมูล</div></a></center>
                                                                                    </div>
                                                                            @endif
                                                                @endif
                                                            @endforeach
                                                    @endforeach
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        function utf8_strlen($str){ 
            $c = strlen($str);
            $l = 0;
            for ($i = 0; $i < $c; ++$i)
            {
                if ((ord($str[$i]) & 0xC0) != 0x80)
                {
                    ++$l;
                }
            }
            return $l;
        } 
    ?>
@stop
        


@extends('layouts.mainhomeBD')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)
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
                                                                                        create_str($count,$str,$items)
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                        create_str($count,$str,$items)
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                   <center>
                                                                                    @if(isset($svgrate0)?$svgrate0:'')
                                                                                        @if($svgrate0 < 2 & $svgrate0 > 0)
                                                                                       <div class="rating">
                                                                                       <span style="font-size: 48px; color:#D9A327;">
                                                                                            <i class="fas fa-star " ></i>
                                                                                       </span>
                                                                                       <?php check_rating(floor($svgrate0)); ?> @if(isset($svgrate0)?$svgrate0:'')<span class="">(<?php echo round($svgrate0,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate0 >= 2 & $svgrate0 < 3)
                                                                                        <div class="rating">
                                                                                            <?php check_rating(floor($svgrate0)); ?> @if(isset($svgrate0)?$svgrate0:'')<span class="">(<?php echo round($svgrate0,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate0 >= 3 & $svgrate0 < 4)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate0)); ?> @if(isset($svgrate0)?$svgrate0:'')<span class="">(<?php echo round($svgrate0,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate0 >= 4 & $svgrate0 < 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate0)); ?> @if(isset($svgrate0)?$svgrate0:'')<span class="">(<?php echo round($svgrate0,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate0 >= 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate0)); ?> @if(isset($svgrate0)?$svgrate0:'')<span class="">(<?php echo round($svgrate0,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate0)); ?> @if(isset($svgrate0)?$svgrate0:'')<span class="">(<?php echo round($svgrate0,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @endif
                                                                                    @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                        </div>
                                                                                    @endif
                                                                                   </center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp1 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        create_str($count,$str,$items)
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    <center>
                                                                                    @if(isset($svgrate1)?$svgrate1:'')
                                                                                        @if($svgrate1 < 2 & $svgrate1 > 0)
                                                                                       <div class="rating">
                                                                                       <?php check_rating(floor($svgrate1)); ?> @if(isset($svgrate1)?$svgrate1:'')<span class="">(<?php echo round($svgrate1,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate1 >= 2 & $svgrate1 < 3)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate1)); ?> @if(isset($svgrate1)?$svgrate1:'')<span class="">(<?php echo round($svgrate1,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate1 >= 3 & $svgrate1 < 4)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate1)); ?> @if(isset($svgrate1)?$svgrate0:'')<span class="">(<?php echo round($svgrate1,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate1 >= 4 & $svgrate1 < 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate1)); ?> @if(isset($svgrate0)?$svgrate1:'')<span class="">(<?php echo round($svgrate1,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate1 >= 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate1)); ?> @if(isset($svgrate1)?$svgrate1:'')<span class="">(<?php echo round($svgrate1,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate1)); ?> @if(isset($svgrate0)?$svgrate1:'')<span class="">(<?php echo round($svgrate1,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @endif
                                                                                    @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                        </div>
                                                                                    @endif
                                                                                   </center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp2 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        create_str($count,$str,$items)
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    <center>
                                                                                    @if(isset($svgrate2)?$svgrate2:'')
                                                                                        @if($svgrate2 < 2 & $svgrate2 > 0)
                                                                                       <div class="rating">
                                                                                       <?php check_rating(floor($svgrate2)); ?>@if(isset($svgrate2)?$svgrate2:'')<span class="">(<?php echo round($svgrate2,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate2 >= 2 & $svgrate2 < 3)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate2)); ?> @if(isset($svgrate2)?$svgrate2:'')<span class="">(<?php echo round($svgrate2,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate2 >= 3 & $svgrate2 < 4)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate2)); ?> @if(isset($svgrate2)?$svgrate0:'')<span class="">(<?php echo round($svgrate2,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate2 >= 4 & $svgrate2 < 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate2)); ?> @if(isset($svgrate0)?$svgrate2:'')<span class="">(<?php echo round($svgrate2,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate2 >= 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate2)); ?> @if(isset($svgrate2)?$svgrate2:'')<span class="">(<?php echo round($svgrate2,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate2)); ?>@if(isset($svgrate2)?$svgrate2:'')<span class="">(<?php echo round($svgrate2,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @endif
                                                                                    @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                        </div>
                                                                                    @endif
                                                                                   </center>
                                                                                </div>
                                                                            @endforeach
                                                                            @foreach($itemlp3 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        create_str($count,$str,$items)
                                                                                    ?></div></a></center>
                                                                                    <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                    <center>
                                                                                    @if(isset($svgrate3)?$svgrate3:'')
                                                                                        @if($svgrate3 < 2 & $svgrate3 > 0)
                                                                                       <div class="rating">
                                                                                       <?php check_rating(floor($svgrate3)); ?> @if(isset($svgrate3)?$svgrate3:'')<span class="">(<?php echo round($svgrate3,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate3 >= 2 & $svgrate3 < 3)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate3)); ?> @if(isset($svgrate3)?$svgrate3:'')<span class="">(<?php echo round($svgrate3,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate3 >= 3 & $svgrate3 < 4)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate3)); ?> @if(isset($svgrate3)?$svgrate0:'')<span class="">(<?php echo round($svgrate3,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate3 >= 4 & $svgrate3 < 5)
                                                                                        <div class="rating">
                                                                                            <?php check_rating(floor($svgrate3)); ?>@if(isset($svgrate3)?$svgrate3:'')<span class="">(<?php echo round($svgrate3,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @elseif($svgrate3 >= 5)
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate3)); ?> @if(isset($svgrate3)?$svgrate3:'')<span class="">(<?php echo round($svgrate3,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor($svgrate3)); ?> @if(isset($svgrate3)?$svgrate3:'')<span class="">(<?php echo round($svgrate3,$precision=2); ?>)</span>@endif
                                                                                        </div>
                                                                                        @endif
                                                                                    @else
                                                                                        <div class="rating">
                                                                                        <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                        </div>
                                                                                    @endif
                                                                                   </center>
                                                                                </div>
                                                                            @endforeach
                                                                        @elseif($status_p0=='1' & $status_p1=='0' & $status_p2=='0' & $status_p3=='1')
                                                                            @foreach($itemlp0 as $items)
                                                                                <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                                                    <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                                                    <?php 
                                                                                        $str = $items->project_name;
                                                                                        $count = utf8_strlen("$str");
                                                                                        create_str($count,$str,$items)
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
                                                                                        create_str($count,$str,$items)
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                        create_str($count,$str,$items)
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
                                                                                        create_str($count,$str,$items)
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
                                                                                        create_str($count,$str,$items)
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                        create_str($count,$str,$items)
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                        create_str($count,$str,$items)  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                    <a href="Popular" ><button type="button" class="btnsum btn btn-default" style="color: #D9A327;background-color: #F8F8FF;">ดูทั้งหมด(<?php if($sum_pop_p){echo $sum_pop_p;}?>)</button></a>
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
                                                    @foreach($itempop0 as $items)
                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                            <?php 
                                                                $str = $items->project_name;
                                                                $count = utf8_strlen("$str");
                                                                create_str($count,$str,$items)  
                                                            ?></div></a></center>
                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                            <center>
                                                            @if(isset($avgpop0)?$avgpop0:'')
                                                                @if($avgpop0 < 2 & $avgpop0 > 0)
                                                                <div class="rating">
                                                                    <?php check_rating(floor($avgpop0)); ?> @if(isset($avgpop0)?$avgpop0:'')<span class="">(<?php echo round($avgpop0,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop0 >= 2 & $avgpop0 < 3)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop0)); ?> @if(isset($avgpop0)?$avgpop0:'')<span class="">(<?php echo round($avgpop0,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop0 >= 3 & $avgpop0 < 4)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop0)); ?> @if(isset($avgpop0)?$svgrate0:'')<span class="">(<?php echo round($avgpop0,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop0 >= 4 & $avgpop0 < 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop0)); ?> @if(isset($svgrate0)?$avgpop0:'')<span class="">(<?php echo round($avgpop0,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop0 >= 5)
                                                                <div class="rating">
                                                                    <?php check_rating(floor($avgpop0)); ?> @if(isset($avgpop0)?$avgpop0:'')<span class="">(<?php echo round($avgpop0,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop0)); ?> @if(isset($svgrate0)?$avgpop0:'')<span class="">(<?php echo round($avgpop0,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @endif
                                                            @else
                                                                <div class="rating">
                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                </div>
                                                            @endif
                                                            </center>
                                                        </div>
                                                    @endforeach
                                                    @foreach($itempop1 as $items)
                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                            <?php 
                                                                $str = $items->project_name;
                                                                $count = utf8_strlen("$str");
                                                                create_str($count,$str,$items)  
                                                            ?></div></a></center>
                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                            <center>
                                                            @if(isset($avgpop1)?$avgpop1:'')
                                                                @if($avgpop1 < 2 & $avgpop1 > 0)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop1)); ?> @if(isset($avgpop1)?$avgpop1:'')<span class="">(<?php echo round($avgpop1,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop1 >= 2 & $avgpop1 < 3)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop1)); ?> @if(isset($avgpop1)?$avgpop1:'')<span class="">(<?php echo round($avgpop1,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop1 >= 3 & $avgpop1 < 4)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop1)); ?> @if(isset($avgpop1)?$svgrate0:'')<span class="">(<?php echo round($avgpop1,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop1 >= 4 & $avgpop1 < 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop1)); ?> @if(isset($svgrate0)?$avgpop1:'')<span class="">(<?php echo round($avgpop1,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop1 >= 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop1)); ?> @if(isset($avgpop1)?$avgpop1:'')<span class="">(<?php echo round($avgpop1,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop1)); ?> @if(isset($svgrate0)?$avgpop1:'')<span class="">(<?php echo round($avgpop1,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @endif
                                                            @else
                                                                <div class="rating">
                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                </div>
                                                            @endif
                                                            </center>
                                                        </div>
                                                    @endforeach
                                                    @foreach($itempop2 as $items)
                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                            <?php 
                                                                $str = $items->project_name;
                                                                $count = utf8_strlen("$str");
                                                                create_str($count,$str,$items)  
                                                            ?></div></a></center>
                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                            <center>
                                                            @if(isset($avgpop2)?$avgpop2:'')
                                                                @if($avgpop2 < 2 & $avgpop2 > 0)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop2)); ?> @if(isset($avgpop2)?$avgpop2:'')<span class="">(<?php echo round($avgpop2,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop2 >= 2 & $avgpop2 < 3)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop2)); ?> @if(isset($avgpop2)?$avgpop2:'')<span class="">(<?php echo round($avgpop2,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop2 >= 3 & $avgpop2 < 4)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop2)); ?> @if(isset($avgpop2)?$svgrate0:'')<span class="">(<?php echo round($avgpop2,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop2 >= 4 & $avgpop2 < 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop2)); ?> @if(isset($svgrate0)?$avgpop2:'')<span class="">(<?php echo round($avgpop2,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop2 >= 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop2)); ?> @if(isset($avgpop2)?$avgpop2:'')<span class="">(<?php echo round($avgpop2,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop2)); ?> @if(isset($svgrate0)?$avgpop2:'')<span class="">(<?php echo round($avgpop2,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @endif
                                                            @else
                                                                <div class="rating">
                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                </div>
                                                            @endif
                                                            </center>
                                                        </div>
                                                    @endforeach
                                                    @foreach($itempop3 as $items)
                                                        <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                            <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg">
                                                            <?php 
                                                                $str = $items->project_name;
                                                                $count = utf8_strlen("$str");
                                                                create_str($count,$str,$items)  
                                                            ?></div></a></center>
                                                            <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                            <center>
                                                            @if(isset($avgpop3)?$avgpop3:'')
                                                                @if($avgpop3 < 2 & $avgpop3 > 0)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop3)); ?> @if(isset($avgpop3)?$avgpop3:'')<span class="">(<?php echo round($avgpop3,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop3 >= 2 & $avgpop3 < 3)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop3)); ?> @if(isset($avgpop3)?$avgpop3:'')<span class="">(<?php echo round($avgpop3,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop3 >= 3 & $avgpop3 < 4)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop3)); ?> @if(isset($avgpop3)?$svgrate0:'')<span class="">(<?php echo round($avgpop3,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop3 >= 4 & $avgpop3 < 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop3)); ?> @if(isset($svgrate0)?$avgpop3:'')<span class="">(<?php echo round($avgpop3,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @elseif($avgpop3 >= 5)
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop3)); ?> @if(isset($avgpop3)?$avgpop3:'')<span class="">(<?php echo round($avgpop3,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @else
                                                                <div class="rating">
                                                                <?php check_rating(floor($avgpop3)); ?> @if(isset($svgrate0)?$avgpop3:'')<span class="">(<?php echo round($avgpop3,$precision=2); ?>)</span>@endif
                                                                </div>
                                                                @endif
                                                            @else
                                                                <div class="rating">
                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                </div>
                                                            @endif
                                                            </center>
                                                        </div>
                                                    @endforeach
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
                                                                                                    create_str($count,$str,$items);
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
                                                                                                    create_str($count,$str,$items);
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
                                                                                                    create_str($count,$str,$items);
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
                                                                                                    create_str($count,$str,$items);
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);
                                                                                            
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        <center>
                                                                                            @if(isset($svgrateg0)?$svgrateg0:'')
                                                                                                @if($svgrateg0 < 2 & $svgrateg0 > 0)
                                                                                            <div class="rating">
                                                                                            <?php check_rating(floor($svgrateg0)); ?> @if(isset($svgrateg0)?$svgrateg0:'')<span class="">(<?php echo round($svgrateg0,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg0 >= 2 & $svgrateg0 < 3)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg0)); ?> @if(isset($svgrateg0)?$svgrateg0:'')<span class="">(<?php echo round($svgrateg0,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg0 >= 3 & $svgrateg0 < 4)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg0)); ?> @if(isset($svgrateg0)?$svgrateg0:'')<span class="">(<?php echo round($svgrateg0,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg0 >= 4 & $svgrateg0 < 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg0)); ?> @if(isset($svgrateg0)?$svgrateg0:'')<span class="">(<?php echo round($svgrateg0,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg0 >= 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg0)); ?> @if(isset($svgrateg0)?$svgrateg0:'')<span class="">(<?php echo round($svgrateg0,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg0)); ?>  @if(isset($svgrateg0)?$svgrateg0:'')<span class="">(<?php echo round($svgrateg0,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @endif
                                                                                            @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor(0)); ?>  <span class="">(0)</span>
                                                                                                </div>
                                                                                            @endif
                                                                                        </center>
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
                                                                                            create_str($count,$str,$items);
                                                                                            
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        <center>
                                                                                            @if(isset($svgrateg1)?$svgrateg1:'')
                                                                                                @if($svgrateg1 < 2 & $svgrateg1 > 0)
                                                                                            <div class="rating">
                                                                                            <?php check_rating(floor($svgrateg1)); ?>  @if(isset($svgrateg1)?$svgrateg1:'')<span class="">(<?php echo round($svgrateg1,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg1 >= 2 & $svgrateg1 < 3)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg1)); ?>  @if(isset($svgrateg1)?$svgrateg1:'')<span class="">(<?php echo round($svgrateg1,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg1 >= 3 & $svgrateg1 < 4)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg1)); ?>  @if(isset($svgrateg1)?$svgrateg1:'')<span class="">(<?php echo round($svgrateg1,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg1 >= 4 & $svgrateg1 < 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg1)); ?>  @if(isset($svgrateg1)?$svgrateg1:'')<span class="">(<?php echo round($svgrateg1,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg1 >= 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg1)); ?>  @if(isset($svgrateg1)?$svgrateg1:'')<span class="">(<?php echo round($svgrateg1,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg1)); ?> @if(isset($svgrateg1)?$svgrateg1:'')<span class="">(<?php echo round($svgrateg1,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @endif
                                                                                            @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                                </div>
                                                                                            @endif
                                                                                        </center>
                                                                                        
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
                                                                                            create_str($count,$str,$items);
                                                                                            
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        <center>
                                                                                            @if(isset($svgrateg2)?$svgrateg2:'')
                                                                                                @if($svgrateg2 < 2 & $svgrateg2 > 0)
                                                                                            <div class="rating">
                                                                                            <?php check_rating(floor($svgrateg2)); ?> @if(isset($svgrateg2)?$svgrateg2:'')<span class="">(<?php echo round($svgrateg2,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg2 >= 2 & $svgrateg2 < 3)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg2)); ?> @if(isset($svgrateg2)?$svgrateg2:'')<span class="">(<?php echo round($svgrateg2,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg2 >= 3 & $svgrateg2 < 4)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg2)); ?> @if(isset($svgrateg2)?$svgrateg2:'')<span class="">(<?php echo round($svgrateg2,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg2 >= 4 & $svgrateg2 < 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg2)); ?> @if(isset($svgrateg2)?$svgrateg2:'')<span class="">(<?php echo round($svgrateg2,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg2 >= 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg2)); ?> @if(isset($svgrateg2)?$svgrateg2:'')<span class="">(<?php echo round($svgrateg2,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg2)); ?> @if(isset($svgrateg2)?$svgrateg2:'')<span class="">(<?php echo round($svgrateg2,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @endif
                                                                                            @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                                </div>
                                                                                            @endif
                                                                                        </center>
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
                                                                                            create_str($count,$str,$items);  
                                                                                        ?></div></a></center>
                                                                                        <center><a href="itemtypeBD/{{$items->type_id}}"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                                                                        <center>
                                                                                            @if(isset($svgrateg3)?$svgrateg3:'')
                                                                                                @if($svgrateg3 < 2 & $svgrateg3 > 0)
                                                                                            <div class="rating">
                                                                                            <?php check_rating(floor($svgrateg3)); ?> @if(isset($svgrateg3)?$svgrateg3:'')<span class="">(<?php echo round($svgrateg3,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg3 >= 2 & $svgrateg3 < 3)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg3)); ?> @if(isset($svgrateg3)?$svgrateg3:'')<span class="">(<?php echo round($svgrateg3,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg3 >= 3 & $svgrateg3 < 4)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg3)); ?> @if(isset($svgrateg3)?$svgrateg3:'')<span class="">(<?php echo round($svgrateg3,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg3 >= 4 & $svgrateg3 < 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg3)); ?> @if(isset($svgrateg3)?$svgrateg3:'')<span class="">(<?php echo round($svgrateg3,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @elseif($svgrateg3 >= 5)
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg3)); ?> @if(isset($svgrateg3)?$svgrateg3:'')<span class="">(<?php echo round($svgrateg3,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor($svgrateg3)); ?> @if(isset($svgrateg3)?$svgrateg3:'')<span class="">(<?php echo round($svgrateg3,$precision=2); ?>)</span>@endif
                                                                                                </div>
                                                                                                @endif
                                                                                            @else
                                                                                                <div class="rating">
                                                                                                <?php check_rating(floor(0)); ?> <span class="">(0)</span>
                                                                                                </div>
                                                                                            @endif
                                                                                        </center>
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                            create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);  
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
                                                                                                create_str($count,$str,$items);  
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
                                                                                                    create_str($count,$str,$items);
                                                                                                     
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
@endsection
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

        function create_str($count,$str,$items) {
            if($count>20) {
                $strcount = substr($str,0,-10);
                $strcount1 = substr($strcount,0,-8);
                $strcut = $strcount1."...";
                echo $strcut;
            }elseif($count>30){
                $strcount = substr($str,0,-10);
                $strcount1 = substr($strcount,0,-8);
                $strcount2 = substr($strcount1,0,-10);
                $strcount3 = substr($strcount2,0,-8);
                $strcut = $strcount3."...";
                echo $strcut;
            }else {
                echo $items->project_name;
            }  
        }

        function check_rating($rating) {
            for($i=0;$i<$rating;$i++){
                echo '<i class="fas fa-star" style="color: #ffb712;"></i>';
            }
            for($i=0;$i < 5-$rating;$i++) {
                echo '<i class="far fa-star" style="color: #ffb712;"></i>';
            }
            
}
    ?>

        

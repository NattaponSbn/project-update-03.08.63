@extends('layouts.mainhomeBD')

@section('content')
        <!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile1">
                    <div class="tile-body">
                    <div class="texthe1">มาใหม่</div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="table-responsive">
                            @foreach($datas as $data_p)
                                <a href="itemdetaliBD/{{$data_p->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $data_p->logo;?>" alt="" class="fromimg"></div></a>
                                    <center><a href="itemdetaliBD/{{$data_p->project_id}}"><div class="textimg"><?php echo $data_p->project_name;?></div></a></center>
                                    <center><a href="itemdetaliBD"><div class="textimg2"><?php echo $data_p->type_name;?></div></a></center>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div
    ></div>
@stop
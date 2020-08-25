
@extends('layouts.mainhomeBD')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
        <!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile1">
                    <div class="tile-body">
                        <div class="texthe1 font-Athiti">มาใหม่</div>
                            <a href="Newarrival"><button type="button" class="btnsum btn btn-default" style="color: #D9A327;background-color: #F8F8FF;border:" >ดูทั้งหมด</button></a>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="table-responsive">
                                        @foreach($itemlp0 as $items)
                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg"><?php echo $items->project_name;?></div></a></center>
                                                <center><a href="itemdetaliBD"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                            </div>
                                        @endforeach
                                        @foreach($itemlp1 as $items)
                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg"><?php echo $items->project_name;?></div></a></center>
                                                <center><a href="itemdetaliBD"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                            </div>
                                        @endforeach
                                        @foreach($itemlp2 as $items)
                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg"><?php echo $items->project_name;?></div></a></center>
                                                <center><a href="itemdetaliBD"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                            </div>
                                        @endforeach
                                        @foreach($itemlp3 as $items)
                                            <a href="itemdetaliBD/{{$items->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $items->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$items->project_id}}"><div class="textimg"><?php echo $items->project_name;?></div></a></center>
                                                <center><a href="itemdetaliBD"><div class="textimg2"><?php echo $items->type_name;?></div></a></center>
                                            </div>
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
                            <a href="pageIot" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                            
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="table-responsive">
                                    @if(isset($itemlg0)?$itemlg0:'')
                                        @foreach($itemlg0 as $genre)
                                            <a href="itemdetaliBD/{{$genre->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $genre->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$genre->project_id}}"><div class="textimg"><?php echo $genre->project_name ?></div></a></center>
                                                <center><a href="Detailproject"><div class="textimg2"><?php echo $genre->type_name ?></div></a></center>
                                            </div>
                                        @endforeach

                                        @else
                                            <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                <center><a href="#"><div class="textimg">เรื่อง</div></a></center>
                                                <center><a href="#"><div class="textimg2">ประเภท</div></a></center>
                                            </div>
                                    @endif

                                    @if(isset($itemlg1)?$itemlg1:'')
                                        @foreach($itemlg1 as $genre)
                                            <a href="itemdetaliBD/{{$genre->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $genre->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$genre->project_id}}"><div class="textimg"><?php echo $genre->project_name ?></div></a></center>
                                                <center><a href="Detailproject"><div class="textimg2"><?php echo $genre->type_name ?></div></a></center>
                                            </div>
                                        @endforeach

                                        @else
                                            <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                <center><a href="#"><div class="textimg">เรื่อง</div></a></center>
                                                <center><a href="#"><div class="textimg2">ประเภท</div></a></center>
                                            </div>
                                    @endif

                                    @if(isset($itemlg2)?$itemlg2:'')
                                        @foreach($itemlg2 as $genre)
                                            <a href="itemdetaliBD/{{$genre->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $genre->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$genre->project_id}}"><div class="textimg"><?php echo $genre->project_name ?></div></a></center>
                                                <center><a href="Detailproject"><div class="textimg2"><?php echo $genre->type_name ?></div></a></center>
                                            </div>
                                        @endforeach

                                        @else
                                            <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                <center><a href="#"><div class="textimg">เรื่อง</div></a></center>
                                                <center><a href="#"><div class="textimg2">ประเภท</div></a></center>
                                            </div>
                                    @endif

                                    @if(isset($itemlg3)?$itemlg3:'')
                                        @foreach($itemlg3 as $genre)
                                            <a href="itemdetaliBD/{{$genre->project_id}}"><div class="column" ><div class="columnimg"><img src="project\img_logo\<?php echo $genre->logo;?>" alt="" class="fromimg"></div></a>
                                                <center><a href="itemdetaliBD/{{$genre->project_id}}"><div class="textimg"><?php echo $genre->project_name ?></div></a></center>
                                                <center><a href="Detailproject"><div class="textimg2"><?php echo $genre->type_name ?></div></a></center>
                                            </div>
                                        @endforeach

                                        @else
                                            <a href="#"><div class="column" ><div class="columnimg"><img src="img/fromimg.png"alt="" class="fromimg"></div></a>
                                                <center><a href="#"><div class="textimg">เรื่อง</div></a></center>
                                                <center><a href="#"><div class="textimg2">ประเภท</div></a></center>
                                            </div>
                                    @endif
                                    </div>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

        
@stop
        

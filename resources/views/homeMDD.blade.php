@extends('layouts.mainhomeMDD')
@section('content')
<!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <div class="texthe"><i class="fas fa-tags"></i> <b>ติดตาม</b></div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >
                    ดูทั้งหมด (<?php if($sum_follow){echo $sum_follow;}?>)</button></a>
                        <div class="table-responsive">
                        @foreach($item as $items)
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD/{{$items->project_m_id}}"><div class="textMDD-h" ><b><?php echo $items->project_m_name;?></b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b> <?php echo $items->des_m_project?></div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> <?php echo $items->name?></div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> <?php echo $items->keyword_m_project?></div>
                                <div class="textMDD" ><b>ประเภท :</b> <?php echo $items->type_name?></div>
                            </div>
                        @endforeach
                        <br>
                        @foreach($itemA as $items)
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD/{{$items->project_m_id}}"><div class="textMDD-h" ><b><?php echo $items->project_m_name;?></b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b>
                                <?php 
                                    $str = $items->des_m_project;
                                    $chk_count = count_chars($str);
                                    $count = count($chk_count);
                                    if($count>30) {
                                        $strcount = substr($str,0,-10);
                                        $strcount1 = substr($strcount,0,-10);
                                        $strcount2 = substr($strcount1,0,-10);
                                        $strcount3 = substr($strcount2,0,-10);
                                        $strcount4 = substr($strcount3,0,-10);
                                        $strcut = $strcount4.'...';
                                        echo $strcut;
                                    }else {
                                        echo $items->des_m_project;
                                    }  
                                ?></div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> <?php echo $items->owner_m_name?></div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> <?php echo $items->keyword_m_project?></div>
                                <div class="textMDD" ><b>ประเภท :</b> <?php echo $items->type_name?></div>
                            </div>
                        @endforeach
                        </div><hr>
                    </div>
                    <div class="tile-body">
                    <div class="texthe"><i class="fas fa-heartbeat"></i> <b>เพื่อสุขภาพ</b></div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD"><div class="textMDD-h" ><b>การสร้างตัวละครซูเปอร์ฮีโร่โดยมีแรงบันดาลใจจากอาวุธในรามเกียรติ์</b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b> Knowledge for Condominium Purchasing Decision Making of Chinese in Chiang Mai Provinc</div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> ประทิน ตายอด</div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> รามเกียรติ์,ซุปเปอร์ฮีโร่,อาวุธ SP1348 / 00344</div>
                                <div class="textMDD" ><b>ประเภท :</b> วิจัย</div>
                            </div>
                        </div><hr>
                    </div>
                    <div class="texthe"><i class="fas fa-gamepad"></i> <b>เกม</b></div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD"><div class="textMDD-h" ><b>การสร้างตัวละครซูเปอร์ฮีโร่โดยมีแรงบันดาลใจจากอาวุธในรามเกียรติ์</b></div></a>
                                <div class="textMDD" ><b>คำอธิบาย :</b> Knowledge for Condominium Purchasing Decision Making of Chinese in Chiang Mai Provinc</div>
                                <div class="textMDD" ><b>ผู้สร้างผลงาน :</b> ประทิน ตายอด</div>
                                <div class="textMDD" ><b>คำสำคัญ :</b> รามเกียรติ์,ซุปเปอร์ฮีโร่,อาวุธ SP1348 / 00344</div>
                                <div class="textMDD" ><b>ประเภท :</b> วิจัย</div>
                            </div>
                        </div><hr>
                    </div>
                </div>
            </div
        ></div>
@stop
     

        
      

        

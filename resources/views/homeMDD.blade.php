@extends('layouts.mainhomeMDD')
@section('content')
<!-- app.css -->
        <div class="rowcolumn">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <div class="texthe">ติดตาม</div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                        @foreach($item as $items)
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD/{{$items->project_m_id}}"><div class="textMDD" ><?php echo $items->project_m_name?></div></a>
                                <div class="" >คำอธิบาย : <?php echo $items->des_m_project?></div>
                                <div class="" >ผู้สร้างผลงาน : <?php echo $items->name?></div>
                                <div class="" >คำสำคัญ : <?php echo $items->keyword_m_project?></div>
                                <div class="" >ประเภท : <?php echo $items->type_name?></div>
                            </div>
                        @endforeach
                        <br>
                        @foreach($item2 as $items)
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD/{{$items->project_m_id}}"><div class="textMDD" ><?php echo $items->project_m_name?></div></a>
                                <div class="" >คำอธิบาย : <?php echo $items->des_m_project?></div>
                                <div class="" >ผู้สร้างผลงาน : <?php echo $items->owner_m_name?></div>
                                <div class="" >คำสำคัญ : <?php echo $items->keyword_m_project?></div>
                                <div class="" >ประเภท : <?php echo $items->type_name?></div>
                            </div>
                        @endforeach
                        </div><hr>
                    </div>
                    <div class="tile-body">
                    <div class="texthe">เพื่อสุขภาพ</div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD"><div class="textMDD" >การสร้างตัวละครซูเปอร์ฮีโร่โดยมีแรงบันดาลใจจากอาวุธในรามเกียรติ์</div></a>
                                <div class="" >คำอธิบาย : Knowledge for Condominium Purchasing Decision Making of Chinese in Chiang Mai Provinc</div>
                                <div class="" >ผู้สร้างผลงาน : ประทิน ตายอด</div>
                                <div class="" >คำสำคัญ : รามเกียรติ์,ซุปเปอร์ฮีโร่,อาวุธ SP1348 / 00344</div>
                                <div class="" >ประเภท : วิจัย</div>
                            </div>
                        </div><hr>
                    </div>
                    <div class="texthe">เกม</div>
                    <a href="#" class="btnsum"><button type="button" class="btn btn-default" style="color: #D9A32F;background-color: white;" >ดูทั้งหมด</button></a>
                        <div class="table-responsive">
                            <div class="layoutMDD">
                                <a href="itemdetaliMDD"><div class="textMDD" >การสร้างตัวละครซูเปอร์ฮีโร่โดยมีแรงบันดาลใจจากอาวุธในรามเกียรติ์</div></a>
                                <div class="" >คำอธิบาย : Knowledge for Condominium Purchasing Decision Making of Chinese in Chiang Mai Provinc</div>
                                <div class="" >ผู้สร้างผลงาน : ประทิน ตายอด</div>
                                <div class="" >คำสำคัญ : รามเกียรติ์,ซุปเปอร์ฮีโร่,อาวุธ SP1348 / 00344</div>
                                <div class="" >ประเภท : วิจัย</div>
                            </div>
                        </div><hr>
                    </div>
                </div>
            </div
        ></div>
@stop
     

        
      

        

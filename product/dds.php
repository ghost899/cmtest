<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<style>
body{ height:auto;}
.lnb_2depth {display:inline-block !important;}
@media screen and (max-width:768px){ 
.lnb_2depth {display:none !important;}
.lnb_wrap {display:none;}
}
</style>
<article class="sub_container dds">
    <div class="inner">
        <div class="dds_wrap">
            <h3>Digital Dentistry <br class="mob">Workflow</h3>
            <div class="dds_container dds_cont01">
                <div class="num_box">
                    <span>01</span>
                    <p>Data Acquisition</p>
                    <strong></strong>
                </div>
                <div class="dds_contents">
                    <ul class="dds01_list">
                        <li>
                            <div class="item_wrap">
                                <div class="da_title">
                                    <p><strong>Clinic </strong> - CBCT</p>
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/da01.png" alt="KAVO, Ray, HDX">
                                </div>
                                <div class="da_text">
                                    KAVO, Ray, HDX
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="da_title">
                                    <p><strong>LAB </strong>- Intraoral Scanner</p>
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/da02.png" alt="i500">
                                </div>
                                <div class="da_text">
                                    i500
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="da_title">
                                    <p>Model Scanner</p>
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/da03.jpg" alt="T-Series">
                                </div>
                                <div class="da_text">
                                    T-Series
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dds_container dds_cont02">
                <div class="num_box">
                    <span>02</span>
                    <p>Diagnosis</p>
                    <strong>OnDemand3D</strong>
                </div>
                <div class="dds_contents">
                    <ul class="sbDot_list dds">
                        <li>다양한 임플란트 라이브러리를 이용한 임플란트 시뮬레이션</li>
                        <li>Air 진단 및 분석, Dicom 데이터 병합, 임플란트 술전/술후 데이터 비교</li>
                    </ul>
                    <ul class="diag_list">
                        <li>
                            <div class="item_wrap">
                                <div class="diag_title">
                                    1.OnDemand3D – 3D Ceph (랜드마크 분석)
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/diag01.jpg" alt="3D Ceph">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="diag_title">
                                    2. OnDemand3D – Fusion (술전후비교)
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/diag02.jpg" alt="Fusion">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="diag_title">
                                    3. 3D Segment - Airway analysis
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/diag03.jpg" alt="Airway analysis">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="diag_title">
                                    4. EasyRiter
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/diag04.jpg" alt="EasyRiter">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dds_container dds_cont03">
                <div class="num_box">
                    <span>03</span>
                    <p>Design &amp; Planning </p>
                    <strong>In2Guide</strong>
                </div>
                <div class="dds_contents">
                    <ul class="sbDot_list dds">
                        <li>CBCT 및 Scanner 스캐닝을 통해 획득한 3D 데이터로 수술용 가이드 및 교정 장치, 보철물 디자인 가능 </li>
                    </ul>
                    <ul class="dp_list">
                        <li>
                            <div class="item_wrap">
                                <div class="dp_title">
                                    01. Excocad Crown – prosthetics  Design
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/dp01.jpg" alt="prosthetics  Design">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="dp_title">
                                    2. Excocad  Denture - Denture Design
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/dp02.jpg" alt="Denture Design">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="dp_title">
                                    3. Maetro Set up - Clear Aligner Design
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/dp03.jpg" alt="Clear Aligner Design">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="dp_title">
                                    4. Maetro bracket – IDBS Design
                                </div>
                                <div class="img_box">
                                    <img src="../images/sub/dp04.jpg" alt="IDBS Design">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dds_container dds_cont04">
                <div class="num_box">
                    <span>04</span>
                    <p>Manufacture </p>
                </div>
                <div class="dds_contents">
                    <ul class="sbDot_list dds">
                        <li>3D Printer를 이용하여 다양한 장치 및 보철물 출력 가능<br><span>(Surgical Guide, Clear Aligner, Temporary Crown, Model, Denture, Bite tray, Splint, Wafer 등)</span> </li>
                    </ul>
                    <ul class="mf_list">
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/mf01.jpg" alt="Manufacture 1">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/mf02.jpg" alt="Manufacture 2">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dds_container dds_cont05">
                <div class="num_box">
                    <span>05</span>
                    <p>Digital Implant<br>Surgery</p>
                </div>
                <div class="dds_contents">
                    <ul class="sbDot_list dds">
                        <li>In2Guide로 제작된 가이드와 가이드 전용 키트를 통해 보다 안전하고 정확한 환자 맞춤형 CORE1 임플란트 식립 가능</li>
                    </ul>
                    <ul class="ds_list">
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/serg1.jpg" alt="Implant Surgery">
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/serg2.jpg" alt="Implant Surgery">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dds_container dds_cont06">
                <div class="num_box">
                    <span>06</span>
                    <p>Production Service</p>
                </div>
                <div class="dds_contents">
                    <ul class="sbDot_list dds">
                        <li>다양한 보철물 제작 서비스 가능</li>
                    </ul>
                    <ul class="ds_list item6">
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/ps05.jpg" alt="Titanium Hybrid abutments">
                                </div>
                                <p>Titanium &amp; Hybrid abutments</p>
                            </div>
                        </li>

                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/ps01.jpg" alt="Full zirconia PFZ crowns">
                                </div>
                                <p>Full zirconia &amp; PFZ crowns</p>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/ps02.jpg" alt="Guide One day CAD-CAM">
                                </div>
                            </div>
                            <p>Guide &amp; One day CAD-CAM</p>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/ps06.jpg" alt="Zirconia framework">
                                </div>
                            </div>
                            <p>Zirconia framework</p>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/ps04.jpg" alt="Intermediate occlusal splint">
                                </div>
                            </div>
                            <p>Intermediate occlusal splint</p>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <div class="img_box">
                                    <img src="../images/sub/ps03.jpg" alt="Impression model Aligne">
                                </div>
                            </div>
                            <p>Impression model &amp; Aligner</p>
                        </li>



                    </ul>
                </div>
            </div>
        </div>

    </div>
</article>
<?php include_once(G5_PATH.'/tail.php'); ?>

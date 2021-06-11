<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<link rel="stylesheet" href="../css/swiper.min.css">
<script src="../js/swiper.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.sub_visual').addClass('printer')
    $('header').addClass('on')
    $('.gnb').mouseenter(function(){
        $('header').css({'background': 'rgba(255,255,255,0.85)'})
    })
    $('.gnb').mouseleave(function(){
        $('header').css({'background': 'none'})
        $('header').addClass('on')
    })
    $('.allMenu_wrap').on('click', function(){
        $('header').addClass('on')
    })
})
</script>
<style>
body{ height:auto;}
.sub_bg  {background-position: right top !important;}
.lnb_2depth {display:inline-block !important;}
.sub_visual.printer .sub_text_table_cell p {font-weight:300;}
header.allmenu {background:#fff !important;}
header.on {background:none;}
</style>
<article class="sub_container pdt150">
    <div class="inner">
        <div class="printerInfo">
            <div class="infoText">
                <strong>
                    For Digital Dentistry,<br>Ondemand 3d printer
                </strong>
                <ul class="dash_list">
					<li>OnDemand3D Printer는 기존에 없던 사용자 편의성과 안정성을 갖춘 덴탈 전용 장비로 기획 및 개발</li>
					<li>모든 치과 종사자가 Digital Dentistry로 쉽게 접근할 수 있도록 보다 편리하고 부담없는 3D Printing Solution 제공</li>
                </ul>
                <ul class="printerIconList">
                    <li><span class="icon iconPrinter p1"></span>빠른 프린팅 속도</li>
                    <li><span class="icon iconPrinter p1"></span>높은 정확도</li>
                    <li><span class="icon iconPrinter p1"></span>최적의 디지털 솔루션</li>
                    <li><span class="icon iconPrinter p1"></span>쉬운 사용법</li>
                    <li><span class="icon iconPrinter p1"></span>다양한 소재 호환</li>
                    <li><span class="icon iconPrinter p1"></span>50μm 고해상도</li>
                </ul>
                <div class="specWrap">
                    <ul>
                        <li class="on"><a href="javascript:;" class="specBtn">제품 스펙</a></li>
                        <li><a href="../images/OnDemand3D_printer_brochure_kor.pdf" target="_blank">Leaflet</a></li>
                        <li><a href="javascript:;" class="hardBtn">경화기</a></li>
                    </ul>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.specBtn').on('click', function(){
                                $('.specTable').slideToggle();
                                $(this).toggleClass('on')
                            })
                            $('.hardBtn').on('click', function(){
                                $('.hardWrap').addClass('on')
                            })
                        })
                    </script>
                    <div class="printerTable">
                        <div class="specTable t1">
                            <table class="sTable">
                                <colgroup>
                                    <col style="width: 25%;">
                                    <col style="width: 75%;">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>구분</th>
                                        <th> 사양</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Type</td>
                                        <td>Monochrome LCD 6.1inch</td>
                                    </tr>
                                    <tr>
                                        <td>X-Y Resolution</td>
                                        <td>2560 x 1620 / 2K (XY 51um)</td>
                                    </tr>
                                    <tr>
                                        <td>Z Resolution</td>
                                        <td>20um ~ 200um</td>
                                    </tr>
                                    <tr>
                                        <td>Building Size</td>
                                        <td>X 82mm Y 130mm Z 200mm</td>
                                    </tr>
                                    <tr>
                                        <td>Light Source</td>
                                        <td>405nm Arrayed LED / 80W</td>
                                    </tr>
                                    <tr>
                                        <td>Build Plate Type</td>
                                        <td>Leveling Free / Tilting / Flexible Plate</td>
                                    </tr>
                                    <tr>
                                        <td>Machine Dimension</td>
                                        <td>W 330 D 300 H470</td>
                                    </tr>
                                    <tr>
                                        <td>Heating</td>
                                        <td>Auto Heating Chamber / Light sensor</td>
                                    </tr>
                                    <tr>
                                        <td>Weight</td>
                                        <td>15kg</td>
                                    </tr>
                                    <tr>
                                        <td>Power</td>
                                        <td>AC 110~220, 350W</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="infoImage">
                <div class="imgBox">
                    <img src="../images/sub/printer_view.png" alt="">
                </div>
                <div class="btnWrap">
                    <a href="javascript:;" class="btn detailView">자세히보기</a>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.detailView').on('click', function(){
                    $('.printerWrap').addClass('on')
                })
            })
        </script>
        <div class="functionCont">
            <strong>OnDemand 3D <span> Printer Functionality</span></strong>
            <div class="funcList">
                <div class="funcBox">
                    <div class="imgBox">
                        <img src="../images/sub/f1.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <div class="dp_table">
                            <div class="">
                                <strong>자동 히팅 장치</strong>
                                <ul class="sbDot_list">
                                    <li>최선의 출력물을 위한 최적의 온도 유지</li>
                                    <li>겨울철에도 최적의 출력물 출력 가능</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="funcBox">
                    <div class="imgBox">
                        <img src="../images/sub/f2.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <div class="dp_table">
                            <div class="">
                                <strong>손 쉬운 후처리</strong>
                                <ul class="sbDot_list">
                                    <li>특허 받은 플렉시블 플레이트로 불편한 출력물 탈거의 혁신적 해결</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="funcBox">
                    <div class="imgBox">
                        <img src="../images/sub/f3.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <div class="dp_table">
                            <div class="">
                                <strong>LCD 패널 파손 방지 기능</strong>
                                <ul class="sbDot_list">
                                    <li>틸팅 플레이트 구현</li>
                                    <li>이물질이 플레이트에 눌림으로 LCD패널 파손을 막아주는 보호기능</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="funcBox">
                    <div class="imgBox">
                        <img src="../images/sub/f4.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <div class="dp_table">
                            <div class="">
                                <strong>안정적이고 풍부한 UV LED 광량 유지</strong>
                                <ul class="sbDot_list">
                                    <li>건축물별 미세한 전기 용량 차이로 생기는 출력 실패 문제 해결</li>
                                    <li>현장 전압 맞춤형 UV LED 파워 조절 기능</li>
                                    <li>타제품 대비 고용량 UV LED 채택 레이어당 2.0~2.5초 조사 <br><small>(대만산 저가 장비 레이어당 6초 소요 /  Temp 레진 기준)</small></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="funcBox">
                    <div class="imgBox">
                        <img src="../images/sub/f6.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <div class="dp_table">
                            <div class="">
                                <strong>레진 흐름 방지 기능</strong>
                                <ul class="sbDot_list">
                                    <li>출력 종료 후 틸팅 플레이팅 기능을 활용하여 기울임 거치가<br>가능하여 잔여 레진을 흘려 보낸 후, 깔끔하게 작업 가능</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="funcBox">
                    <div class="imgBox">
                        <img src="../images/sub/f5.jpg" alt="">
                    </div>
                    <div class="textBox">
                        <div class="dp_table">
                            <div class="">
                                <strong>분진 필터 적용</strong>
                                <ul class="sbDot_list">
                                    <li>분진이 많은 기공실 환경에 맞춰 내부 분진 유입 방지로<br>광파워 저하 문제 해결</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="materialWrap">
        <div class="header">
            <h2>다양한 소재 호환</h2>
            <p>임플란트 수술용 가이드 스텐트, 임시치아, 모델, 투명교정 몰드용 모델, 투명교정 장치, 덴쳐 베이스 등</p>
        </div>
        <div class="mSlideWrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev3.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev4.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev5.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev6.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev7.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev8.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev9.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev10.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev11.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev12.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev13.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev14.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev15.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <span></span>
                        <img src="../images/sub/ev16.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <a href="../customers/support.php" class="materialBtn">더 많은 정보를 원하시면 <strong>Click</strong> !</a>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            var swiper = new Swiper('.mSlideWrap .swiper-container', {
              // slidesPerView: 1.59,
              // centeredSlides: true,
              // spaceBetween: 0,
              loop:true,
              navigation: {
                nextEl: '.mSlideWrap .swiper-button-next',
                prevEl: '.mSlideWrap .swiper-button-prev',
              },
              breakpoints:{
                  320 : {
                      slidesPerView: 1,
                      spaceBetween: 0,
                  },
                  768 : {
                      slidesPerView: 1.59,
                      centeredSlides: true,
                      spaceBetween: 0,
                      loop:true,
                  }
              }
            });
        })
    </script>
</article>
<div class="printerWrap">
    <div class="dp_table">
        <div class="">
            <div class="printerLayer">
                <a href="javascript:;" class="closeBtn"></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../images/sub/ppop1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../images/sub/ppop2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../images/sub/ppop3.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../images/sub/ppop4.png" alt="">
                        </div>
                    </div>
                     <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var printerSwiper = new Swiper('.printerLayer .swiper-container', {
          loop:true,
          navigation: {
            nextEl: '.printerLayer .swiper-button-next',
            prevEl: '.printerLayer .swiper-button-prev',
          },
          pagination: {
            el: '.printerLayer .swiper-pagination',
          },
        });
    })
</script>
<div class="hardWrap">
    <div class="dp_table">
        <div class="">
            <div class="hardLayer">
                <a href="javascript:;" class="closeBtn"></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../images/sub/hard1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="../images/sub/hard2.png" alt="">
                        </div>
                    </div>
                     <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var hardSwiper = new Swiper('.hardLayer .swiper-container', {
          loop:true,
          navigation: {
            nextEl: '.hardLayer .swiper-button-next',
            prevEl: '.hardLayer .swiper-button-prev',
          },
          pagination: {
            el: '.hardLayer .swiper-pagination',
          },
        });
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.closeBtn').on('click', function(){
            $('.printerWrap, .hardWrap').removeClass('on')
        })
    })
</script>
<?php include_once(G5_PATH.'/tail.php'); ?>

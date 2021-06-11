<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<style>

html, body{overflow:hidden;}
@media screen and (max-width: 768px){
html, body{overflow:auto;}
}
.main_bg1{background:url('/data/main_big_banner_image/main_bg01.jpg')no-repeat; background-size:cover;}
.main_bg2{background:url('/data/main_big_banner_image/main_bg02_02.jpg')no-repeat; background-size:cover;}
.main_bg3{background:url('/data/main_big_banner_image/main_bg03.jpg')no-repeat; background-size:cover;}

.main_bg1.active span{background:url('/data/main_big_banner_image/main_span01_01.jpg')no-repeat; background-size:cover;}
.main_bg2.active span{background:url('/data/main_big_banner_image/main_span02_01.jpg')no-repeat; background-size:cover;}
.main_bg3.active span{background:url('/data/main_big_banner_image/main_span03_01.jpg')no-repeat; background-size:cover;}
</style>
<script src="/js/swiper.min.js"></script>
<script src="/js/jquery.onepage-scroll.js"></script>
<style>



</style>
     <div class="btn_wrap fixed">
         <span class="icon icon_scrollMouse"></span>
     </div>
     <div class="wrapper">
         <div class="main">
             <section class="page1 main_visual">
                <div class="btn_wrap mv">
                    <span class="icon_scrollMouse"></span>
                </div>
                 <ul class="main_bg_wrap">
                     <li class="main_bg1">
                         <span></span>
                     </li>
                     <li class="main_bg2">
                         <span></span>
                     </li>
                     <li class="main_bg3">
                         <span></span>
                     </li>
                 </ul>
                 <div class="swiper-container">
                     <div class="swiper-pagination"></div>
                     <div class="main_text swiper-wrapper">
                         <div data-bg="1" class="swiper-slide">
                             <div class="item_wrap">
                                 <div class="main_title">
                                     <div class="strongText">
                                         OnDemand3D
                                     </div>
                                     <div class="smallText">
                                         World No.1 3D Imaging Software
                                     </div>
                                     <ul>
                                         <li><a href="product/od3d.php">OnDemand3D</a></li>
                                         <li><a href="product/downloads.php">Downloads</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div data-bg="2" class="swiper-slide">
                             <div class="item_wrap">
                                 <div class="main_title">
                                     <div class="strongText">
                                         CORE1 Implant System
                                     </div>
                                     <div class="smallText">
                                         Easy Accurate Trustful
                                     </div>
                                     <ul>
                                         <li><a href="product/c1implant.php">Core1 Implant</a></li>
                                         <li><a href="product/d_implant.php">Digital Implant</a></li>
                                         <li><a href="product/s_kit.php">Surgical KIT</a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <div data-bg="3" class="swiper-slide">
                             <div class="item_wrap">
                                 <div class="main_title">
                                     <a href="product/dds.php">
                                         <div class="strongText">
                                             Digital Dental Solution
                                         </div>
                                         <div class="smallText">
                                             Digital Dentistry Total Solution Provider
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <section class="page2" style="">
                 <h2 class="blind"></h2>
                 <div class="inner">
                     <ul class="detail_box">
                         <li class="text_box">
                             <h3>World No.1</h3>
                             <div class="">
                                 <p>
                                     국내 <strong>최초</strong> 3차원 의료영상 소프트웨어 개발<br>
                                     아시아 <strong>최초</strong> 임플란트 수술장치 개발<br>
                                     세계 <strong>최고</strong>의 디지털 의료 기술 선도 기업
                                 </p>
                             </div>
                             <!-- <p>
                                 사이버메드는 3차원 의료용 영상진단 소프트웨어 개발업체로 디지털 치과 치료의 선구적인 기술을 제시해왔습니다. 향후 지속적인 R&D중심의 신기술 개발을 통하여 신뢰감 있는 의료기기 전문기업으로 거듭나고자 합니다.<br>
                                 또핚, 인류의 건강한 삶에 공헌한다는 책임감과 자부심을 가지고 혁신적인 환자 중심의 디지털케어 솔루션을 제공하는 글로벌 기업으로 도약하고 있습니다.
                             </p> -->
                             <!-- <a href="javascript:;" class="btn btn_skyblue">자세히보기</a> -->
                             <a href="company/about.php" class="btn btn_learnMore">LEARN MORE</a>
                         </li>
                         <li class="video_box">
                             <iframe width="560" height="360" src="https://www.youtube.com/embed/-bojDgUYBOg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         </li>
                     </ul>
                     <div class="counter_box">
                         <dl class="pdl0">
                             <dt>
                                 <p><span class="counter cnt1">0</span><em>+</em></p>
                                 <span>의료용 영상진단<br> S/W 사용 유저 수</span>
                             </dt>
                             <!-- <dd>
                                 수년 동안 25,000건 이상의
                                 임플란트 가이드 수술 케이스를
                                 보유하고 있습니다.
                             </dd> -->
                         </dl>
                         <dl>
                             <dt>
                                 <p><span class="counter cnt2">0</span><em>년</em></p>
                                 <span>연구개발 경험</span>
                             </dt>
                             <!-- <dd>
                                 영상 진단에서 환자 맞춤형 치료 계획,
                                 디지털 임플란트 수술, 보철 제작까지
                                 혁신적인 기술을 개발하고 있습니다.
                             </dd> -->
                         </dl>
                         <dl>
                             <dt>
                                 <p><span class="counter cnt3">0</span><em>+</em></p>
                                 <span>임플란트 수술 케이스</span>
                             </dt>
                             <!-- <dd>
                                 수년 동안 25,000건 이상의
                                 임플란트 가이드 수술 케이스를
                                 보유하고 있습니다.
                             </dd> -->
                         </dl>
                         <dl>
                             <dt>
                                 <p><span class="counter cnt4">0</span><em>+</em></p>
                                 <span>논문 작성 수</span>
                             </dt>
                             <!-- <dd>
                                 ㈜사이버메드 제품을
                                 이용하여 2,000건 이상의
                                 임상논문이 작성되었습니다.
                             </dd> -->
                         </dl>
                         <dl>
                             <dt>
                                 <p><span class="counter cnt5">0</span><em>+</em></p>
                                 <span>연구 교육 기관</span>
                             </dt>
                             <!-- <dd>
                                 국내외 주요 치과대학 및 대학병원
                                 들과 상호협력하여
                                 연구&middot;교육에 매진하고 있습니다.
                             </dd> -->
                         </dl>
                     </div>
                 </div>
                 <!-- <script type="text/javascript">
                     $(document).ready(function(){
                         $('.counter').counterUp({
                             delay: 10,
                             time: 2000
                         });
                     })
                 </script> -->
                 <a href="javascript:;" class="count_btn"></a>
             </section>
             <section class="page3">
                 <h2 class="blined"></h2>
                 <div class="inner">
                     <h3>
                         What's New
                         <div class="snsBox">
                             <a href="https://www.linkedin.com/company/cybermed/" class="icon icon_linked" target="_blank"></a>
                             <a href="https://www.facebook.com/cybermed.inc" class="icon icon_fb" target="_blank"></a>
                             <a href="https://www.instagram.com/cybermed_inc/" class="icon icon_insta" target="_blank"></a>
                             <a href="https://www.youtube.com/channel/UCIUTvEhYJQal89mqpQ8Hiig" class="icon icon_youtube" target="_blank"></a>
                         </div>
                     </h3>
                     <div class="new_content">
                         <div class="swiper-container">
                             <div class="swiper-wrapper">
								<?
									$main_news_sql = " select * from g5_write_news order by wr_id desc limit 5";
									$news_result = sql_query($main_news_sql);
									$ii=1;
									while($news_row=sql_fetch_array($news_result)){

									$thumb = get_list_thumbnail("news", $news_row['wr_id'], 760, 425, false, true);
									if($thumb['src']) {
										$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" >';
									} else {
										$img_content = '<img src="/images/noimage.gif" alt="noimgae" >';
									}
								?>
                                 <div class="swiper-slide">
                                     <div class="imgBox">
                                         <?=$img_content?>
                                     </div>
                                     <div class="textBox" >
                                         <a href="/bbs/board.php?bo_table=news&wr_id=<?=$news_row["wr_id"]?>">
                                             <strong>News</strong>
                                             <h4><?=$news_row["wr_subject"]?></h4>
                                             <p><?=conv_subject($news_row['wr_content'],30,"...")?></p><!--글자수 지정-->
                                             <div class="indexBox">
                                                 <span class="swiper-current"><?=$ii?></span>
                                                 <span class="index_per">/</span>
                                                 <span class="swiper-total"></span>
                                             </div>
                                         </a>
                                     </div>
									 
                                 </div>
								<?$ii++;}?>

                             </div>
                             <div class="controlBox">
                                 <div class="swiper-button-prev"></div>
                                 <span></span>
                                 <div class="swiper-button-next"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
             <section class="page4">
                 <h2 class="blind"></h2>
                 <div class="partnerBox">
                     <div class="inner">
                         <div class="navBox swiper-container">
                             <h3>Our Worldwide<br>Partners<span class="scrIcon"></span></h3>
                             <ul class="swiper-wrapper">
                                 <li class="on swiper-slide"><a href="javascript:;" data-code="cybermed">㈜사이버메드</a></li>
                                 <li class="swiper-slide"><a href="javascript:;" data-code="ond">OnDemand3D 파트너</a></li>
                                 <li class="swiper-slide"><a href="javascript:;" data-code="in2">In2Guide 디자인센터</a></li>
                                 <li class="swiper-slide"><a href="javascript:;" data-code="partner">연구교육 협력기관</a></li>
                                 <li class="swiper-slide"><a href="javascript:;" data-code="consul">임상자문</a></li>
                             </ul>
                         </div>
                         <script>
                             $(document).ready(function(){

                                 $('.navBox a').on('click', function(){
                                     var typeCode = $(this).attr('data-code')
                                     $('.mapBox').hide();
                                     $('.mapBox.'+typeCode).css('display', 'inline-block');
                                 })
                                 $('.mapBox a').hover(function(){
                                     $(this).toggleClass('on')
                                     $(this).siblings('a').removeClass('on')
                                 })
                             })
                         </script>
                         <div class="mapBox cybermed">
                             <a href="javascript:;" class="btn_map cybermed_korea" data-code="cybermed_korea">
                                 <div class="mapPop">
                                     <div class="">
                                        <div class="">
                                            <strong>Korea</strong>
                                            <p>Cybermed</p>
                                        </div>
                                     </div>
                                 </div>
                             </a>
                             <a href="javascript:;" class="btn_map cybermed_usa" data-code="cybermed_usa">
                                 <div class="mapPop">
                                     <div class="">
                                        <div class="">
                                            <strong>USA</strong>
                                            <p>OnDemand3D</p>
                                        </div>
                                     </div>
                                 </div>
                             </a>
                             <a href="javascript:;" class="btn_map cybermed_china" data-code="cybermed_china">
                                 <div class="mapPop">
                                     <div class="">
                                        <div class="">

                                            <strong>China</strong>
                                            <p>Cybermed</p>
                                        </div>
                                     </div>
                                 </div>
                             </a>
                             <img src="images/main/cybermed.png" alt="map" class="cybermed_korea pc">
                             <img src="images/main/no-marker.png" alt="mobile map" class="mob">
                              <!-- <img src="images/main/cybermed_korea.jpg" alt="" class="cybermed_korea">
                             <img src="images/main/cybermed_usa.jpg" alt="" class="cybermed_usa">
                             <img src="images/main/cybermed_china.jpg" alt="" class="cybermed_china"> -->
                         </div>
                         <div class="mapBox ond">
						 	<a href="javascript:;" class="btn_map ond_france" data-code="ond_france">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>France</strong>
                                           <p>Eurl Medical Systems 66</p>
                                       </div>
                                    </div>
                                </div>
                             </a>
							<a href="javascript:;" class="btn_map ond_europe" data-code="ond_europe">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Europe</strong>
                                           <p>Palodex Group Oy</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" class="btn_map ond_tunisia" data-code="ond_tunisia">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Tunisia</strong>
                                           <p>Advanced Medical Systems</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map ond_uae" data-code="ond_uae">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>UAE</strong>
                                           <p>Memits Solutions</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map ond_china" data-code="ond_china">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>China</strong>
                                           <p>KAVO CHINA,<br>BONDENT</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map ond_korea" data-code="ond_korea">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Korea</strong>
                                           <p>Ray,HDX WILL</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map ond_japan" data-code="ond_japan">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Japan</strong>
                                           <p>YOSHIDA<br>ASAHI ROENTGEN</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map ond_usa" data-code="ond_usa">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>USA</strong>
                                           <p>ImageWorks,<br>Carestream Dental</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map ond_brazil" data-code="ond_brazil">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Brazil</strong>
                                           <p>Alliage</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
                            <img src="images/main/ondemand3d.png" alt="map" class="ond pc">
                            <img src="images/main/no-marker.png" alt="mobile map" class="mob">
                            <!-- <img src="images/main/ond_france.jpg" alt="" class="ond_france">
                            <img src="images/main/ond_europe.jpg" alt="" class="ond_europe">
                            <img src="images/main/ond_tunisia.jpg" alt="" class="ond_tunisia">
                            <img src="images/main/ond_uae.jpg" alt="" class="ond_uae">
                            <img src="images/main/ond_china.jpg" alt="" class="ond_china">
                            <img src="images/main/ond_korea.jpg" alt="" class="ond_korea">
                            <img src="images/main/ond_japan.jpg" alt="" class="ond_japan">
                            <img src="images/main/ond_usa.jpg" alt="" class="ond_usa">
                            <img src="images/main/ond_brazil.jpg" alt="" class="ond_brazil"> -->
                         </div>
						 <div class="mapBox in2">
							<a href="javascript:;" class="btn_map in2_an" data-code="in2_an">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Australia & New zealand</strong>
                                           <p>Pacific Dental Specialties</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_chile" data-code="in2_chile">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Chile</strong>
                                           <p>RADIX RADIOLOGIA LTDA</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_china" data-code="in2_china">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>China</strong>
                                           <p>Qingdao</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_egypt" data-code="in2_egypt">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Egypt</strong>
                                           <p>3dVision</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_emea" data-code="in2_emea">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>EMEA</strong>
                                           <p>KaVo DentalGmbh</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_israel" data-code="in2_israel">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Israel</strong>
                                           <p>Dental Care</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_mexico" data-code="in2_mexico">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Mexico</strong>
                                           <p>Dentametrics,<br>Cedirama Digital</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map in2_usa" data-code="in2_usa">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>USA</strong>
                                           <p>OnDemand3D Technology Inc.</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<!-- <a href="javascript:;" class="btn_map in2_brazil" data-code="in2_brazil"></a> -->
							<img src="images/main/in2.png" alt="map" class="in2 pc">
                            <img src="images/main/no-marker.png" alt="mobile map" class="mob">
                            <!-- <img src="images/main/in2_an.jpg" alt="" class="in2_an">
							<img src="images/main/in2_chile.jpg" alt="" class="in2_chile">
							<img src="images/main/in2_china.jpg" alt="" class="in2_china">
							<img src="images/main/in2_egypt.jpg" alt="" class="in2_egypt">
							<img src="images/main/in2_emea.jpg" alt="" class="in2_emea">
							<img src="images/main/in2_israel.jpg" alt="" class="in2_israel">
							<img src="images/main/in2_mexico.jpg" alt="" class="in2_mexico">
							<img src="images/main/in2_usa.jpg" alt="" class="in2_usa"> -->
							<!-- <img src="images/main/in2_brazil.jpg" alt="" class="in2_brazil"> -->
                         </div>
						 <div class="mapBox partner">
							<a href="javascript:;" class="btn_map partner_germany" data-code="partner_germany">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Germany</strong>
                                           <p>Pagoda Systems</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map partner_israel" data-code="partner_israel">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Israel</strong>
                                           <p>Orca.AI</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map partner_korea" data-code="partner_korea">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Korea</strong>
                                           <p>Luvantix</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<img src="images/main/partner.png" alt="map" class="partner pc">
                            <img src="images/main/no-marker.png" alt="mobile map" class="mob">
                            <!-- <img src="images/main/partner_germany.jpg" alt="" class="partner_germany">
							<img src="images/main/partner_israel.jpg" alt="" class="partner_israel">
							<img src="images/main/partner_korea.jpg" alt="" class="partner_korea"> -->
                         </div>
						 <div class="mapBox consul">
							<a href="javascript:;" class="btn_map consul_brazil" data-code="consul_brazil">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Brazil</strong>
                                           <p>Methodist University of São Paulo</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map consul_egypt" data-code="consul_egypt">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Egypt</strong>
                                           <p>Dr. Rami Gamil</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map consul_italy" data-code="consul_italy">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Italy</strong>
                                           <p>University of Milan</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map consul_korea" data-code="consul_korea">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>Korea</strong>
                                           <p>서울대학교, 연새대학교<br>경희대학교, 아산병원</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<a href="javascript:;" class="btn_map consul_usa" data-code="consul_usa">
                                <div class="mapPop">
                                    <div class="">
                                       <div class="">
                                           <strong>USA</strong>
                                           <p>Dr. Dale Miles, <br>UCLA 치과대학</p>
                                       </div>
                                    </div>
                                </div>
                            </a>
							<!-- <img src="images/main/consul.jpg" alt="" class="consul">
                            <img src="images/main/consul_brazil.jpg" alt="" class="consul_brazil">
							<img src="images/main/consul_egypt.jpg" alt="" class="consul_egypt">
							<img src="images/main/consul_italy.jpg" alt="" class="consul_italy">
							<img src="images/main/consul_korea.jpg" alt="" class="consul_korea"> -->
							<img src="images/main/consul.png" alt="map" class="consul pc">
                            <img src="images/main/no-marker.png" alt="mobile map" class="mob">
                         </div>
                         <div class="mobTextBox">
                            <div class="">
                                <div class="">
                                    <strong>Korea</strong>
                                    <p>Cybermed</p>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
                 <script>
                 $(document).ready(function(){
                     var wSize = $(window).width();
                     if(wSize<=1024){
                         $('.mapBox a').on('click', function(){
                             var nation = $(this).find('strong').html();
                             var insti = $(this).find('p').html();

                             $('.mobTextBox').find('strong').html(nation)
                             $('.mobTextBox').find('p').html(insti)
                         })
                     }
                 })
                 </script>
                 <!-- <script>
                     $(document).ready(function(){
                         $('.btn_map').on('click', function(){
                             var mapName = $(this).attr('data-code')
                             $(this).parents('.mapBox').children('img').hide();
                             $('.mapBox').children('img.'+mapName).show();
                         })
						 $('.navBox a').on('click', function(){
							var mapCode = $(this).attr('data-code');
							$('.mapBox').hide();
							$('.mapBox.'+mapCode).css('display', 'inline-block')
						 })
                     })
                 </script> -->
                 <div class="partnerBox2">

                     <div class="inner">
                         <ul class="supportBox">
                             <li class="supportArea">
                                 <div class="">
                                     <strong>Support</strong>
                                     <div class="chatBox">
                                         <a href="javascript:;" class="icon icon_kakao"></a>
                                         <!-- <a href="javascript:;" class="icon icon_wechat"></a>
                                         <a href="javascript:;" class="icon icon_whats"></a> -->
                                         <a href="https://www.facebook.com/OnDemand3D" class="icon icon_fbc"></a>
                                         <a href="https://download.teamviewer.com/download/TeamViewerQS.exe" class="icon icon_tv" download></a>
                                     </div>
                                     <p>사이버메드 제품이 궁금하시거나 기타 문의사항이<br>있으실 경우 성실하게 도와드리겠습니다.</p>
                                     <p class="support_num">
                                         <span>고객센터 운영시간 : 09:00 - 18:00</span>
                                         <span>구매문의 : 02-6959-1553</span>
                                     </p>
                                     <a href="customers/support.php" class="btn btn_learnMore partner">문의하기</a>
                                 </div>
                             </li>
                             <li class="partnerArea">
                                 <div class="">
                                     <strong>Become a Partner</strong>
                                     <p>사이버메드의 사업 파트너가 되는 순간,<br> 귀사의 비즈니스 경쟁력이 올라갑니다.<br>언제나 신뢰할 수 있는 든든한 동반자가 되겠습니다.</p>
                                     <a href="customers/partner.php" class="btn btn_learnMore inquiry">파트너 맺기 </a>
                                 </div>
                             </li>
                         </ul>
                     </div>
                     <ul class="page4_bg">
                         <li class="supportBg"></li>
                         <li class="partnerBg"></li>
                     </ul>
                 </div>
             </section>
			 <div class="tv-pop">
				<div class="popTable">
					<div class="popCell">
						<div class="tv_layer">
							<a href="javascript:;" class="btn btn_popClose"></a>
							<div class="icon_wrap">
								<img src="images/main/tv_icon.png" alt="team viewer">
							</div>
							<p>Team Viewer<br>다운로드</p>
							<a href="javascript:;" class="btn btn_as">원격 A/S</a>
						</div>
					</div>
				</div>
			 </div>
			 <script>
				$(document).ready(function(){
					$('.btn_popClose').on('click', function(){
						$('.tv-pop').hide();
					})
					$('.icon_tv').on('click', function(){
						$('.tv-pop').show();
					})
				})
			 </script>
             <section class="footer">
                 <div class="f_top">
                    <div class="inner">
                        <ul class="etc_menu">
                            <li><a href="etc/privacy.php" class="atv">Privacy Policy </a></li>
                        </ul>
                        <div class="f_sns">
                            <ul>
                                <li><a href="https://www.facebook.com/OnDemand3D" class="icon f_facebook" target="_blank"></a></li>
                                <li><a href="https://www.instagram.com/cybermed_inc/" class="icon f_insta" target="_blank"></a></li>
                                <li><a href="https://www.youtube.com/channel/UCIUTvEhYJQal89mqpQ8Hiig" class="icon f_youtube" target="_blank"></a></li>

                            </ul>

                            <a data-index="1" href="#1" class="f_scrtop" >TOP</a>

                        </div>
                        <script>
                            $(document).ready(function(){
                                var wSize = $(window).width();
                                if(wSize>1024){
                                    $('.f_scrtop').on('click', function(){
                                        $('.onepage-pagination li:first-child a').trigger('click')
                                    })
                                }else{
                                    $('.f_scrtop').on('click', function(){
                                        $('html, body').animate({'scrollTop':0},500)
                                    })
                                }
                            })
                        </script>
                    </div>
                 </div>
                 <div class="f_bot">
                    <div class="inner">
                        <!-- <span>Korea, Republic of</span> -->
                        <span class="footer_logo"></span>
                        <div class="bot_right">
                            <address>
                                <p><strong>Headquater : </strong>6-26, Yuseong-daero 1205beon-gil, Yuseong-gu, Daejeon, Korea (34104)</p>
                                <p><strong>Sales Office : </strong>254, Beotkkot-ro, Geumcheon-gu, Seoul, Republic of Korea (08511)</p>
                                <p><strong>Tel : </strong><span>+82-2-6959-1553</span><strong>Fax : </strong><span>+82-2-6959-1554</span><span>09:00 - 18:00</span></p>
                            </address>
                            <p class="copyright">Copyright &copy; Cybermed Inc. All rights reserved.</p>
                        </div>
                    </div>
                 </div>
             </section>
         </div>
     </div>
</body>
</html>

<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<link rel="stylesheet" href="../css/swiper.min.css">
<script src="../js/swiper.min.js"></script>
<!-- <link rel="stylesheet" href="../css/slick.css">
<script src="../js/slick.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="../js/subslide.js"></script>
<style>
body{ height:auto;}
.lnb_2depth {display:inline-block !important;}
@media screen and (max-width:768px){ 
.lnb_2depth {display:none !important;}
}
</style>
<article class="sub_container">
    <div class="od3d_wrap">
        <div class="od3d_cont01">
            <p>
                OnDemand3D는 전문의에게 구강 진단, 임플란트 수술 시뮬레이션, 치아교정, 수술 전 후 비교분석 등<br>
                다양한 기능들을 제공하고 있어 환자에게 최상의 의료 서비스를 제공할 수 있습니다.
            </p>
        </div>
        <div class="od3d_cont02">
            <div class="inner">
                <div class="od3d_title">
                    <strong>Why<br class="mob"> OnDemand3D?</strong>
                </div>
                <div class="why_cont">
                    <ul>
                        <li>
                            <div class="item_wrap">
                                <strong>편리한 데이터베이스 관리</strong>
                                <p>
                                    OnDemand3D Application 사용자의 데이터베이스와 OnDemand3D 서버, PACS 서버를 연동하여<br>DICOM 형식의 데이터를 업로드 및 다운로드 하여<br>효율적으로 사용할 수 있습니다
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <strong>정확한 진단 및 분석</strong>
                                <p>
                                    환자를 정확하게 진단 및 분석할 수 있는 고화질의<br>3D 렌더링, 수술 전 후 비교, 교정진단, 임플란트<br>시뮬레이션 등 다양한 기능들을 제공하고 있습니다.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <strong>디지털 플래닝을 통한<br>가상 시뮬레이션</strong>
                                <p>
                                    OnDemand3D의 디지털 플래닝은 다양한 임플란트<br>라이브러리를 제공하여 실제와 같은 시뮬레이션을<br>할 수 있고, 전문적인 기능들을 이용하여 수술 시<br>돌발상황을 미연에 방지할 수 있습니다. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="why_counter">
                    <ul >
                        <li>
                            <div class="item_wrap">
                                <strong><span class="counter">20</span>+<p>Years in the market</p></strong>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <strong><span class="counter">200</span>+<p>Global Universities</p></strong>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">
                                <strong><span class="counter">20</span>+<p>Countries</p></strong>
                            </div>
                        </li>
                        <li>
                            <div class="item_wrap">

                                <strong><span class="counter">2000</span>+<p>Dissertations</p></strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.counter').counterUp({
                    delay: 10,
                    time: 2000
                });
            })
        </script>
        <div class="od3d_cont03">
            <div class="slide_wrap">
                <!-- <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <img src="../images/sub/od3d_pc01.png" alt="">
                                </li>
                                <li>
                                    <div class="">
                                        <strong>Planning Implant Placement</strong>
                                        <p>
                                            임플란트 수술은 가장 복잡하고 정교함이 필요한 분야 중 하나 입니다.
                                            OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술
                                            등을 통해 상세히 분석할 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <img src="../images/sub/od3d_pc02.png" alt="">
                                </li>
                                <li>
                                    <div class="">
                                        <strong>2. Planning Implant Placement</strong>
                                        <p>
                                            임플란트 수술은 가장 복잡하고 정교함이 필요한 분야 중 하나 입니다.
                                            OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술
                                            등을 통해 상세히 분석할 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <img src="../images/sub/od3d_pc03.png" alt="">
                                </li>
                                <li>
                                    <div class="">
                                        <strong>3. Planning Implant Placement</strong>
                                        <p>
                                            임플란트 수술은 가장 복잡하고 정교함이 필요한 분야 중 하나 입니다.
                                            OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술
                                            등을 통해 상세히 분석할 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <img src="../images/sub/od3d_pc04.png" alt="">
                                </li>
                                <li>
                                    <div class="">
                                        <strong>4. Planning Implant Placement</strong>
                                        <p>
                                            임플란트 수술은 가장 복잡하고 정교함이 필요한 분야 중 하나 입니다.
                                            OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술
                                            등을 통해 상세히 분석할 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <img src="../images/sub/od3d_pc05.png" alt="">
                                </li>
                                <li>
                                    <div class="">
                                        <strong>5. Planning Implant Placement</strong>
                                        <p>
                                            임플란트 수술은 가장 복잡하고 정교함이 필요한 분야 중 하나 입니다.
                                            OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술
                                            등을 통해 상세히 분석할 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="swiper-slide">
                            <ul>
                                <li>
                                    <img src="../images/sub/od3d_pc06.png" alt="">
                                </li>
                                <li>
                                    <div class="">
                                        <strong>6. Planning Implant Placement</strong>
                                        <p>
                                            임플란트 수술은 가장 복잡하고 정교함이 필요한 분야 중 하나 입니다.
                                            OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술
                                            등을 통해 상세히 분석할 수 있습니다.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="controlBox">
                        <div class="swiper-button-prev"></div>
                        <span></span>
                        <div class="swiper-button-next"></div>
                    </div>
                </div> -->
                <!-- <div class="od3d_slide">
                    <div class="">
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/od_slide06.png" alt="">
                            </div>
                            <div class="text_box">
                                <div class="">
                                    <strong>Planning Implant Placement</strong>
                                    <p>
                                        임플란트 수술은 가장 복잡하고 정교함이
                                        필요한 분야 중 하나 입니다.<br>
                                        OnDemand3D를 통해 환자의 구강 진단과 임플란트 식립 위치 설정, 모의수술 등을 통해 상세히 분석할 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/od_slide02.png" alt="">
                            </div>
                            <div class="text_box">
                                <div class="">
                                    <strong>Orthodontics</strong>
                                    <p>
                                        세계 인구의 절반이상이 치아와 턱이 불균형합니다. 먼저 3D Ceph 모듈을 통해 수술이나 브라켓 배치 방법을 계획하고 분석할 수 있습니다. 단순히 의료뿐 아니라 심미적인 부분에서의 개선도 중요하기 때문에, 환자에게 치료 진행 과정을 보여주고 설명함으로써 치과와 환자사이의 신뢰도를 높이는 데 도움이 됩니다.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/od_slide08.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <div class="">
                                    <strong>Airway Measurement</strong>
                                    <p>
                                        단 몇 번의 클릭만으로 누구든지 쉽게 기도 부피를 정확하게 측정할 수 있습니다. 좀 더 쉽게, 정확하게 측정할 수 있도록 기술개발에 매진하고 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/od_slide04.png" alt="">
                            </div>
                            <div class="text_box">
                                <div class="">
                                    <strong>Comparative Analysis</strong>
                                    <p>
                                        수술의 경과 및 차이를 확인하는 것은 매우 중요합니다. OnDemand3D Fusion 모듈은 CT Data를 중첩하여 수술 전후의 환자 상태를 시각적으로 보여주며 다양한 옵션들을 통해서 다양하고 정교한 계측을 할 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/od_slide05.png" alt="">
                            </div>
                            <div class="text_box">
                                <div class="">
                                    <strong>Analysis Report</strong>
                                    <p>
                                        이미징 센터, 치과, 연구실 및 교육 기관의 경우 환자의 CT 결과를 분석하고 공유하는 것이 많은 이점이 있습니다. 환자의 진단내용과 치료내용 등을 부각시키고 사용자 맞춤형 보고서를 작성할 수 있습니다.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/od_slide07.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <div class="">
                                    <strong>Implant Library</strong>
                                    <p>
                                        세계 각지의 주요 임플란트 제조업체들의 임플란트 라이브러리를 보유하고 있어 실제와 같은 임플란트 수술 계획을 하고 시뮬레이션 할 수 있습니다. 만약 필요한 임플란트가 없을 경우 언제든지 문의를 통해 요청하시면 임플란트 라이브러리를 추가할 수 있습니다.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="od3d_slide">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="item_wrap">
                                    <div class="img_box">
                                        <img src="../images/sub/od_slide06.png" alt="Planning Implant Placement">
                                    </div>
                                    <div class="text_box">
                                        <div class="">
                                            <strong>Planning Implant Placement</strong>
                                            <p>
                                                임플란트 수술은 가장 복잡하고<br>정교함이 필요한 분야 중 하나 입니다.<br>
                                                OnDemand3D를 통해 환자의 구강 진단과<br> 임플란트 식립 위치 설정, 모의수술 등을 통해 <br>상세히 분석할 수 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_wrap">
                                    <div class="img_box">
                                        <img src="../images/sub/od_slide02.png" alt="Orthodontics">
                                    </div>
                                    <div class="text_box">
                                        <div class="">
                                            <strong>Orthodontics</strong>
                                            <p>
                                                세계 인구의 절반이상이 치아와 턱이 불균형합니다. <br>먼저 3D Ceph 모듈을 통해 수술이나 브라켓 배치 방법을 <br>계획하고 분석할 수 있습니다. 단순히 의료뿐 아니라 <br>심미적인 부분에서의 개선도 중요하기 때문에, <br>환자에게 치료 진행 과정을 보여주고 설명함으로써 <br>치과와 환자사이의 신뢰도를 높이는 데 도움이 됩니다.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_wrap">
                                    <div class="img_box">
                                        <img src="../images/sub/od_slide08.jpg" alt="Airway Measurement">
                                    </div>
                                    <div class="text_box">
                                        <div class="">
                                            <strong>Airway Measurement</strong>
                                            <p>
                                                단 몇 번의 클릭만으로 누구든지 쉽게 기도 부피를 정확하게 측정할 수 있습니다. 좀 더 쉽게, 정확하게 측정할 수 있도록 기술개발에 매진하고 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_wrap">
                                    <div class="img_box">
                                        <img src="../images/sub/od_slide04.png" alt="Comparative Analysis">
                                    </div>
                                    <div class="text_box">
                                        <div class="">
                                            <strong>Comparative Analysis</strong>
                                            <p>
                                                수술의 경과 및 차이를 확인하는 것은 매우 중요합니다. OnDemand3D Fusion 모듈은 CT Data를 중첩하여 수술 전후의 환자 상태를 시각적으로 보여주며 다양한 옵션들을 통해서 다양하고 정교한 계측을 할 수 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_wrap">
                                    <div class="img_box">
                                        <img src="../images/sub/od_slide05.png" alt="Analysis Report">
                                    </div>
                                    <div class="text_box">
                                        <div class="">
                                            <strong>Analysis Report</strong>
                                            <p>
                                                이미징 센터, 치과, 연구실 및 교육 기관의 경우 환자의 CT 결과를 <br>분석하고 공유하는 것이 많은 이점이 있습니다. <br>환자의 진단내용과 치료내용 등을 부각시키고 <br>사용자 맞춤형 보고서를 작성할 수 있습니다.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_wrap">
                                    <div class="img_box">
                                        <img src="../images/sub/od_slide07.jpg" alt="Implant Library">
                                    </div>
                                    <div class="text_box">
                                        <div class="">
                                            <strong>Implant Library</strong>
                                            <p>
                                                세계 각지의 주요 임플란트 제조업체들의 <br>임플란트 라이브러리를 보유하고 있어 실제와 같은 <br>임플란트 수술 계획을 하고 시뮬레이션 할 수 있습니다.<br> 만약 필요한 임플란트가 없을 경우 언제든지 문의를 통해 <br>요청하시면 임플란트 라이브러리를 추가할 수 있습니다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="od3d_button">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <script >
        $(document).ready(function(){

			// $('.od3d_slide').slick({
			// 	infinite: true,
			// 	slidesToShow: 3,
			// 	slidesToScroll: 1,
			// 	// dots:true,
			// 	arrows : true,
			// 	centerMode: true,
			// 	centerPadding: '0',
            //     centerMode: true,
            //     easing: 'ease',
            //     cssEase: 'ease',
            //     responsive: [
            //         {
            //           breakpoint: 768,
            //           settings: {
            //             arrows: false,
            //             centerMode: true,
            //             centerPadding: '40px',
            //             slidesToShow: 3
            //           }
            //         },
            //         {
            //           breakpoint: 480,
            //           settings: {
            //             arrows: false,
            //             centerMode: true,
            //             centerPadding: '40px',
            //             slidesToShow: 1
            //           }
            //         }
            //     ]
			// });
            $('.swiper-slide-active').find('.text_box').find('p').show();
            $('.od3d_cont03 .swiper-button-prev, .od3d_cont03 .swiper-button-next').on('click', function(){
                $('.swiper-slide-active').find('.text_box').find('p').show();
            })
            // var clkIdx = 0;
            // $('.slick-arrow').on('click', function(){
            //     ++clkIdx;
            //     if(clkIdx>1){
            //     $('.slick-slide').find('.text_box').find('p').slideUp();
            //     $('.slick-current').find('.text_box').find('p').slideDown()
            //         clkIdx = 0;
            //     }
            // })
        })
        </script>
        <div class="od3d_cont04">
            <div class="inner">
                <strong>Features</strong>
                <p>
                    OnDemand3D™는 각 분야의 사용 목적에 맞추어진 특성화된 모듈과 기능을 지원하고, 사용자의 진단 및 연구에 적용할 수 있습니다.<br>(주)사이버메드에서 제공하는 사용자 맞춤형 소프트웨어를 이용하여 고퀄리티 영상을 경험해 보십시오.
                </p>
            </div>
            <span class="scrIcon"></span>
        </div>
        <div class="od3d_cont05">
            <div class="inner">
                <div class="tabWrap">
                    <ul class="tab_typeA">
                        <li class="on"><a href="javascript:;" data-code="dbm">DBM</a></li>
                        <li><a href="javascript:;" data-code="dlb">DLB</a></li>
                        <li><a href="javascript:;" data-code="report">Report</a></li>
                        <li><a href="javascript:;" data-code="3d">3D</a></li>
                        <li><a href="javascript:;" data-code="dental">Dental</a></li>
                        <li><a href="javascript:;" data-code="fusion">Fusion</a></li>
                        <li><a href="javascript:;" data-code="ceph">3D Ceph</a></li>
                        <li><a href="javascript:;" data-code="in2">In2Guide</a></li>
                        <li><a href="javascript:;" data-code="x-img">X-Image</a></li>
                        <li><a href="javascript:;" data-code="x-report">X-Report</a></li>
                    </ul>
                </div>
                <div class="od3d_contents">
                </div>
                <div class="tab_contWrap">
                    <div class="tab_contents dbm">
                        <p>DBM (Database Manager)모듈은 사용자의 데이터베이스를 관리합니다. 여기에서 사용자는 환자 DICOM 데이터,<br> 프로젝트 파일, 보고서 및 이미지 파일이나 표면 메쉬 데이터를 포함한 첨부 파일을 쉽게 정렬 할 수 있습니다.</p>
                        <img src="../images/sub/odtab01.jpg" alt="DBM">
                    </div>
                    <div class="tab_contents dlb">
                        <p>Dynamic Light Box는 슬라이스 이미지를 쉽고 빠르게 탐색할 수 있는 간단한 이미지 viewer 입니다.<br> 이 모듈은 수평면, 시상면, 관상면의 view를 제공하며, Oblique Slice View, 3D Zoom 및 endoscopy 와 같은 기능을 제공합니다.</p>
                        <img src="../images/sub/dlb_img.jpg" alt="DLB">
                    </div>
                    <div class="tab_contents report">
                        <p>보고서 모듈은 캡쳐된 이미지를 Tracing하고 사용자가 HTML 형식의 보고서를 만들 수 있도록 합니다.<br> 보고서 모듈은 캡쳐, 저장, DICOM 파일 변환 및 인쇄 등의 확장 기능을 지원합니다.<br> 캡쳐한 이미지를 PACS 서버로 보내거나 이 모듈의 내용을 인쇄할 수 있습니다</p>
                        <img src="../images/sub/odtab03.jpg" alt="Report">
                    </div>
                    <div class="tab_contents 3d">
                        <p>3D 모듈은 DICOM 이미지의 3D 시각화, 세분화 및 Segmentation을 위한 도구를 제공합니다. 3D 모듈에는 VR(Volume Rendering),<br>MIP, minIP 및 X- ray와 같은 다양한 렌더링 모드가 있습니다. Object 분할 후 사용자는 STL 데이터로 내보낼 수 있습니다.</p>
                        <img src="../images/sub/odtab04.jpg" alt="3D">
                    </div>
                    <div class="tab_contents dental">
                        <p>Dental 모듈은 가상 치아와 TMJ, Bilateral TMJ, 파노라마 및 단면도와 같은 치과 의사가 필요로 하는 모든 view 형식을 갖추고 있으며,<br> 주요 제조업체의 실제 크기의 Implant Fixture 정보를 포함한 Implant Planning, 진단 및 치료 계획에 필요한 모든 기능이 있습니다.</p>
                        <img src="../images/sub/odtab05.jpg" alt="Dental">
                    </div>
                    <div class="tab_contents fusion">
                        <p>Fusion은 두 세트의 DICOM 데이터를 겹치거나 FOV가 작은 두 개의 볼륨을 stitching 하여 더 큰 볼륨을 생성하는 시각화 도구입니다. <br>Fusion 모듈은 중첩 및 stitching에 주로 사용되는 기술인 Mutual Information 방법을 사용합니다. </p>
                        <img src="../images/sub/odtab06.jpg" alt="Fusion">
                    </div>
                    <div class="tab_contents ceph">
                        <p>3D Ceph는 점, 선 및 평면 사이의 상대 함수를 3차원 설정으로 계산하여 보다 정확한 값을 제공합니다. <br>사용자는 교정 분석을 위해 점, 선, 면을 사용자 정의하여 사용 할 수 있습니다. 또한 사용자는 분석을 위한 수술 전 및 수술 후 데이터와 같은 <br>두 세트의 데이터를 겹쳐보면서 2D 사진을 사용하여 3D 볼륨 mapping하고 환자 상담을 위해 2D X- ray를 생성 할 수 있습니다.</p>
                        <img src="../images/sub/odtab07.jpg" alt="3D Ceph">
                    </div>
                    <div class="tab_contents in2">
                        <p>In2Guide는 OnDemand3D ™의 대표적인 3D rendering 기능을 사용하는 모듈입니다. <br>DICOM 데이터를 3D 볼륨이미지 기반으로 임플란트 수술 계획에 이용합니다. <br>In2Guide에서 직접 planning한 데이터를 실제 custom template으로 변환 할 수 있습니다. </p>
                        <img src="../images/sub/odtab08.jpg" alt="In2Guide">
                    </div>
                    <div class="tab_contents x-img">
                        <p>OnDemand3D™는 X-Image에서 2D 및 3D 데이터를 하나의 창에서 관리합니다. <br>이미지 파일을 PACS로 전송하기 위해 DICOM(.dcm) 형식으로 변환 할 수 있습니다. <br>X-Image에는 일련의 이미지 조작 및 측정 도구와 함께 사용자 설정이 가능합니다.</p>
                        <img src="../images/sub/odtab09.jpg" alt="X-Image">
                    </div>
                    <div class="tab_contents x-report">
                        <p>OnDemand3D ™ 는 X-Report Template Designer와 X-Report 도구라는 두 가지 주요 기능이 있습니다. X-Report 도구는 사용자가 사용하기 쉬운 방법으로, <br>사용자는 팝업 보고서 템플릿으로 이미지 편집을 사용 할 수 있습니다. X-Report Template Designer는 OnDemand3D에 템플릿을 생성합니다. <br>사용자가 환자의 필요에 맞는 개별 템플릿을 생성하고 보고서 작성의 효율성을 높일 수 있습니다.</p>
                        <img src="../images/sub/odtab10.jpg" alt="X-Report">
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $('.tab_typeA li a').on('click', function(){
                            $('.tab_typeA li').removeClass('on')
                            $(this).parents('li').addClass('on')
                            var screenCode = $(this).attr('data-code');
                            $('.tab_contents').hide();
                            $('.tab_contents.'+screenCode).show();
                        })
                    })
                </script>
            </div>
        </div>
        <div class="od3d_cont06">
            <div class="inner">
                <strong>Package</strong>
                <p>OnDemand3D Application 사용자의 데이터베이스와 OnDemand3D 서버, PACS 서버를 연동하여 DICOM 형식의 데이터를 <br>업로드 및 다운로드하여 사용할 수 있습니다. 또한 사용자의 진단 및 치료 목적에 따른 다양한 모듈로 구성되어 있습니다. </p>
                <ul>
                    <li>
                        <div class="item_wrap">
                            <div class="icon_wrap">
                                <span class="icon icon_od3d01"></span>
                            </div>
                            <strong><span>OnDemand3D</span> Full Application</strong>
                            <p>DBM, DLB, Report,<br>3D, Dental</p>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="icon_wrap">
                                <span class="icon icon_od3d02"></span>
                            </div>
                            <strong><span>OnDemand3D</span>-Dental</strong>
                            <p>DBM, DLB, Report<br>Dental</p>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="icon_wrap">
                                <span class="icon icon_od3d03"></span>
                            </div>
                            <strong><span>OnDemand3D</span>-Server</strong>
                            <p>Application, Server,<br>Project Viewer</p>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="icon_wrap">
                                <span class="icon icon_od3d04"></span>
                            </div>
                            <strong>Add-on</strong>
                            <p>Fusion, 3D Ceph, In2Guide,<br>X-Image, X-Report</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="od3d_cont07">
            <div class="inner">
                <div class="icon_wrap">
                    <span class="od3d_icon"></span>
                </div>
                <p>
                    OnDemand3D 는 전 세계의 주요 대학과 치과에서 사용되는 제품으로<br>
                    20년 넘게 제공해왔습니다. 이 긴 시간동안 고객들로부터 많은 신뢰와 사랑을 얻었으며,<br>
                    더 다양하고 혁신적인 의료 서비스를 제공하겠습니다.
                </p>
                <ul class="od3d_cont07_list">
                    <li>
                        <div class="item_wrap">
                            <div class="title">
                                <div class="">
                                    <strong>OnDemand3D<br>Download</strong>
                                </div>
                            </div>
                            <div class="btn_wrap">
                                <a href="downloads.php" class="btn catalDown btn_korDown arrow od3d" >Go to page<span></span> </a>
                                <!-- <a href="#" class="btn btn_od3dGoto">Go to page <span></span></a> -->
                            </div>
                            <div class="img_box">
                                <img src="../images/sub/cont07_img01.png" alt="OnDemand3D">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="title">
                                <div class="">
                                    <strong>Brochure</strong>
                                </div>
                            </div>
                            <div class="btn_wrap">
                                <a href="../OnDemand3D_brochure_ENG_pages.pdf" class="btn catalDown btn_korDown arrow down od3d" target="_blank">Download<span></span> </a>
                                <!-- <a href="#" class="btn btn_od3dGoto">Download <span></span></a> -->
                            </div>
                            <div class="img_box">
                                <img src="../images/sub/cont07_img02.png" alt="Brochure">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="title">
                                <div class="">
                                    <strong>Video</strong>
                                </div>
                            </div>
                            <div class="btn_wrap">
                                <a href="https://vimeo.com/user114850397" class="btn catalDown btn_korDown arrow od3d" target="_blank">Go to page<span></span> </a>
                            </div>
                            <div class="img_box">
                                <img src="../images/sub/cont07_img03.png" alt="Video">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="od3d_cont08">
            <ul>
                <li>
                    <strong>OnDemand3D Download</strong>
                    <a href="javascript:;">
                        Go to page <span class="icon icon_downArrow"></span>
                    </a>
                </li>
                <li>
                    <strong>OnDemand3D Download</strong>
                    <a href="javascript:;">
                        <p>Download<span class="icon icon_downloadBtn"></span></p>
                    </a>
                </li>
                <li>
                    <strong>OnDemand3D Download</strong>
                    <a href="javascript:;">
                        Go to page <span class="icon icon_downArrow"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div> -->
</article>
<?php include_once(G5_PATH.'/tail.php'); ?>

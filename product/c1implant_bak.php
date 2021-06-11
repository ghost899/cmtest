<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<script src="../js/skrollr.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    skrollr.init ({
        constants : {
            myconst : 300
        }
    });
})
</script>
<article class="sub_container">
    <div class="ci_wrap">
        <div class="ci_skrollable">
            <div class="inner">
                <h3 data-0="opacity:0;" data-600="opacity:1;" data-6100="opacity:1;" data-6500="opacity:0;">Product Features</h3>
            </div>
            <div class="textBox tb01">
                <div class="pbox pbox01" id="pbox01" data-0="opacity:0;" data-700="opacity:1;" data-1000="opacity:0;">
                    <div class="box_wrap">
                        <span>01</span>
                        <strong>Platform Switching</strong>
                        <ul class="sbDot_list text-white">
                            <li>Bone Loss 최소화</li>
                            <li>장기적 안정성</li>
                            <li>우수한 심미성</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb02">
                <div class="pbox pbox02" id="pbox02" data-1500="opacity:0;" data-2000="opacity:1;" data-2500="opacity:0;">
                    <div class="box_wrap">
                        <span>02</span>
                        <strong>Open Thread</strong>
                        <ul class="sbDot_list text-white">
                            <li>식립 저항을 최소화</li>
                            <li>Bone Loss 방지</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb03">
                <div class="pbox pbox03" id="pbox03" data-2500="opacity:0;" data-3000="opacity:1;" data-3500="opacity:0;">
                    <div class="box_wrap">
                        <span>03</span>
                        <strong>Internal Taper Connection</strong>
                        <ul class="sbDot_list text-white">
                            <li>안정적인 보철물 유지</li>
                            <li>응력 분산 효과</li>
                            <li>Bacteria 침입 방지</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb04">
                <div class="pbox pbox04" id="pbox04" data-3500="opacity:0;" data-4000="opacity:1;" data-4500="opacity:0;">
                    <div class="box_wrap">
                        <span>04</span>
                        <strong>Compact Thread</strong>
                        <ul class="sbDot_list text-white">
                            <li>초기고정력 향상</li>
                            <li>Fixture 강도 향상</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb05">
                <div class="pbox pbox05" id="pbox05" data-4500="opacity:0;" data-5000="opacity:1;" data-5500="opacity:0;">
                    <div class="box_wrap">
                        <span>05</span>
                        <strong>Sharp Thread</strong>
                        <ul class="sbDot_list text-white">
                            <li>강력한 Self Threading 효과</li>
                            <li>신생골이 생성할 수 있는 공간 확보</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb06">
                <div class="pbox pbox06" id="pbox06" data-5500="opacity:0;" data-6000="opacity:1;" data-6500="opacity:0;">
                    <div class="box_wrap">
                        <span>06</span>
                        <strong>Cutting Edge</strong>
                        <ul class="sbDot_list text-white">
                            <li>3날의 Cutting Edge</li>
                            <li>Self Threading 효과가 뛰어나<br>우수한 식립감 확보</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb07">
                <div class="pbox pbox07" id="pbox07" data-6500="opacity:0;" data-7000="opacity:1;" data-7500="opacity:0;">
                    <div class="box_wrap">
                        <h4>Catalog Download</h4>
                        <div class="btn_wrap">
                            <a href="javascript:;" class="btn catalDown btn_korDown">국문 카탈로그 다운로드 <span></span> </a>
                            <a href="javascript:;" class="btn catalDown btn_engDown">영문 카탈로그 다운로드 <span></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imgBox"   data-700="opacity:1;" data-4100="opacity:1;" data-4500="opacity:0;">
                <img src="../images/sub/4p_front.png" alt="">
            </div>
            <div class="imgBox2" data-4500="opacity:0;" data-4900="opacity:1;" data-6100="opacity:1;" data-6500="opacity:0;">
                <img src="../images/sub/4p_front_01.png" alt="">
            </div>
            <div class="imgBox3" data-6500="opacity:0"data-6900="opacity:1;"data-7500="opacity:1;"data-8000="opacity:0;" >
                <img src="../images/sub/4p_front2.png" alt="">
            </div>
        </div>
        <script>
        	$(document).ready( function() {
        		var filter_Offset = $('.ci_skrollable').offset();
        		$(window).scroll(function(){
                    var st = $(window).scrollTop();
                    console.log(st);
                    if($(document).scrollTop() < filter_Offset.top ){
        			   $('.textBox').removeClass('fixed');
                       $('.ci_skrollable .imgBox').removeClass('fixed')
                       $('.ci_skrollable h3').removeClass('fixed')
        			}
        			if ( $(document).scrollTop() > filter_Offset.top ) {
        			   $('.textBox').addClass('fixed');
                       $('.ci_skrollable .imgBox').addClass('fixed')
                       $('.ci_skrollable h3').addClass('fixed')
        			}
        		});
        	});
        </script>
        <div class="c1_cont02">
            <ul>
                <li class="c1Cont02_01">
                    <div class="inner">
                        <ul>
                            <li>
                                <img src="../images/sub/c1cont02_01.png" alt="">
                            </li>
                            <li>
                                <div class="item_wrap">
                                    <div class="">
                                        <h3>임플란트 식립을 <strong>부드럽지만 단단하게!</strong><br><strong>3-cutting edge design</strong></h3>
                                        <ul class="wDot_list">
                                            <li>Sharp Thread로 강력한 Self-Threading 효과</li>
                                            <li>Sharp Thread로 기존의 뼈를 보존하고 신생골로 생성될 수 있는 공간 확보</li>
                                            <li>Double Thread로 식립 시간 단축</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="c1Cont02_02">
                    <div class="inner">
                        <ul>
                            <li>
                                <div class="item_wrap">
                                    <div class="">
                                        <h3>플라즈마 표면처리, <strong>Clean Implant!</strong>​</h3>
                                        <ul class="wDot_list">
                                            <li>임플란트의 친수성을 향상시켜 혈액 및 단백질을 끌어당겨 빠른 골융합 유도</li>
                                            <li>인체의 면역반응에 따른 부작용이 없고, 임플란트 식립 후 시술 부위가<br>빠르게 회복됨에 따라 치유기간의 단축이 가능하여 환자의 고통과 불편함 감소</li>
                                            <li>구강 내 유해 세균들의 부착을 억제하여 임플란트의 수명을 연장</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </li>
                <li class="c1Cont02_03">
                    <div class="inner">
                        <ul>
                            <li>
                                <img src="../images/sub/c1cont02_03.png" alt="">
                            </li>
                            <li>
                                <div class="item_wrap">
                                    <div class="">
                                        <h3><span>AI </span><strong>Inspection</strong></h3>
                                        <ul class="wDot_list">
                                            <li>AI를 통한 불량 자동 검출로 보다 정확한 전수검사 가능</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="c1_cont03">
            <div class="">
                <h3>기존 임플란트 생산 공정에 <strong>AI Inspection</strong> 과 <strong>Robot Packing system</strong>을 더하다</h3>
                <p>CYBERMED CORE1 Implant!</p>
            </div>
        </div>
        <div class="c1_cont04">
            <div class="inner">
                <h3>임플란트 제조 공정</h3>
                <p>Smart Factory of Cybermed</p>
                <ul>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process01.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>01</span>
                                <p>CNC</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process02.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>02</span>
                                <p>Sand-Blasting</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process03.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>03</span>
                                <p>Etching</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process04.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>04</span>
                                <p>Cleaning</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process05.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>05</span>
                                <p>Plasma Cleaning</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process06.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>06</span>
                                <p>Final Inspection</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process07.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>07</span>
                                <p>Packaging</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/process08.jpg" alt="">
                            </div>
                            <div class="text_box">
                                <span>08</span>
                                <p>Gamma Sterilization</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="app_wrap">
                    <ul>
                        <li>
                            <img src="../images/sub/app_img.jpg" alt="">
                        </li>
                        <li>
                            <div class="item_wrap">
                                <p>사이버메드 <strong>“SMART FACTORY SYSTEM”</strong>은 특별합니다.</p>
                                <p>“SMART, SAFTY, SPECIAL” 3S 제조 공정을 임플란트 제조업 분야 최초로 제공하여 당신에게 믿음과 신뢰를 드립니다.</p>
                                <strong>이제 모바일 앱으로 확인 하실 수 있습니다.</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="c1_cont05">
            <div class="inner">
                <p>사이버메드 “SMART FACTORY SYSTEM”은 특별합니다.<br>“SMART, SAFTY, SPECIAL” 3S 제조 공정을 임플란트 제조업 분야 최초로 제공하여 당신에게 믿음과 신뢰를 드립니다.</p>
                <strong>이제 모바일 앱으로 확인 하실 수 있습니다.</strong>
            </div>
        </div>
    </div>
</article>
<?php include_once(G5_PATH.'/tail.php'); ?>

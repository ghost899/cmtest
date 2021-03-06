<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<script src="../js/skrollr.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    skrollr.init ({
        forceHeight: false,
        mobileCheck: function(){
             if((/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
                  // mobile device
             }
        }
    });
})
</script>
<style>
body{ height:auto;}
.sub_bg {background-position:right center !important;}
.lnb_2depth {display:inline-block !important;}
@media screen and (max-width:768px){
.lnb_2depth {display:none !important;}
}
</style>
<article class="sub_container">
    <div class="ci_wrap">
        <aside class="skrNav" data-0="opacity:0;"data-1000="opacity:1;"data-7500="opacity:1;"data-8000="opacity:0;">
            <ul>
                <li><a href="javascript:;" data-px="1000">Platform Switching</a></li>
                <li><a href="javascript:;" data-px="2000">Open Thread</a></li>
                <li><a href="javascript:;" data-px="3000">Internal Taper Connection</a></li>
                <li><a href="javascript:;" data-px="4000">Compact Thread</a></li>
                <li><a href="javascript:;" data-px="5000">Sharp Thread</a></li>
                <li><a href="javascript:;" data-px="6000">Cutting Edge</a></li>
                <li><a href="javascript:;" data-px="7000">Contact Us</a></li>
            </ul>
        </aside>
        <script type="text/javascript">
        $(document).ready(function(){
            $('aside ul li a').on('click', function(){
                $(this).parents('li').addClass('on')
                $(this).parents('li').siblings('li').removeClass('on')
                var px = $(this).attr('data-px');
                $('html, body').animate({scrollTop : px}, 400);
            })
            $(window).scroll(function(){
                var st = $(window).scrollTop();
                if(st>500 && st<=1500){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:first-child').addClass('on')
                }
                if(st>1500 && st<=2500){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:nth-child(2)').addClass('on')
                }
                if(st>2500 && st<=3500){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:nth-child(3)').addClass('on')
                }
                if(st>3500 && st<=4500){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:nth-child(4)').addClass('on')
                }
                if(st>4500 && st<=5500){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:nth-child(5)').addClass('on')
                }
                if(st>5500 && st<=6500){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:nth-child(6)').addClass('on')
                }
                if(st>6500 && st<=8300){
                    $('aside ul li').removeClass('on')
                    $('aside ul li:nth-child(7)').addClass('on')
                }
                if(st>8300){
                    $('aside ul li').removeClass('on')
                }
            })
        })

        </script>
        <div class="ci_skrollable">
            <div class="inner">
                <h3 data-0="opacity:0;" data-600="opacity:0;" data-1000="opacity:1;"data-6100="opacity:1;" data-6500="opacity:0;">Product Features</h3>
            </div>
            <div class="textBox tb01">
                <div class="pbox pbox01" id="pbox01" data-0="opacity:0;" data-600="opacity:0;" data-1000="opacity:1;" data-1500="opacity:0;">
                    <div class="box_wrap">
                        <span class="dnTitle">Product Features</span>
                        <strong><span>01</span>Platform Switching</strong>
                        <ul class="sbDot_list text-white">
                            <li>Bone Loss ?????????</li>
                            <li>????????? ?????????</li>
                            <li>????????? ?????????</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb02">
                <div class="pbox pbox02" id="pbox02" data-1500="opacity:0;" data-2000="opacity:1;" data-2500="opacity:0;">
                    <div class="box_wrap">
                        <span class="dnTitle">Product Features</span>
                        <strong><span>02</span>Open Thread</strong>
                        <ul class="sbDot_list text-white">
                            <li>?????? ????????? ?????????</li>
                            <li>Bone Loss ??????</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb03">
                <div class="pbox pbox03" id="pbox03" data-2500="opacity:0;" data-3000="opacity:1;" data-3500="opacity:0;">
                    <div class="box_wrap">
                        <span class="dnTitle">Product Features</span>
                        <strong><span>03</span>Internal Taper Connection</strong>
                        <ul class="sbDot_list text-white">
                            <li>???????????? ????????? ??????</li>
                            <li>?????? ?????? ??????</li>
                            <li>Bacteria ?????? ??????</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb04">
                <div class="pbox pbox04" id="pbox04" data-3500="opacity:0;" data-4000="opacity:1;" data-4500="opacity:0;">
                    <div class="box_wrap">
                        <span class="dnTitle">Product Features</span>
                        <strong><span>04</span>Compact Thread</strong>
                        <ul class="sbDot_list text-white">
                            <li>??????????????? ??????</li>
                            <li>Fixture ?????? ??????</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb05">
                <div class="pbox pbox05" id="pbox05" data-4500="opacity:0;" data-5000="opacity:1;" data-5500="opacity:0;">
                    <div class="box_wrap">
                        <span class="dnTitle">Product Features</span>
                        <strong><span>05</span>Sharp Thread</strong>
                        <ul class="sbDot_list text-white">
                            <li>????????? Self Threading ??????</li>
                            <li>???????????? ????????? ??? ?????? ?????? ??????</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb06">
                <div class="pbox pbox06" id="pbox06" data-5500="opacity:0;" data-6000="opacity:1;" data-6500="opacity:0;">
                    <div class="box_wrap">
                        <span class="dnTitle">Product Features</span>
                        <strong><span>06</span>Cutting Edge</strong>
                        <ul class="sbDot_list text-white">
                            <li>3?????? Cutting Edge</li>
                            <li>Self Threading ????????? ?????????<br>????????? ????????? ??????</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="textBox tb07">
                <div class="pbox pbox07" id="pbox07" data-6500="opacity:0;" data-7000="opacity:1;" data-7500="opacity:0;">
                    <div class="box_wrap">
                        <!-- <h4>CORE1 Implant System </h4> -->
                        <div class="btn_wrap c1">
                            <a href="../customers/support.php" class="btn catalDown btn_korDown arrow edit  c1">Contact Us<span></span> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="imgBox"   data-700="opacity:1;" data-4100="opacity:1;" data-4500="opacity:0;">
                <img src="../images/sub/4p_front.png" alt="product image">
            </div>
            <div class="imgBox2" data-4500="opacity:0;" data-4900="opacity:1;" data-6100="opacity:1;" data-6500="opacity:0;">
                <img src="../images/sub/4p_front_01.png" alt="product image">
            </div>
            <div class="imgBox3" data-6500="opacity:0"data-6900="opacity:1;"data-7500="opacity:1;"data-8000="opacity:0;" >
                <img src="../images/sub/4p_front2.png" alt="product image">
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
                                <!-- <img src="../images/sub/c1cont02_01.png" alt="background"> -->
                            </li>
                            <li>
                                <div class="item_wrap">
                                    <div class="">
                                        <h3>???????????? ????????? <strong>??????????????? ????????????!</strong><br><strong>3-cutting edge design</strong></h3>
                                        <ul class="wDot_list">
                                            <li>Sharp Thread??? ????????? Self-Threading ??????</li>
                                            <li>Sharp Thread??? ????????? ?????? ???????????? ???????????? ????????? ??? ?????? ?????? ??????</li>
                                            <li>Double Thread??? ?????? ?????? ??????</li>
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
                                        <h3>??????????????????????????,??<strong>Clean??Implant!</strong>???</h3>
                                        <ul class="wDot_list">
                                            <li>??????????????? ???????????? ???????????? ?????? ??? ???????????? ???????????? ?????? ????????? ??????</li>
                                            <li>????????? ??????????????? ?????? ???????????? ??????, ???????????? ?????? ??? ?????? ?????????<br>????????? ???????????? ?????? ??????????????? ????????? ???????????? ????????? ????????? ????????? ??????</li>
                                            <li>?????? ??? ?????? ???????????? ????????? ???????????? ??????????????? ????????? ??????</li>
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
                                <!-- <img src="../images/sub/c1cont02_03.png" alt="background"> -->
                            </li>
                            <li>
                                <div class="item_wrap">
                                    <div class="">
                                        <h3><span>AI </span><strong>Inspection</strong></h3>
                                        <ul class="wDot_list">
                                            <li>AI??? ?????? ?????? ?????? ????????? ?????? ????????? ???????????? ??????</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- <div class="c1_cont03">
            <div class="">
                <h3>?????? ???????????? ?????? ????????? <strong>AI Inspection</strong> ??? <strong>Robot Packing system</strong>??? ?????????</h3>
                <p>CYBERMED CORE1 Implant!</p>
            </div>
        </div> -->
        <div class="c1_cont04">
            <div class="inner">
                <h3>Smart Factory of Cybermed</h3>
                <p class="cont04_subtitle"></p>
                <p>?????? ???????????? ?????? ???????????<strong>AI Inspection</strong>?????<strong>Robot Packing System</strong>??? ????????? <br>CYBERMED CORE1 Implant</p>
                <p class="process_title">???????????? ?????? ??????</p>
                <ul>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>01</span>
                                        <p>????????? ??????<br>(?????????)</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp01.jpg" alt="process 1">
                            </div>
                            <div class="textBox">
                                01 ?????? ?????? (?????????)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>02</span>
                                        <p>CNC ??????<br>(??????)</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp02.jpg" alt="process 2">
                            </div>
                            <div class="textBox">
                                02 CNC ??????(??????)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>03</span>
                                        <p>??????</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp03.jpg" alt="process 3">
                            </div>
                            <div class="textBox">
                                03 ??????
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>04</span>
                                        <p>????????????<br>????????????</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp04.jpg" alt="process 4">
                            </div>
                            <div class="textBox">
                                04 ???????????? ????????????
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>05</span>
                                        <p>????????????</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp05.jpg" alt="process 5">
                            </div>
                            <div class="textBox">
                                05 ????????????
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>06</span>
                                        <p>????????????<br>(??????)</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp06.jpg" alt="process 6">
                            </div>
                            <div class="textBox">
                                06 ???????????? (??????)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>07</span>
                                        <p>????????????<br>(SEM, ?????????, ??????)</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp07.jpg" alt="process 7">
                            </div>
                            <div class="textBox">
                                07 ???????????? (SEM, ?????????, ??????)
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>08</span>
                                        <p>Plasma Cleaning</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp08.jpg" alt="process 8">
                            </div>
                            <div class="textBox">
                                08 Plasma Cleaning
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>09</span>
                                        <p>???????????? & ????????????</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp09.jpg" alt="process 9">
                            </div>
                            <div class="textBox">
                                09 ???????????? &amp; ????????????
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>10</span>
                                        <p>????????????</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp10.jpg" alt="process 10">
                            </div>
                            <div class="textBox">
                                10 ????????????
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <!-- <span class="process_dim">
                                <div class="">
                                    <div class="">
                                        <span>11</span>
                                        <p>????????????</p>
                                    </div>
                                </div>
                            </span> -->
                            <div class="img_box">
                                <img src="../images/sub/cp11.jpg" alt="process 11">
                            </div>
                            <div class="textBox">
                                11 ????????????
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap">
                            <div class="img_box">
                                <img src="../images/sub/cp12.jpg" alt="process 12">
                            </div>
                            <div class="textBox">
                                12 CORE1 Fixture
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="c1_cont05">
            <div class="inner">
                <p>??????????????? ???SMART FACTORY SYSTEM?????? ???????????????.<br>???SMART, SAFTY, SPECIAL??? 3S ?????? ????????? ???????????? ????????? ?????? ????????? ???????????? ???????????? ????????? ????????? ????????????.</p>
                <strong>?????? ????????? ?????????<br class="mob"> ?????? ?????? ??? ????????????.</strong>
            </div>
        </div>
    </div>
</article>
<?php include_once(G5_PATH.'/tail.php'); ?>

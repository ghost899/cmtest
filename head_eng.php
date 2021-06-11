<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head_eng.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head_eng.php');
    return;
}

include_once(G5_PATH.'/head_eng.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once "eng/include/MenuConfig.php";
?>
    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin_eng.inc.php'; // 팝업레이어
    }
    ?>
<body>
    <div class="mMenu">
        <div class="inner">
            <div class="mHeader">
                <h2>
                    <a href="/eng/">
                        <span class="mob_logo"></span>
                    </a>
                </h2>
                <span class="btn mobClose"></span>
            </div>
            <div class="mGnbWrap">
                <ul class="mGnb">
                    <li>
                        <a href="javascript:;">Company</a>
                        <div class="mDepth2">
                            <ul>
                                <li><a href="/eng/company/about.php">About Cybermed</a></li>
                                <li><a href="/eng/company/history.php">History</a></li>
                                <li><a href="/eng/company/rnd.php">R&amp;D</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;">Product</a>
                        <div class="mDepth2">
                            <ul>
                                <li>
                                    <a href="javascript:;">OnDemand3D</a>
                                    <ul class="mDep3">
                                        <li><a href="/eng/product/od3d.php">OnDemand3D</a></li>
                                        <li><a href="https://www.ondemand3d.com/pages/easyriter/what-is-easyriter" target="_blank">EasyRiter</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">CORE1 Implant</a>
                                    <ul class="mDep3">
                                        <li><a href="/eng/product/c1implant.php">Core1 Implant</a></li>
                                        <li><a href="/eng/product/d_implant.php">Digital Implant</a></li>
                                        <li><a href="/eng/product/s_kit.php">Surgical Kit</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/eng/product/printer.php">3D Printer</a>
                                </li>
                                <li>
                                    <a href="/eng/product/dds.php">Digital Dental Solution</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;">Community</a>
                        <div class="mDepth2">
                            <ul>
                                <li><a href="/bbs/board.php?bo_table=news_eng">News</a></li>
                                <li><a href="/bbs/board.php?bo_table=gallery_eng">Seminar and Tutorials</a></li>
                                <li><a href="commnunity/ifu.php">IFU</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:;">For Our Customers</a>
                        <div class="mDepth2">
                            <ul>
                                <li><a href="/eng/customers/support.php">Support</a></li>
								<li><a href="/eng/customers/downloads.php">Downloads</a></li>
                                <li><a href="/bbs/board.php?bo_table=faq_eng">FAQ</a></li>
                                <li><a href="/eng/customers/partner.php">Become a Partner</a></li>
                                <li><a href="/eng/customers/contact_us.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <span class="mDim"></span>
     <header>
         <h1>
             <a href="/eng/">
                 <span class="logo"></span>
             </a>
         </h1>
         <ul class="gnb">
             <li>
                 <a href="/eng/company/about.php">Company</a>
                 <div class="depth2">
                    <ul>
                        <li><a href="/eng/company/about.php">About Cybermed</a></li>
                        <li><a href="/eng/company/history.php">History</a></li>
                        <li><a href="/eng/company/rnd.php">R&amp;D</a></li>
                    </ul>
                 </div>
             </li>
             <li>
                 <a href="javascript:;">Product</a>
                 <div class="depth2">
                    <ul>
                        <li>
                            <a href="/eng/product/od3d.php">OnDemand3D</a>
                            <ul class="dep3">
                                <li><a href="/eng/product/od3d.php">OnDemand3D</a></li>
                                <li><a href="https://www.ondemand3d.com/pages/easyriter/what-is-easyriter" target="_blank">EasyRiter</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/eng/product/c1implant.php">CORE1 Implant</a>
                            <ul class="dep3">
                                <li><a href="/eng/product/c1implant.php">Core1 Implant</a></li>
                                <li><a href="/eng/product/d_implant.php">Digital Implant</a></li>
                                <li><a href="/eng/product/s_kit.php">Surgical Kit</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/eng/product/printer.php">3D Printer</a>
                        </li>
                        <li>
                            <a href="/eng/product/dds.php">Digital Dental Solution</a>
                        </li>
                    </ul>
                 </div>
             </li>
             <li>
                 <a href="javascript:;">Community</a>
                 <div class="depth2">
                    <ul>
                        <li><a href="/bbs/board.php?bo_table=news_eng">News</a></li>
                        <li><a href="/bbs/board.php?bo_table=gallery_eng">Seminar and Tutorials</a></li>
                        <li><a href="commnunity/ifu.php">IFU</a></li>
                    </ul>
                 </div>
             </li>
             <li>
                 <a href="javascript:;">For Our Customers</a>
                 <div class="depth2">
                    <ul>
                        <li><a href="/eng/customers/support.php">Support</a></li>
						<li><a href="/eng/customers/downloads.php">Downloads</a></li>
                        <li><a href="/bbs/board.php?bo_table=faq_eng">FAQ</a></li>
                        <li><a href="/eng/customers/partner.php">Become a Partner</a></li>
                        <li><a href="/eng/customers/contact_us.php">Contact Us</a></li>
                    </ul>
                 </div>
             </li>
         </ul>
         <div class="hd_etc">
            <!-- <span class="icon icon_earth"></span> -->
             <a href="https://www.ondemand3d.com/" class="btn oldSite" target="_blank">OLD SITE</a>
            <ul>
                <li><a href="../../">KOR</a></li>
                <li><a href="/eng">ENG</a></li>
            </ul>
            <div class="allMenu_wrap">
                <a href="javascript:;" class="btn btn_allMenu">
                    <span></span>
                </a>
            </div>
         </div>
         <div class="gnb_bg"></div>
     </header>

	<?php if (defined("_INDEX_")) { ?>
		<script>
			$(document).ready(function(){
				$('.gnb').mouseenter(function(){
					$('header').addClass('on')
					$('.gnb_bg, .depth2').stop().slideDown();
				})
				$('.gnb').mouseleave(function(){

					if($('.page4').hasClass('active')==true){
						$('header').addClass('on')
					}
					if($('header').hasClass('allmenu')==true){
						$('header').addClass('on')
					}else{
						$('.gnb_bg, .depth2').stop().slideUp();
						$('header').removeClass('on')
					}
				})
			})
		</script>
	<?php } ?>
	<?php if (!defined("_INDEX_")) { ?>
		 <script>
			$(document).ready(function(){
				$('.gnb').mouseenter(function(){
					$('header').addClass('on')
					$('.gnb_bg, .depth2').stop().slideDown();
				})
				$('.gnb').mouseleave(function(){
					if($('header').hasClass('allmenu on')==true){
						$('header').addClass('allmenu on')
					}else{
						// $('.gnb_bg, .depth2').stop().slideUp();
						// $('header').removeClass('on')
						$('.gnb_bg, .depth2').stop().slideUp();
						$('header').removeClass('on')
					}
				})
			})
		</script>

	<section>
	<?php } ?>

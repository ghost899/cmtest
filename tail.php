<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>
</section>
<div class="scrtop_wrap">
    <a href="javascript:;" class="btn btn_scrTop">
        <div class="btn_wrap">
            <span class="icon icon_scrTop"></span>
        </div>
        <span>TOP</span>
    </a>
</div>
<section class="footer">
    <div class="f_top">
       <div class="inner">
           <ul class="etc_menu">
               <li><a href="../etc/privacy.php" class="atv">Privacy Policy </a></li>
           </ul>
           <div class="f_sns">
               <ul>
                   <li><a href="https://www.facebook.com/cybermed.inc" class="icon f_facebook" target="_blank"></a></li>
                   <li><a href="https://www.instagram.com/cybermed_inc/" class="icon f_insta" target="_blank"></a></li>
                   <li><a href="https://www.youtube.com/channel/UCIUTvEhYJQal89mqpQ8Hiig" class="icon f_youtube" target="_blank"></a></li>
               </ul>

               <a data-index="1" href="javascript:;" class="f_scrtop" >TOP</a>

           </div>
           <script>
               $(document).ready(function(){
                   $('.f_scrtop').on('click', function(){
                       $('.onepage-pagination li:first-child a').trigger('click')
                       $('html, body').animate({'scrollTop': 0}, 500)
                   })
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


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>
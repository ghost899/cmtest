<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<link rel="stylesheet" href="../css/jquery.fs.zoomer.css">
<script src="../js/jquery.fs.zoomer.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.viewer').zoomer();
})
</script>
<style>
body{ height:auto;}
.sub_bg{background-position:right center !important;}
.lnb_2depth {display:inline-block !important;}
@media screen and (max-width:768px){
.lnb_2depth {display:none !important;}
}
</style>
<article class="sub_container">
    <div class="skit_wrap">
        <div class="inner">
            <h3>Kit 소개</h3>
            <p>직관적이고 간결해진 사이버메드의 CORE Surgical KIT</p>
            <div class="kit_list">
                <ul>
                    <li>
                        <div class="item_wrap" data-code="skit01_on.png">
                            <div class="kit_title">
                                <h4>CORE1 Guide KIT</h4>
                                <div class="btn_wrap">
                                    <a href="javascript:;" class="btn btn_kitDetail" data-code="skit01_b_01.png" data-pop="skit01">자세히보기</a>
                                </div>
                                <div class="img_box" >
                                    <div class="">
                                        <img src="../images/sub/skit01.png" alt="surgical kit 1" class="pv">
                                        <img src="../images/sub/skit01_top.png" alt="surgical kit 1" class="tv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap" data-code="skit01_on.png">
                            <div class="kit_title">
                                <h4>CORE Universal Guide KIT</h4>
                                <div class="btn_wrap">
                                    <a href="javascript:;" class="btn btn_kitDetail" data-code="skit02_b_01.png" data-pop="skit02">자세히보기</a>
                                </div>
                                <div class="img_box">
                                    <div class="">
                                        <img src="../images/sub/skit04.png" alt="surgical kit 2" class="pv">
                                        <img src="../images/sub/skit04_top.png" alt="surgical kit 2" class="tv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap" data-code="skit01_on.png">
                            <div class="kit_title">
                                <h4>CORE Master KIT (Full)</h4>
                                <div class="btn_wrap">
                                    <a href="javascript:;" class="btn btn_kitDetail" data-code="skit04_b.png" data-pop="skit03">자세히보기</a>
                                </div>
                                <div class="img_box">
                                    <div class="">
                                        <img src="../images/sub/skit03.png" alt="surgical kit 3" class="pv">
                                        <img src="../images/sub/skit03_top.png" alt="surgical kit 3" class="tv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item_wrap" >
                            <div class="kit_title">
                                <h4>CORE Master KIT (Simple)</h4>
                                <div class="btn_wrap">
                                    <a href="javascript:;" class="btn btn_kitDetail" data-code="skit03_b.png" data-pop="skit04">자세히보기</a>
                                </div>
                                <div class="img_box">
                                    <div class="">
                                        <img src="../images/sub/skit02.png" alt="surgical kit 4" class="pv">
                                        <img src="../images/sub/skit02_top.png" alt="surgical kit 4" class="tv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
					 <li>
                        <div class="item_wrap" >
                            <div class="kit_title">
                                <h4>CORE Sinus Master KIT</h4>
                                <div class="btn_wrap">
                                    <a href="javascript:;" class="btn btn_kitDetail" data-code="skit05_b.png" data-pop="skit05">자세히보기</a>
                                </div>
                                <div class="img_box">
                                    <div class="">
                                        <img src="../images/sub/skit05.png" alt="surgical kit 5" class="pv">
                                        <img src="../images/sub/skit05_top.png" alt="surgical kit 5" class="tv">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn_wrap">
                <a href="../customers/support.php" class="btn btn_broDown arrow">문의하기 <span></span> </a>
            </div>
        </div>
    </div>
</article>
<div class="skit_dim skit01">
    <div class="skit_table">
        <div class="skit_cell">
            <div class="skit_pop">
                <a href="javascript:;" class="btn cert_close"></a>
                <div class="viewer">
                    <img src="../images/sub/zoomer_img1.jpg" alt="surgical kit 1 zoom">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="skit_dim skit02">
    <div class="skit_table">
        <div class="skit_cell">
            <div class="skit_pop">
                <a href="javascript:;" class="btn cert_close"></a>
                <div class="viewer">
                    <img src="../images/sub/zoomer_img2.jpg" alt="surgical kit 2 zoom">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="skit_dim skit03">
    <div class="skit_table">
        <div class="skit_cell">
            <div class="skit_pop">
                <a href="javascript:;" class="btn cert_close"></a>
                <div class="viewer">
                    <img src="../images/sub/zoomer_img4.jpg" alt="surgical kit 3 zoom">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="skit_dim skit04">
    <div class="skit_table">
        <div class="skit_cell">
            <div class="skit_pop">
                <a href="javascript:;" class="btn cert_close"></a>
                <div class="viewer">
                    <img src="../images/sub/zoomer_img3.jpg" alt="surgical kit 4 zoom">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="skit_dim skit05">
    <div class="skit_table">
        <div class="skit_cell">
            <div class="skit_pop">
                <a href="javascript:;" class="btn cert_close"></a>
                <div class="viewer">
                    <img src="../images/sub/zoomer_img5.jpg" alt="surgical kit 4 zoom">
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('.skit_dim').on('mousedown', function(e){
            var objClass = e.target.getAttribute('class');
            if(objClass !== 'zoomer' && objClass !== 'zoomer-image' && objClass !== 'zoomer-zoom-in' &&  objClass !== 'zoomer-zoom-out'){
                $('.skit_dim').removeClass('on');
            }
        });


        $('.btn_kitDetail').on('click', function(){
            // imgSrc = $(this).attr('data-code')
            var popCode = $(this).attr('data-pop')
            $('.'+popCode).addClass('on');
            // $('.viewer').find('img').attr('src', '../images/sub/' + imgSrc)
            $('.cert_close').on('click', function(){
                $('.skit_dim').removeClass('on')
            })
        })
    })
</script>
<?php include_once(G5_PATH.'/tail.php'); ?>

<?php
include_once('./_common.php');
include_once(G5_PATH.'/head.php');
include('../include/sub_head.php');
?>
<link rel="stylesheet" href="../css/jqtransform.css">
<article class="sub_container">
    <div class="downloads_wrap">
        <h3>Downloads</h3>
        <div class="inner">
            <ul>
                <li>
                    <img src="../images/sub/downloads_main.png" alt="">
                </li>
                <li>
                    <div class="">
                        <p><span class="icon icon_ond3d"></span>OnDemand3D</p>
                        <div class="">
                            <span class="comm_sel board_search_select">
            					<select name="sfl" id="sfl">
                                    <option value="wr_subject">Version 1.0.10.7510</option>
            						<option value="wr_subject">Version 1.0.10.5345</option>
            						<option value="wr_content">Version 1.0.9.2350</option>
            					</select>
            				</span>
                        </div>
                        <div class="selectBox">
                            <p><a href="javascript:;">Read Release note ...</a></p>
                        </div>
                    </div>
                    <div class="btn_wrap">
                        <ul>
                            <li>
                                <a href="javascript:;" class="btn btn_winDown">
                                    <div class="">
                                        <img src="../images/sub/windows.png" alt="windows">
                                        <strong>DOWNLOAD</strong>
                                        <p><span>Windows x64</span></p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:international@cybermed.co.kr" class="link_trial">
                                    Contact Cybermed<br>for free trial
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="down_table_wrap">
                <h4>System requirements</h4>
                <table class="table_typeA">
                    <colgroup>
                        <col style="width:20%;">
                        <col style="width:80%;">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Item</th>
                            <th>Requirement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CPU</td>
                            <td>2GHz dual core or higher</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td>2GB or higher (higher than 4GB recommended)</td>
                        </tr>
                        <tr>
                            <td>Dedicated Video Memory</td>
                            <td>1GB or higher (higher than 2GB recommended)</td>
                        </tr>
                        <tr>
                            <td>OpenGL</td>
                            <td>OpenGL 2.1 or higher</td>
                        </tr>
                        <tr>
                            <td>DirectX</td>
                            <td>DirectX 9.0 or higher</td>
                        </tr>
                        <tr>
                            <td>GPU</td>
                            <td> nVidia made within the last years (GT 650 or later recommended)</td>
                        </tr>
                        <tr>
                            <td>OS</td>
                            <td>Microsoft Windows XP / Vista / 7 / 8 / 10 (32bit/64bit)</td>
                        </tr>
                        <tr>
                            <td>Accessibility Rights Needed</td>
                            <td>[Admin] account with full administration rights</td>
                        </tr>
                        <tr>
                            <td>ETC</td>
                            <td>USB port, Mouse, Keyboard, Network card, CD-R/RW drive</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</article>
<script type="text/javascript" src="../js/jquery.jqtransform.js"></script>
<script type="text/javascript">
    $('.comm_sel').jqTransform();
</script>
<?php include_once(G5_PATH.'/tail.php'); ?>

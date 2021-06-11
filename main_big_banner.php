<?php
$sub_menu = "100440";
include_once('./_common.php');

if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');


$sql = " select * from {$g5['main_big_banner_table']} order by mb_no desc";
$result = sql_query($sql);

$g5['title'] = "메인배너관리";
include_once('./admin.head.php');

$colspan = 7;
?>

<div id="menulist" class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <thead>
    <tr>
        <th scope="col">이미지</th>
        <th scope="col">이미지</th>
        <th scope="col">링크</th>
        <th scope="col">Text1</th>
        <th scope="col">Text2</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i=0; $row=sql_fetch_array($result); $i++)
    {
    ?>
    <tr class="<?php echo $bg; ?> menu_list menu_group_<?php echo substr($row['me_code'], 0, 2); ?>">
        <td width="30%">
			<?
			$img_file = G5_DATA_PATH.'/main_big_banner_image/'.$row['mb_userfile'];
            if (file_exists($img_file) && $row['mb_userfile']) {
			?>
				<img src="/data/main_big_banner_image/<?=$row["mb_userfile"]?>" width="300">
			<?}?>
        </td>
        <td width="30%">
			<?
			$img_file2 = G5_DATA_PATH.'/main_big_banner_image/'.$row['mb_userfile2'];
            if (file_exists($img_file2) && $row['mb_userfile2']) {
			?>
				<img src="/data/main_big_banner_image/<?=$row["mb_userfile2"]?>" width="700">
			<?}?>
        </td>
        <td>
			<a href="<?=$row["mb_link"]?>" <?=($row["mb_link_target"]=="Y" ? "target=\"_blank\"" : "")?>><?=$row["mb_link"]?></a>
        </td>
        <td>
			<?=$row["mb_text1"]?>
        </td>
        <td>
			<?=$row["mb_text2"]?>
        </td>
        <td class="td_mng">
			<a href="./main_big_banner_form.php?sst=&amp;sod=&amp;sfl=&amp;stx=&amp;page=&amp;w=u&amp;mb_no=<?=$row["mb_no"]?>" class="btn btn_03">수정</a>
            <!--a href="#javascript:;" onclick="banner_del(<?=$row["mb_no"]?>);" class="btn btn_02">삭제</a-->
        </td>
    </tr>
    <?php
    }

    if ($i==0)
        echo '<tr id="empty_menu_list"><td colspan="'.$colspan.'" class="empty_table">자료가 없습니다.</td></tr>';
    ?>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <?php if ($is_admin == 'super') { ?>
    <!--a href="./main_big_banner_form.php" id="member_add" class="btn btn_01">배너추가</a-->
    <?php } ?>
</div>

<script>
	function banner_del(val){
		if(confirm("삭제 하시겠습니까?")) {
			location.href='./main_big_banner_form_update.php?w=d&mb_no='+val;
			return false;
		}else{
			return false;
		}
	}
</script>

<?php
include_once ('./admin.tail.php');
?>

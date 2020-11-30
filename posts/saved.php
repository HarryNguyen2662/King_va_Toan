<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("../config/connect.php");
include("../includes/fetch_users_info.php");
include ("../includes/time_function.php");
include ("../includes/num_k_m_count.php");
if(!isset($_SESSION['Username'])){
    header("location: ../index");
}
if (is_dir("imgs/")) {
    $check_path = "";
}elseif (is_dir("../imgs/")) {
    $check_path = "../";
}elseif (is_dir("../../imgs/")) {
    $check_path = "../../";
}
?>
<html dir="<?php echo lang('html_dir'); ?>">
<head>
    <title>Saved posts | BeU - Social Network For High School Students</title>
    <meta charset="UTF-8">
 	<meta name="description" content="BeU là m&#7841;ng xã h&#7897;i thu nh&#7887; dành cho h&#7885;c sinh có cùng s&#7903; thích và tính cách.">
    <meta name="keywords" content="homepage,main,login,social network,social media,beu,meet">
    <meta name="author" content="King Toan">   
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head_imports_main.php";?>
</head>
<body>
<!--=============================[ NavBar ]========================================-->
<?php include "../includes/navbar_main.php"; ?>
<div class="main_container" align="center">
    <div style="display: inline-flex" align="center">
        <div align="left">
        <table class="postSavedTable">
            <tr style="font-weight: bold; text-transform: uppercase; color: rgba(0, 0, 0, 0.59); font-size: 13px; background: rgb(241, 241, 241); border-bottom: 2px solid #46a0ec;">
                <td><?php echo lang('all_posts_that_you_saved'); ?></td>
                <td align="center"><span class="fa fa-cog"></span></td>
            </tr>
            <?php include "../includes/fetch_posts_saved.php"; ?>
        </table>
        <?php
        if ($countSaved < 1) {
        ?>
        <div class="saved_nothingToShow">
            <p>
            <span class="fa fa-newspaper-o" style="font-size: 62px;"></span><br>
            <?php echo lang('nothing_saved_yet'); ?>.</p>
        </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>
<?php include "../includes/endJScodes.php"; ?>
</body>
</html>

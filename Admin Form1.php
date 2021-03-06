<?php
include ("include/connection.php");
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add New Hospitals</title>
<link rel="stylesheet" type="text/css" media="all" href="Admin-Form/Admin Form_files/screen7.css">
<style type="text/css" media="all">

ul {
    list-style-type: none;
	position:top;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #c4e3ed;
}

li {
    float: left;
}

li a, .dropbtn {
	font-family:Lucida Sans Unicode;
    display: inline-block;
    color: black;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #ebf6f9;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

body{
	background: #FCFCFC;
	background-size: cover;
	font-family: 'Lato',sans-serif;
	font-size: 13px;
	background-position: 50% 50%;
}

.form_table{
	width: 650px;
	margin-top:40px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom:auto;
	border-radius: 0;
	border: 1px solid #D9DDE2;
	background: #FFFFFF;
	background-size: cover;
	color: #36454E;
	overflow: hidden;
	box-shadow: none;
	background-position: 50% 50%;
	}

.form_table a{
	color: #0D47A1;
}

.outside a{
	color: #0D47A1;
}

.form_table a:visited{
	color: #0D47A1;
}

.outside a:visited{
	color: #0D47A1;
}

.segment_header{
	width: auto;
	margin: 1px;
	color: #FFFFFF;
	background: #2196F3;
	background-size: cover;
	background-repeat: repeat;
	background-position: 50% 50%;
	border-radius: 0;
}

.segment_header h1{
	border-radius: 0;
	padding: 20px 10px;
	font-family: 'Lato',sans-serif;
}

.q{
	padding: 10px;
	margin-bottom: 10px;
	margin-left: 10px;
	float: left;
	display: block;
}

.q .question{
	font-weight: bold;
}

.q .left_question_first{
	width: 15em;
}

.required .icon{
	background-image: none;
	background-position: left;
	background-repeat: no-repeat;
	font-size: 13px;
	padding-left: 14px;
}

.q .text_field{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin: 1px 0;
	padding: 10px;
}

.q .file_upload{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin-top: 1px;
	padding: 10px;
}

.q .file_upload_button{
	margin-top: 2px;
}

.q .inline_grid td{
	padding: 5px;
	vertical-align: baseline;
}

.q .drop_down{
	background: #FFFFFF;
	border: 1px solid #D9DDE2;
	border-radius: 2px;
	border-width: 1px;
	color: #36454E;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	margin: 1px 0;
	padding: 9px;
}

.q .matrix th{
	color: #7A858B;
	background: #F0F2F4;
	padding: 5px;
	font-weight: bold;
	text-align: center;
	vertical-align: bottom;
}

.q .matrix td{
	padding: 5px;
	text-align: center;
	white-space: nowrap;
	height: 26px;
	border-bottom: 1px solid #D9DDE2;
	border-top: 1px solid #D9DDE2;
}

.q .matrix td.question{
	border-right: 1px solid #D9DDE2;
	font-weight: normal;
}

.q .matrix .multi_scale_sub th{
	font-weight: normal;
	border-top: 1px solid #D9DDE2 !important;
	background: #F4F6F9;
}

.q .matrix .multi_scale_break{
	border-right: 1px solid #D9DDE2;
}

.q .matrix_row_dark td{
	color: #36454E;
	background: #FCFCFC;
}

.q .matrix_row_dark td.question{
	color: #36454E;
	background: #FCFCFC;
}

.q .matrix_row_light td{
	color: #36454E;
	background: #FFFFFF;
}

.q .matrix_row_light td.question{
	color: #36454E;
	background: #FFFFFF;
}

.q .rating_ranking td{
	padding: 5px;
}

.q .scroller{
	border: 1px solid #D9DDE2;
}

.highlight{
	background: #FFF9C4             !important;
}

tr.highlight td{
	background: #FFF9C4             !important;
}

.outside{
	color: #36454E;
}

.outside_container{
	width: 650px;
	padding: 1em 0;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	color: #36454E;
}

.outside_container .submit_button{
	color: #FFFFFF !important;
	background: #1795FF;
	background-size: auto;
	border-style: none;
	border-width: 0px;
	border-color: #FFFFFF;
	border-radius: 2px;
	text-align: center;
	font-family: 'Lato',sans-serif;
	font-size: 14px;
	font-weight: normal;
	min-width: 20%;
	padding: 10px 30px;
	text-transform: none;
	box-shadow: none;
}

.outside_container .submit_button:hover{
	background: #106AB7;
	border-color: #BBBBBB;
}

.progressBarWrapper{
	border-radius: 0;
	background: #FFFFFF;
	background-size: cover;
	border-color: #D9DDE2;
}

.progressBarBack{
	color: #FFFFFF;
	background-color: #1795FF;
}

.progressBarFront{
	color: #36454E;
}

.ui-widget{
	font-family: 'Lato',sans-serif;
}

.invalid{
	background: #FDF1F0;
}

.invalid .invalid_message{
	color: #EC756B;
	background: #FDF1F0;
	border: 1px solid #EC756B;
	border-radius: 2px;
}

.form_table.invalid{
	border: 2px solid #EC756B;
}

.invalid .matrix .invalid_row{
	background: #FDF1F0;
}


#upload{
	font-family:Lucida Sans Unicode;
}
</style>
<script type="text/javascript" src="./Admin Form_files/jquery.min.js.download"></script>
<script type="text/javascript" src="./Admin Form_files/jquery-ui.min.js.download"></script>
<script type="text/javascript" src="./Admin Form_files/form7.js.download"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body  style=" background-image:url(images/admin1.jpg); background-repeat: no-repeat; background-attachment:fixed; margin:0px;">

<ul>
<li></li>
<li><a href="adminhome1.php"><i class="fa fa-angle-left" style="font-size:24px"></i></a></li>
<li><a href="index.php"><i class="fa fa-home" style="font-size:24px"></i></a></li>
<li style="padding:20px 16px;font-family:Lucida Sans Unicode;">HEALTHCARE MANTRAS</li>
  <div style="float:right;">
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">HOSPITALS</a>
    <div class="dropdown-content">
      <a href="table.php">AVAILABLE</a>
      <a href="Admin-form\Admin Form.php">ADD NEW</a>
    </div>
	<li><a href="logout.php">LOGOUT</a></li>
  </li>
  </div>
</ul>

<p align="right" style="font-size:20px;font-family:Lucida Sans Unicode;"></p>

<form action="Admin Form1.php" method="POST" enctype="multipart/form-data">
<div class="form_table">

<div class="clear"></div>

<div id="q25" class="q full_width">
<a class="item_anchor" name="ItemAnchor0"></a>
<div class="segment_header" style="width:auto;text-align:Center;"><h1 style="font-size:30px;padding:20px 1em ;">ADMIN</h1></div>
</div>

<div class="clear"></div>


<div id="q2" class="q required">
<a class="item_anchor" name="ItemAnchor1"></a>
<input type="text" name="name" class="text_field" id="RESULT_TextField-1" placeholder="Hospital&#39;s  Name" size="80" maxlength="255" value="">

</div>

<div class="clear"></div>

<div id="q6" class="q required">
<a class="item_anchor" name="ItemAnchor2"></a>
<input type="text" name="address" class="text_field" id="RESULT_TextField-2" placeholder="Hospital&#39;s Address" size="80" maxlength="255" value="">
</div>

<div class="clear"></div>

<!----------------------------------------------- IMAGE UPLOAD ---------------------------------------------->
<div id="q8" class="q required">
<a class="item_anchor" name="ItemAnchor3"></a>


    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">


<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
	{
		
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }
	else 
	{
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


<!------------------------------------------------------------------------------------------------------------>

</div>

<div class="clear"></div>

<div id="q11" class="q required">
<a class="item_anchor" name="ItemAnchor4"></a>
<input type="text" name="priority" class="text_field" id="RESULT_TextField-4" placeholder="Priority" size="80" maxlength="255" value="">
</div>
<br>
<br>
<br>
<br>
<input type="hidden" name="EParam" value="FzpUCZwnDno=">
<br>
<br>
<br>
<br>
<br>
<div class="outside_container">
<div class="buttons_reverse">
<input type="submit" name="Submit" value="Submit" class="submit_button" id="FSsubmit"></div></div>
</div>
</form>

</body></html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
$name=$_POST['name'];
$address=$_POST['address'];
$priority=$_POST['priority'];
$sql="insert into hospitals (name,address,image,priority) values ('$name','$address','$target_file','$priority')";
mysqli_query($con,$sql);
}
?>

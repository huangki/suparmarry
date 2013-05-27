<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Runners Records  by SooChow</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
 
</head>
<body>
<div id="wrapper">
  <div id="menu-wrapper">
    <div id="menu" class="container">
      <ul>
        <li class="current_page_item"><a href="index.php">Homepage</a></li>
        <li><a href="insert.php">繼續新增</a></li>
        <li><a href="#">Downlaod App</a></li>
        <li><a href="#">Photos</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Links</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>
  <div id="logo" class="container">
    <h1><a href="#">Runners Records</a></h1>
    <p>Soochow international ultra-marathon</p>
  </div>
 
<style type=text/css>
<!--
body{
background-image:url(https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/267695_553848007999497_582165238_n.jpg);
background-position:80% 20%;
background-attachment:fixed;
background-repeat:no-repeat;}
-->
</style>
</head>
<body>
<font color="#dedede" face="Verdana" size="6">
        Runners Records
</font><br>
<font color="#37FDFF" face="Verdana" size="4">
        copyright SooChow
</font><br>
<br>
<font color="#FF0000" face="微軟正黑體" size="6">
        資料新增成功
</font>
</body>
<?php

$link = mysql_connect("127.0.0.1","root","1111");

mysql_select_db("fj",$link);

$a=$_POST['SEQnumber'];
$b=$_POST['idnumber'];
$c=$_POST['TimeArrive'];
$d=$_POST['SpendTime'];
$e=$_POST['name'];
$e=iconv("UTF-8","big5",$e);
//先透過 iconver 先行轉換 
$f=$_POST['sex'];
$g=$_POST['tpyesofgame'];

$sql = "INSERT into demorun(SEQ,ID,ATIME,TIME,NAME,GENDER,CAT) Values ('$a','$b','$c','$d','$e','$f','$g')";
mysql_query("SET NAMES BIG5");
//mysql_query("SET CHARACTER_SET utf8");
//強制資料庫  進行編碼轉換  因為 一般WINDOWS作業系統  預設都是BIG5
mysql_query($sql,$link);
mysql_close($link);
?>
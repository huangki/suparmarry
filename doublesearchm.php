<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Vestibule 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130406

-->
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
				<li><a href="doublesearchm.php">雙日賽男子組</a></li>
				<li><a href="doublesearchf.php">雙日賽女子組</a></li>
				<li><a href="triplesearchm.php">三日賽男子組</a></li>
				<li><a href="triplesearchf.php">三日賽女子組</a></li>
				
				<li><a href="finalsearchm.php">全程賽男子組</a></li>
				<li><a href="finalsearchf.php">全程賽女子組</a></li>
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
		<h1><a href="#">Runners Records</a></h1>
		<p>Soochow international ultra-marathon</p>
	</div>
	 
	<?php
 
	$str="SELECT*FROM`rundaydouble` where `GENDER`='M' order by `SUMTIME` ;"; 
	$link_ID = mysql_connect("127.0.0.1","root","1111");  
     mysql_select_db("fj");  
     mysql_query("SET NAMES BIG5");
     //mysql_query("SET CHARACTER_SET utf8");
 
     $result = mysql_query($str,$link_ID);  
     $sn_index = mysql_num_rows($result); //查詢結果的記錄筆數（rows）

?>
<h2 align="center">雙日賽男子選手總排名</h2>
<br><br><br>
<TABLE ALIGN=center BORDER=1 >
<TR ALIGN =CENTER> 
<TD >
排名
</TD>
<TD WIDTH = 100>
ID編號
</TD>
<TD >
姓名
</TD>
<TD  >
性別
</TD>
<TD WIDTH = 120>
第一天抵達時間
</TD>
<TD WIDTH = 120>
第二天抵達時間
</TD>
<TD WIDTH = 120>
總共花費時間
</TD>
<TD>
產生獎狀
</TD>
</TR> 
<?php 
$tt=0;
while (list($a,$b,$c,$d,$e,$f)=mysql_fetch_row($result)){
$tt ++; 
?>
<TR ALIGN =CENTER>
<TD><?echo $tt;$ll=$tt;?></TD> 
<TD><?echo $a; ?></TD> 
<TD WIDTH = 100><?echo $b=iconv("big5","UTF-8",$b);?></TD> 
<TD ><?echo $c;?></TD>
<TD WIDTH = 120><?echo $d;?></TD>
<TD WIDTH = 120><?echo $e;?></TD> 
<TD WIDTH = 120><?echo $f;  $se=$f;?></TD> 
<TD>
<form   action="doublem.php" >
<input type="hidden" name="q"  value="<?php echo $c?>">
<input type="hidden" name="w"  value="<?php echo $b?>">
<input type="hidden" name="r"  value="<?php echo $f?>">
<input type="hidden" name="t"  value="<?php echo $day.$bb?>">
<input type="hidden" name="rank"  value="<?php echo $ll?>">
<input type="hidden" name="RACE"  value="<?php echo $ca?>">
<input type="hidden" name="G"  value="<?php echo $se?>">
<input  type="submit" value="產生證書">
</form>
  

</TD> 
</TR>
<?}; 
mysql_close($link_ID); 

?>
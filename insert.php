<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Runners Records  by SooChow</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
</head>
<body>
<div id="wrapper">
  <div id="menu-wrapper">
    <div id="menu" class="container">
      <ul>
        <li class="current_page_item"><a href="index.php">Homepage</a></li>
        <li><a href="#">About Race</a></li>
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
<br>
<br>
<br>

<table align="center">
<form method ="post"  name="form2" onSubmit="return check(this)"  action="insertion.php">
<tr><td width="5px" align="center"><font>SELECTDATE：</td><td><input name="Sdate" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font>SEQ：</td><td><input name="SEQnumber" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font>ID：</td><td><input name="idnumber" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font>ATime：</td><td><input name="TimeArrive" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font>Time：</td><td><input name="SpendTime" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font>Name：</td><td><input name="name" type="text" > <br></td></tr>
 <tr><td width="5px" align="center"><font>Gender：</td><td><input name="sex" type="text"> <br></td></tr>
 
 <tr><td width="5px" align="center"><font>Cate：</td><td><input name="tpyesofgame" type="text"> <br></td></tr>
 <tr></tr>
 <tr><td colspan="2" width="5px" align="center"><font color="#dedede">



<input type="reset" value="reset"
       style="color: #FFFFFF; font-size: 8pt;
       background-color: #000000" />

<input type="submit" value="submit"
       style="color: #FFFFFF; font-size: 8pt;
       background-color: #000000" /><br>










</td>


</table>
</form>


<Script Language='JavaScript'>
function check(form2) {
 
if(form2.SEQnumber.value == "") {
alert("未輸序號");
 return false;
}
 
else if(form2.idnumber.value == "") {
alert("未輸入ID");
 return false;
}
 
else if(form2.TimeArrive.value == "") {
alert("未輸入抵達時間");
 return false;
}
 
else if(form2.SpendTime.value == "") {
alert("未輸入花費時間");
 return false;
}
 
else if(form2.name.value == "") {
alert("未輸入姓名");
 return false;
}
 else if(form2.sex.value == "") {
alert("未輸入性別");
 return false;
}
else if(form2.tpyesofgame.value == "") {
alert("未輸入參賽組別");
 return false;
}
else if(form2.Sdate.value == "") {
alert("未選擇天數");
 return false;
}
else{
 form2.submit();}
 }
</script>
</body>

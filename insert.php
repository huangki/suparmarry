<head>


<style type=text/css>
<!--
body{
background-image:url(https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/267695_553848007999497_582165238_n.jpg);
background-position:80% 20%;
background-attachment:fixed;
background-repeat:no-repeat;}
-->
</style>
<font color="#dedede" face="Verdana" size="6">
        Runners Records
</font><br>
<font color="#37FDFF" face="Verdana" size="4">
        copyright SooChow
</font>
</head>
<br>
<br>
<br>
<body bgcolor="black">
<table align="center">
<form method ="post"  name="form2" onSubmit="return check(this)"  action="insertion.php">
<tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">SELECTDATE：</td><td><input name="Sdate" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">SEQ：</td><td><input name="SEQnumber" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">ID：</td><td><input name="idnumber" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">ATime：</td><td><input name="TimeArrive" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Time：</td><td><input name="SpendTime" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Name：</td><td><input name="name" type="text" > <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Gender：</td><td><input name="sex" type="text"> <br></td></tr>
 
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Cate：</td><td><input name="tpyesofgame" type="text"> <br></td></tr>
 <tr></tr>
 <tr><td colspan="2" width="5px" align="center"><font color="#dedede">




<style type="text/css">


input.groovybutton1
{
   float:right;
   display:inline;
   font-size:10px;
   font-family:Verdana,sans-serif;
   color:#FFFFFF;
   background-color:#000000;
}


</style>


<input
   type="reset"
   class="groovybutton1"
   value="reset"
   title="">






<style type="text/css">
input.groovybutton2
{
   float:right;
   display:inline;
   font-size:10px;
   font-family:Verdana,sans-serif;
   color:#FFFFFF;
   background-color:#000000;
}
</style>
 <input
   type="submit"
   class="groovybutton2"
   value="submit"
   title="">


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

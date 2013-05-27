<td valign="top"> 
<table  BORDER="3" BACKGROUND= "RUNPAPER.jpg" align="center" width="645" height="455"> 
<td align="center" valign="center">
<table  border="0" style="position:absolute; left:460px; top:220px;" width="250" height="200"> 

<TR>
<TD align="center"   colspan="2">
<?php
$_GET["RACE"];
if($RACE==1){echo "<b><font size='20px' face='標楷體'>單日賽</font>";}
else if($RACE==2){echo "<b><font size='20px' face='標楷體'>雙日賽</font>";}
else if($RACE==0){echo "<b><font size='20px' face='標楷體'>雙日賽</font>";}
 $_GET["G"];
 {echo "男子組";}
 
?>
</TD>



<TR>
<TD align="center"><? echo "<font face='標楷體'>姓名：";?></TD><TD align="center"><?echo "<font face='標楷體'>".$_GET["w"];?></TD></TR>

<TR>
<TD align="center"><? echo "<font face='標楷體'>共耗時：";?></TD><TD align="center"><?echo "<font face='標楷體'>".$_GET["r"];?></TD></TR>
<TR>
<TR>


<TR>
<TD align="center" colspan="2"><? echo "<font face='標楷體'>排名：".$_GET["rank"];?></TD></TR></td></tr> 
</font></table> 
</td> 
</tr> 
</table> 

  
</td> 

  

  
</td> 
</tr> 
</table> 

</td> 
</tr> 
</table>
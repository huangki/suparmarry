<center><form name=loading> 
Now Loading ...<br><br>
<h3><input type=text name=chart size=60 style="font-family:Arial; font-size: 9pt; color:#000000; border-style:none;"></h3>
<br>
<input type=text name=percent size=10 style="font-family:Tahoma; font-size: 10pt; color:#000000; text-align:center; border-style:none;">
<script language="JavaScript">
var bar=0 
var line="|" 
var amount="|" 
count() 
function count(){ 
bar=bar+1
amount =amount + line 
document.loading.chart.value=amount 
document.loading.percent.value=bar+"%" 
if (bar<100) 
{setTimeout("count()",100);} 
else 
{window.location = "us.php";} 
}
</script></form><center>
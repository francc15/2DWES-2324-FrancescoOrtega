<HTML> 
<HEAD> 
<TITLE> EJ1-Conversion IP decimal a Binario </TITLE> 
</HEAD> 
<BODY> 
<?php $ip = "192.18.16.204"; 
$digito= explode (".", $ip);
for($i=0;$i<count($digito);$i++){
	$ip_digitos[$i]=decbin($digito[$i]);
	}	
	var_dump ($ip_digitos);
?>
</BODY> 
</HTML>

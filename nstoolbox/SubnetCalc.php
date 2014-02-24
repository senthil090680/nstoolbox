<link href="css/style.css" rel="stylesheet" type="text/css" />
<?php
//Start table
print "<table cellpadding=\"2\">\n<COL span=\"4\" align=\"left\">\n" ;


if (empty($_POST['my_net_info'])){
	tr('Use IP & CIDR Netmask:&nbsp;', '10.0.0.1/22');
	tr('Or IP & Netmask:','10.0.0.1 255.255.252.0');
	tr('Or IP & Wildcard Mask:','10.0.0.1 0.0.3.255');
	print $end ;
	exit ;
}

$my_net_info=rtrim($_POST['my_net_info']);


if (! ereg('^([0-9]{1,3}\.){3}[0-9]{1,3}(( ([0-9]{1,3}\.){3}[0-9]{1,3})|(/[0-9]{1,2}))$',$my_net_info)){
	tr("Invalid Input.");
	tr('Use IP & CIDR Netmask:&nbsp;', '10.0.0.1/22');
	tr('Or IP & Netmask:','10.0.0.1 255.255.252.0');
	tr('Or IP & Wildcard Mask:','10.0.0.1 0.0.3.255');
	print $end ;
	exit ;
}

if (ereg("/",$my_net_info)){  //if cidr type mask
	$dq_host = strtok("$my_net_info", "/");
	$cdr_nmask = strtok("/");
	if (!($cdr_nmask >= 0 && $cdr_nmask <= 32)){
		tr("Invalid CIDR value. Try an integer 0 - 32.");
		print "$end";
		exit ;
	}
	$bin_nmask=cdrtobin($cdr_nmask);
	$bin_wmask=binnmtowm($bin_nmask);
} else { //Dotted quad mask?
    $dqs=explode(" ", $my_net_info);
	$dq_host=$dqs[0];
	$bin_nmask=dqtobin($dqs[1]);
	$bin_wmask=binnmtowm($bin_nmask);
	if (ereg("0",rtrim($bin_nmask, "0"))) {  //Wildcard mask then? hmm?
		$bin_wmask=dqtobin($dqs[1]);
		$bin_nmask=binwmtonm($bin_wmask);
		if (ereg("0",rtrim($bin_nmask, "0"))){ //If it's not wcard, whussup?
			tr("Invalid Netmask.");
			print "$end";
			exit ;
		}
	}
	$cdr_nmask=bintocdr($bin_nmask);
}

//Check for valid $dq_host
if(! ereg('^0.',$dq_host)){
	foreach( explode(".",$dq_host) as $octet ){
 		if($octet > 255){ 
			tr("Invalid IP Address");
			print $end ;
			exit;
		}
	
	}
}

$bin_host=dqtobin($dq_host);
$bin_bcast=(str_pad(substr($bin_host,0,$cdr_nmask),32,1));
$bin_net=(str_pad(substr($bin_host,0,$cdr_nmask),32,0));
$bin_first=(str_pad(substr($bin_net,0,31),32,1));
$bin_last=(str_pad(substr($bin_bcast,0,31),32,0));
$host_total=(bindec(str_pad("",(32-$cdr_nmask),1)) - 1);

if ($host_total <= 0){  //Takes care of 31 and 32 bit masks.
	$bin_first="N/A" ; $bin_last="N/A" ; $host_total="N/A";
	if ($bin_net === $bin_bcast) $bin_bcast="N/A";
}

//Determine Class
if (ereg('^0',$bin_net)){
	$class="A";
	$dotbin_net= "<font color=\"Green\">0</font>" . substr(dotbin($bin_net,$cdr_nmask),1) ;
}elseif (ereg('^10',$bin_net)){
	$class="B";
	$dotbin_net= "<font color=\"Green\">10</font>" . substr(dotbin($bin_net,$cdr_nmask),2) ;
}elseif (ereg('^110',$bin_net)){
  	$class="C";
	$dotbin_net= "<font color=\"Green\">110</font>" . substr(dotbin($bin_net,$cdr_nmask),3) ;
}elseif (ereg('^1110',$bin_net)){
  	$class="D";
	$dotbin_net= "<font color=\"Green\">1110</font>" . substr(dotbin($bin_net,$cdr_nmask),4) ;
	$special="<font color=\"Green\">Class D = Multicast Address Space.</font>";
}else{
  	$class="E";
	$dotbin_net= "<font color=\"Green\">1111</font>" . substr(dotbin($bin_net,$cdr_nmask),4) ;
	$special="<font color=\"Green\">Class E = Experimental Address Space.</font>";
}

if (ereg('^(00001010)|(101011000001)|(1100000010101000)',$bin_net)){
  	 $special='<a href="http://www.ietf.org/rfc/rfc1918.txt">( RFC-1918 Private Internet Address. )</a>';
}





// Print Results
tr('Address:',"<font color=\"blue\">$dq_host</font>");
tr('Starting IP:', '<font color="blue">'.bintodq($bin_first).'</font>');
tr('Ending IP:', '<font color="blue">'.bintodq($bin_last).'</font>');
tr('Max Host Nos:', '<font color="blue">'.$host_total.'</font>', "$special");
tr('Netmask:','<font color="blue">'.bintodq($bin_nmask)." = $cdr_nmask</font>");
tr('Network:', '<font color="blue">'.bintodq($bin_net).'</font>');

tr('Class:',"<font color=\"blue\">Class $class</font>");
tr('Wildcard:', '<font color="blue">'.bintodq($bin_wmask).'</font>');
tr('Broadcast:','<font color="blue">'.bintodq($bin_bcast).'</font>');









 echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
      echo "<tr>";
	
    echo "<td align='left' valign='top' class='topline' width='100%'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
      echo "<tr>";
        echo "<td width='1%' align='left' valign='top' class='txt'><img src='images/topleft.jpg' width='17' height='57'></td>";
		  
          echo "<td width='33%' height='57' align='center' valign='middle' class='txt'>".bintodq($bin_first)."</td>";
     
	  echo "<td width='1%' align='right' valign='top' class='txt'><img src='images/righttop.jpg' width='17' height='57'></td>";
      
      echo "</tr>";
  
  
  
            echo "<tr>";
			echo "<td width='1%' align='left' valign='top' class='lline'>&nbsp;</td>";
         							
				echo "<td height='44' width='33%' align='center' valign='middle' class='txt'>&nbsp;</td>";					
           		 
			echo "<td width='1%' align='right' valign='top' class='rline'>&nbsp;</td>";	
            echo "</tr>";
     
	 
	 
		 echo "<tr>";
			echo "<td width='1%' align='left' valign='top' class='botline'><img src='images/leftbot.jpg' width='17' height='19'></td>";
         							
				echo "<td width='32%' align='center' valign='middle' class='botline'>&nbsp;</td>";					
           		 
			echo "<td width='1%' align='right' valign='top' class='botline'><img src='images/botright.jpg' width='17' height='19'></td>";	
            echo "</tr>";
      	
	
	  echo "</table>";
	  echo "</td>";
	  echo "</tr>";
	   
echo "</table>";



















print "$end";

function binnmtowm($binin){
	$binin=rtrim($binin, "0");
	if (!ereg("0",$binin) ){
		return str_pad(str_replace("1","0",$binin), 32, "1");
	} else return "1010101010101010101010101010101010101010";
}

function bintocdr ($binin){
	return strlen(rtrim($binin,"0"));
}

function bintodq ($binin) {
	if ($binin=="N/A") return $binin;
	$binin=explode(".", chunk_split($binin,8,"."));
	for ($i=0; $i<4 ; $i++) {
		$dq[$i]=bindec($binin[$i]);
	}
        return implode(".",$dq) ;
}

function bintoint ($binin){
        return bindec($binin);
}

function binwmtonm($binin){
	$binin=rtrim($binin, "1");
	if (!ereg("1",$binin)){
		return str_pad(str_replace("0","1",$binin), 32, "0");
	} else return "1010101010101010101010101010101010101010";
}

function cdrtobin ($cdrin){
	return str_pad(str_pad("", $cdrin, "1"), 32, "0");
}

function dotbin($binin,$cdr_nmask){
	// splits 32 bit bin into dotted bin octets
	if ($binin=="N/A") return $binin;
	$oct=rtrim(chunk_split($binin,8,"."),".");
	if ($cdr_nmask > 0){
		$offset=sprintf("%u",$cdr_nmask/8) + $cdr_nmask ;
		return substr($oct,0,$offset ) . "&nbsp;&nbsp;&nbsp;" . substr($oct,$offset) ;
	} else {
	return $oct;
	}
}

function dqtobin($dqin) {
        $dq = explode(".",$dqin);
        for ($i=0; $i<4 ; $i++) {
           $bin[$i]=str_pad(decbin($dq[$i]), 8, "0", STR_PAD_LEFT);
        }
        return implode("",$bin);
}

function inttobin ($intin) {
        return str_pad(decbin($intin), 32, "0", STR_PAD_LEFT);
}

function tr(){
	echo "\t<tr>";
	for($i=0; $i<func_num_args(); $i++) echo "<td>".func_get_arg($i)."</td>";
	echo "</tr>\n";
}
?>

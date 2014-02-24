<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<?php

if(!empty($_POST['host']) && !empty($_POST['type'])){

    // Grab variable from form and define valid types

    $host = $_POST['host'];
    $type = strtoupper($_POST['type']);
    $validtypes=array("A","MX","NS","TXT","SOA","HINFO","AAAA","SRV","AB","ALL");

    // Check that dns type is defined or allowed

    if(!defined("DNS_" . $type) or !in_array($type,$validtypes)){
       echo "Invalid DNS Type!";
    }
	
	else
	
	{

       $type = constant("DNS_" . $type);
       $rec = dns_get_record($host, $type);
       
       /*echo "<pre>";
       print_r($rec);
       echo "</pre>";*/

       // Set result types - can be modified by using available elements from $rec array

       switch($type){
	   
             case DNS_A:
                    $recvals=array("Hostname" => "host","Type" => "type","IP" => "ip");
                    break;
					
             case DNS_MX:
                    $recvals=array("Hostname" => "host","Type" => "type", "Target" => "target", "Priority" => "pri");
                    break;
					
             case DNS_NS:
                    $recvals=array("Hostname" => "host","Type" => "type", "Target" => "target");
                    break;
					
             case DNS_TXT:
                    $recvals=array("Hostname" => "host","Type" => "type", "Record" => "txt");
                    break;
					
			case DNS_SOA:
                    $recvals=array("Hostname" => "host","Type" => "type", "Mname" => "mname","Rname" => "rname","Serial" => "serial","Refresh" => "refresh","Retry" => "retry","Expire" => "expire","TTL" => "minimum-ttl");
                    break;
					
		
						
			case DNS_AAAA:
                    $recvals=array("Hostname" => "host","Type" => "type", "IPV6" => "ipv6");
                    break;		
					
			case DNS_ALL:
                    $recvals=array("Hostname" => "host","Type" => "type",  "IP" => "ip", "Target" => "target", "Priority" => "pri",  "Record" => "txt",  "Mname" => "mname","Rname" => "rname","Serial" => "serial","Refresh" => "refresh","Retry" => "retry","Expire" => "expire","TTL" => "minimum-ttl",  "IPV6" => "ipv6");
                    break;
        }

      // Output results
      
      echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
      echo "<tr>";
	
    echo "<td align='left' valign='top' class='topline' width='100%'>";
	echo "<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
      echo "<tr>";
        echo "<td width='2%' align='left' valign='top' class='txt'><img src='images/topleft.jpg' width='17' height='57'></td>";
		
		
      foreach ($recvals as $headkey=>$heading) {
          echo "        <td width='32%' height='57' align='center' valign='middle' class='txt'>".$headkey."</td>";
      }
	  echo "<td width='2%' align='right' valign='top' class='txt'><img src='images/righttop.jpg' width='17' height='57'></td>";
      
      echo "</tr>";
      
      if(empty($rec)) {
        echo "<tr>"; 
		echo "<td></td>";
		?>
		
        <td height="44" align="center" valign="middle" class="txt" <?php if($type == DNS_ALL) { ?> colspan='14' <?php }  elseif($type == DNS_MX) { ?> colspan='4' <?php } if($type == DNS_SOA) { ?> colspan='9' <?php } else { ?> colspan='3' <?php } ?> style='empty-cells:show;'> No Records Found. </td>
         <td ></td>
					
					<?php
		echo "</tr>";
		
			echo "<tr>";
        echo "<td align='left' valign='top' > &nbsp;</td>"; ?>
        <td height='19' align='center' valign='middle' width='96%' <?php if($type == DNS_ALL) { ?> colspan='14' <?php }  elseif($type == DNS_MX) { ?> colspan='4' <?php } if($type == DNS_SOA) { ?> colspan='9' <?php } else { ?> colspan='3' <?php } ?> class='botline' >&nbsp;</td>
        <?php echo "<td align='right' valign='top' class='botline'></td>";
      echo "</tr> ";
	  
      } else {
	  
	  //print_r($rec);
	  //print_r($recvals);
	  	$k = 0;
		foreach ($rec as $arr => $num){ // first forloop
            echo "<tr>";
			echo "<td width='2%' align='left' valign='top' class='lline'>&nbsp;</td>";
            foreach ($recvals as $title => $value){ // second forloop								
				echo "<td height='44' width='32%' align='center' valign='middle' class='txt' style='empty-cells:show;'>&nbsp;&nbsp;&nbsp;".$num[$value]."&nbsp;&nbsp;&nbsp;</td>";					
            } // second forloop			 
			echo "<td width='2%' align='right' valign='top' class='rline'>&nbsp;</td>";	
            echo "</tr>";
     
			
   	echo "<tr>"; $arrcount = count($rec); ?>
        <td align='left' valign='top' <?php if($k+1 != $arrcount) { ?> class='lline' <?php } ?> ><?php if($k+1 == $arrcount) { ?><img src='images/leftbot.jpg' width='17' height='19'><?php } else { echo "&nbsp;"; } ?></td>
		<?php foreach ($recvals as $title => $value){ ?>
        <td height='19' align='center' valign='middle' width='96%' <?php if($k+1 == $arrcount) { ?> class='botline' <?php } ?> >&nbsp;</td>
		 <?php  } ?>
        <td align='right' valign='top' <?php if($k+1 != $arrcount) { ?> class='rline' <?php } ?> ><?php if($k+1 == $arrcount) { ?><img src='images/botright.jpg' width='17' height='19'><?php } else { echo "&nbsp;"; } ?></td>
      <?php echo "</tr>";
	  	$k++; 
	     }
	  } //first foreach
      	
	
	  echo "</table>";
	  echo "</td>";
	  echo "</tr>";
	   
echo "</table>";	 
    }
} 

else {

     echo "Either hostname or record type is missing";
}

?>
</html>
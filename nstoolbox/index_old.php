<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NS Tool Box</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function doClear()  
{  
   
document.getElementsById("domain").value ='';  

}   


</script>  

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="105" align="center" valign="middle" class="bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="2%" align="left" valign="top">&nbsp;</td>
        <td width="59%" align="left" valign="top"><img src="images/logo.png" width="107" height="85" /></td>
        <td width="39%" align="left" valign="middle"><a href="http://www.sysadminmail.com" target="_blank"><img src="images/banner ns.jpg" width="468" height="60" border="0" /></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="20%" height="117" align="left" valign="middle"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="200" height="94">
          <param name="movie" value="images/small abnner.swf" />
          <param name="quality" value="high" />
          <embed src="images/small abnner.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="94"></embed>
        </object></td>
        <td width="60%" align="center" valign="middle"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="460" height="100">
          <param name="movie" value="images/bannersys.swf" />
          <param name="quality" value="high" />
          <embed src="images/bannersys.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="460" height="100"></embed>
        </object></td>
        <td width="20%" align="right" valign="middle"><a href="http://www.worldsystemadministrator.com" target="_blank"><img src="images/world.gif" width="234" height="60"  border="0"/></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="21%" height="154" align="left" valign="top"
		>
		<form id="form1" name="form1" method="post" action="whois.php" target="ss"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4">&nbsp;</td>
            <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Whois Lookup </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Domain / IP Address </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="top" bgcolor="#333333"><label>
              <input type="text" name="domain" id="domain" autocomplete="off" />
            </label></td>	
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="top" bgcolor="#333333">
              <label>
                <input type="submit" name="Submit" value="Whois"  onClick="doClear();"/>
                </label>
                        </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="top" bgcolor="#333333" class="txt">Lookup to find Domain / IP<br />
              Address Information</td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="top" bgcolor="#333333">&nbsp;</td>
          </tr>
        </table></form></td>
        <td width="21%" align="left" valign="top"><form id="form2" name="form2" method="post" action="dns.php" target="ss">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4">&nbsp;</td>
            <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">DNS Lookup </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Host / Domain Name </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="left" valign="top" bgcolor="#333333"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="68%" height="25" align="center" valign="middle"><input type="text" name="host" size="17" /></td>
                <td width="32%" height="22" align="center" valign="middle">
                  <select name="type">
                    <option selected="selected">A</option>
                    <option value="a">A</option>
 <option value="mx">MX</option>
 <option value="ns">NS</option>
 <option value="txt">TXT</option>
 <option value="soa">SOA</option>

  <option value="aaaa">AAAA</option>
   
	 <option value="all">ALL</option>
 </select>                </td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333">
              <label>
                <input type="submit" name="Submit2" value="Lookup" />
                </label>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Lookup Domain / Host Name<br />
              Records</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
          </tr>
        </table></form></td>
        <td width="21%" align="left" valign="top"><form id="form3" name="form3" method="post" action="pin.php"target="ss"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4">&nbsp;</td>
            <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Ping Host </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Host Name / IP Address </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="63%" height="25" align="center" valign="middle"><input type="text" name="host" size="15" /></td>
                <td width="37%" height="25" align="center" valign="middle"><select name="count1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                                </select></td>
              </tr>
            </table>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333">
              <label>
                <input type="submit" name="Submit3" value="Ping" />
                </label>
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="middle" bgcolor="#333333" class="txt">Ping to Host / IP Address </td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
          </tr>
        </table></form></td>
        <td width="21%" align="left" valign="top"><form id="form4" name="form4" method="post" action="trace.php" target="ss">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4">&nbsp;</td>
            <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Network Trace Route </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">IP / Host Name </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
              <input type="text" name="host1" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333">
              <label>
                <input type="submit" name="Submit4" value="Trace Route" />
                </label>
              </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Trace destination Route to<br />
              IP / Host Name </td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
          </tr>
        </table></form></td>
        <td width="21%" align="right" valign="top"><form id="form5" name="form5" method="post" action="host.php" target="ss">
		<table width="246" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4">&nbsp;</td>
            <td width="242" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Reverse DNS Check </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">IP Address </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
              <input type="text" name="tt" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333">
              <label>
                <input type="submit" name="Submit5" value="Lookup" />
                </label>
                   </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Perform Reverse Lookup <br />
              for the IP Address </td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
          </tr>
        </table></form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="243" height="445" align="left" valign="top"><table width="243" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4">&nbsp;</td>
            <td width="239" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">DNS Report </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Domain Name  </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
              <input type="text" name="textfield42" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333"><form id="form5" name="form5" method="post" action="">
                <label>
                <input type="submit" name="Submit52" value="Lookup" />
                </label>
            </form></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Lookup of DNS Report for<br />
              Domain Name  </td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
          </tr>
          <tr>
            <td height="19">&nbsp;</td>
            <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4" rowspan="9">&nbsp;</td>
                <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">SMTP Server Test  </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">SMTP Server Address </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333"><input type="text" name="textfield422" /></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Sender Email Address </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt"><input type="text" name="textfield4222" /></td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Recipient Email Address </td>
              </tr>
              <tr>
                <td height="34" align="center" valign="middle" bgcolor="#333333" class="txt"><input type="text" name="textfield42222" /></td>
              </tr>
              <tr>
                <td height="30" align="center" valign="middle" bgcolor="#333333"><form id="form2" name="form2" method="post" action="">
                    <label>
                    <input type="submit" name="Submit23" value="Test SMTP Server" />
                    </label>
                                </form></td>
              </tr>
              <tr>
                <td height="19" align="center" valign="bottom" bgcolor="#333333" class="txt">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td height="24">&nbsp;</td>
                <td align="left" valign="top" bgcolor="#FFFFFF"><form id="form4" name="form4" method="post" action="scanner.php" target="ss"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  
                    <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Port Scanner </td>
                  </tr>
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">IP Address / Host </td>
                  </tr>
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
                      <input type="text" name="host" />
                    </label></td>
                  </tr>
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Enter Port To Scan </td>
                  </tr>
                  <tr>
                    <td height="30" align="center" valign="middle" bgcolor="#333333"><input type="text" name="start" /></td>
                  </tr>
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333">
                        <label>
                        <input type="submit" name="Submit42" value="Scan Port" />
                        </label>
                    </td>
                  </tr>
                  <tr>
                    <td height="19" align="center" valign="bottom" bgcolor="#333333" class="txt">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19">&nbsp;</td>
                    <td align="left" valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="2"><form id="form4" name="form4" method="post" action="cname.php" target="ss">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                       
                        <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">CName Lookup </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Domain  Name </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
                          <input type="text" name="hostname1" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333">
                            <label>
                            <input type="submit" name="Submit43" value="Lookup" />
                            </label>
</td>
                      </tr>
                      <tr>
                        <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Perform CName Lookup for the Domain </td>
                      </tr>
                      <tr>
                        <td height="19" align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
                      </tr>
                    </table></form></td>
                    </tr>
                  <tr>
                    <td height="19" colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="2"><form id="form5" name="form5" method="post" action="spf.php" target="ss">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                  
                        <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">SPF Records  </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Domain  Name </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
                          <input type="text" name="hostname" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333">
                            <label>
                            <input type="submit" name="Submit433" value="Lookup" />
                            </label>
</td>
                      </tr>
                      <tr>
                        <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Perform SPF Test With <br />
                          for the Domain </td>
                      </tr>
                      <tr>
                        <td height="19" align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
                      </tr>
                    </table></form></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="744" align="left" valign="top"><iframe width=100% height=950 frameborder=0 scrolling="auto" src="" title="ss" name="ss"></iframe></td>
        <td width="247" align="right" valign="top"><table width="250" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="4" align="right" valign="top">&nbsp;</td>
            <td width="199" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">DNS Propagation </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Host / Domain Name </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="left" valign="top" bgcolor="#333333"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="68%" height="25" align="center" valign="middle"><input type="text" name="textfield23" size="17" /></td>
                  <td width="32%" height="25" align="center" valign="middle"><select name="select2">
                      <option selected="selected">A</option>
                      <option>NS</option>
                      <option>MX</option>
                      <option>PTR</option>
                      <option>ALL</option>
                    </select>                  </td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="25" align="center" valign="middle" bgcolor="#333333"><form id="form2" name="form2" method="post" action="">
                <label>
                <input type="submit" name="Submit22" value="Lookup" />
                </label>
            </form></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Lookup Domain / Host Name<br />
              Records</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="19" align="center" valign="bottom" bgcolor="#333333" class="txt">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="19" align="center" valign="bottom" bgcolor="#FFFFFF" class="txt">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="4" rowspan="10">&nbsp;</td>
                <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">POP3 Server Test </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">POP3 Server </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333"><input type="text" name="textfield4223" /></td>
              </tr>
              <tr>
                <td height="20" align="center" valign="middle" bgcolor="#333333" class="txt">Use SSL? 
                 
                  <input name="radiobutton" type="radio" value="radiobutton" />
                  Yes 
				     <input name="radiobutton" type="radio" value="radiobutton" />
                  No                 </td>
              </tr>
              <tr>
                <td height="19" align="center" valign="middle" bgcolor="#333333" class="txt">User Name </td>
              </tr>
              <tr>
                <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt"><input type="text" name="textfield42223" /></td>
              </tr>
              <tr>
                <td height="19" align="center" valign="middle" bgcolor="#333333" class="txt">Password</td>
              </tr>
              <tr>
                <td height="30" align="center" valign="middle" bgcolor="#333333" class="txt"><input type="text" name="textfield422222" /></td>
              </tr>
              <tr>
                <td height="30" align="center" valign="middle" bgcolor="#333333"><form id="form2" name="form2" method="post" action="">
                    <label>
                    <input type="submit" name="Submit232" value="Test POP3 Server" />
                    </label>
                </form></td>
              </tr>
              <tr>
                <td height="19" align="center" valign="bottom" bgcolor="#333333" class="txt">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="bottom" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td align="left" valign="bottom" bgcolor="#FFFFFF"><form id="form4" name="form4" method="post" action="SubnetCalc.php" target="ss">
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
               
                    <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">IP Subnet Calculator  </td>
                  </tr>
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">IP Address/Subnet Mask</td>
                  </tr>
                  <tr>
                    <td height="30" align="center" valign="middle" bgcolor="#333333"><input type="text" name="my_net_info" /></td>
                  </tr>
				  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Use IP & CIDR Netmask:10.0.0.1/22</td>
                  </tr>
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Or IP & Netmask:10.0.0.1 255.255.252.0</td>
                  </tr>
                  
                  <tr>
                    <td height="25" align="center" valign="middle" bgcolor="#333333">
                        <label>
                        <input type="submit" name="Submit422" value="Calculate" />
                        </label>
          </td>
                  </tr>
                  <tr>
                    <td height="19" align="center" valign="bottom" bgcolor="#333333" class="txt">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="2">&nbsp;</td>
                    </tr></table></form>
                  <tr>
                    <td height="19" colspan="2"><form id="form4" name="form4" method="get" action="dnsbllookup.php" target="ss">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                       
                        <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Spam Lookup </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">IP Name </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
                          <input type="text" name="ip" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333">
                            <label>
                            <input type="submit" name="Submit432" value="Lookup" />
                            </label>
                        </td>
                      </tr>
                      <tr>
                        <td height="30" align="center" valign="bottom" bgcolor="#333333" class="txt">Perform IP Spam Database <br />
                          Checkup </td>
                      </tr>
                      <tr>
                        <td height="19" align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
                      </tr>
                    </table></form></td>
                  </tr>
                  <tr>
                    <td height="19" colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="19" colspan="2"><form id="form4" name="form4" method="post" action="validmail.php" target="ss">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                      
                        <td width="100%" height="30" align="center" valign="middle" bgcolor="#FF9933" class="tittxt">Email Address Checker </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Enter Email Address </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333"><label>
                          <input type="text" name="t1" />
                        </label></td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333">
                            <label>
                            <input type="submit" name="Submit4332" value="Test" />
                            </label>
                        </td>
                      </tr>
                      <tr>
                        <td height="25" align="center" valign="middle" bgcolor="#333333" class="txt">Test for Valid Email Address </td>
                      </tr>
                      <tr>
                        <td height="19" align="left" valign="bottom" bgcolor="#333333">&nbsp;</td>
                      </tr>
                    </table></form></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="copy" >&nbsp;</td>
  </tr>
  <tr>
    <td height="8" align="left" valign="top" class="copy" ><hr/></td>
  </tr>
  <tr>
    <td align="right" valign="top" class="copy">© 2012 nstoolbox.All rights reserved  	</td>
  </tr>
  <tr>
    <td align="right" valign="top" class="copy">&nbsp;</td>
  </tr>
</table>
</body>
</html>

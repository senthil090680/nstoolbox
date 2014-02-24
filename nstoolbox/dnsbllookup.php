<?php

$ip=$_GET['ip'];
if(isset($_GET['ip']) && $_GET['ip']!=null){
if(filter_var($ip,FILTER_VALIDATE_IP)){
echo dnsbllookup($ip);
}else{
echo "Please enter a valid IP";
}
}

/***************************************************************************************
This is a simple PHP script to lookup for blacklisted IP against multiple DNSBLs at once.

You are free to use the script, modify it, and/or redistribute the files as you wish.

Homepage: http://dnsbllookup.com
****************************************************************************************/
function dnsbllookup($ip){
$dnsbl_lookup=array("3y.spam.mrs.kithrup.com",
"access.redhawk.org",
"all.rbl.kropka.net",
"all.spamblock.unit.liu.se",
"assholes.madscience.nl",
"bl.borderworlds.dk",
"bl.csma.biz",
"bl.redhatgate.com",
"bl.spamcannibal.org",
"bl.spamcop.net",
"bl.starloop.com",
"bl.technovision.dk",
"blackholes.five-ten-sg.com",
"blackholes.intersil.net",
"blackholes.mail-abuse.org",
"blackholes.sandes.dk",
"blackholes.uceb.org",
"blackholes.wirehub.net",
"blacklist.sci.kun.nl",
"blacklist.spambag.org",
"block.dnsbl.sorbs.net",
"blocked.hilli.dk",
"blocklist.squawk.com",
"blocklist2.squawk.com",
"cart00ney.surriel.com",
"cbl.abuseat.org",
"dev.null.dk",
"dews.qmail.org",
"dialup.blacklist.jippg.org",
"dialup.rbl.kropka.net",
"dialups.mail-abuse.org",
"dialups.visi.com",
"dnsbl.ahbl.org",
"dnsbl.antispam.or.id",
"dnsbl.cyberlogic.net",
"nsbl.kempt.net",
"dnsbl.njabl.org",
"dnsbl.solid.net",
"dnsbl.sorbs.net",
"dnsbl-1.uceprotect.net",
"dnsbl-2.uceprotect.net",
"dnsbl-3.uceprotect.net",
"dsbl.dnsbl.net.au",
"duinv.aupads.org",
"dul.dnsbl.sorbs.net",
"dul.ru",
"dun.dnsrbl.net",
"dynablock.njabl.org",
"dynablock.wirehub.net",
"fl.chickenboner.biz",
"forbidden.icm.edu.pl",
"form.rbl.kropka.net",
"hil.habeas.com",
"http.dnsbl.sorbs.net",
"http.opm.blitzed.org",
"intruders.docs.uu.se",
"ip.rbl.kropka.net",
"korea.services.net",
"l1.spews.dnsbl.sorbs.net",
"l2.spews.dnsbl.sorbs.net",
"lame-av.rbl.kropka.net",
"list.dsbl.org",
"mail-abuse.blacklist.jippg.org",
"map.spam-rbl.com",
"misc.dnsbl.sorbs.net",
"msgid.bl.gweep.ca",
"multihop.dsbl.org",
"no-more-funn.moensted.dk",
"ohps.bl.reynolds.net.au",
"ohps.dnsbl.net.au",
"omrs.bl.reynolds.net.au",
"omrs.dnsbl.net.au",
"op.rbl.kropka.net",
"opm.blitzed.org",
"or.rbl.kropka.net",
"orbs.dorkslayers.com",
"orid.dnsbl.net.au",
"orvedb.aupads.org",
"osps.bl.reynolds.net.au",
"osps.dnsbl.net.au",
"osrs.bl.reynolds.net.au",
"osrs.dnsbl.net.au",
"owfs.bl.reynolds.net.au",
"owfs.dnsbl.net.au",
"owps.bl.reynolds.net.au",
"owps.dnsbl.net.au",
"pdl.dnsbl.net.au",
"probes.dnsbl.net.au",
"proxy.bl.gweep.ca",
"psbl.surriel.com",
"pss.spambusters.org.ar",
"rbl.cluecentral.net",
"rbl.rangers.eu.org",
"sorbs.net",
"rbl.schulte.org",
"rbl.snark.net",
"rbl.triumf.ca",
"rblmap.tu-berlin.de",
"rdts.bl.reynolds.net.au",
"rdts.dnsbl.net.au",
"relays.bl.gweep.ca",
"relays.bl.kundenserver.de",
"relays.dorkslayers.com",
"relays.mail-abuse.org",
"relays.nether.net",
"relays.visi.com",
"ricn.bl.reynolds.net.au",
"ricn.dnsbl.net.au",
"rmst.bl.reynolds.net.au",
"rmst.dnsbl.net.au",
"rsbl.aupads.org",
"satos.rbl.cluecentral.net",
"sbl.csma.biz",
"sbl.spamhaus.org",
"sbl-xbl.spamhaus.org",
"smtp.dnsbl.sorbs.net",
"socks.dnsbl.sorbs.net",
"socks.opm.blitzed.org",
"sorbs.dnsbl.net.au",
"spam.dnsbl.sorbs.net",
"spam.dnsrbl.net",
"spam.olsentech.net",
"spam.wytnij.to",
"spamguard.leadmon.net",
"spamsites.dnsbl.net.au",
"spamsources.dnsbl.info",
"spamsources.fabel.dk",
"spamsources.yamta.org",
"spews.dnsbl.net.au",
"t1.bl.reynolds.net.au",
"t1.dnsbl.net.au",
"ucepn.dnsbl.net.au",
"unconfirmed.dsbl.org",
"vbl.messagelabs.com",
"vox.schpider.com",
"web.dnsbl.sorbs.net",
"whois.rfc-ignorant.org",
"will-spam-for-food.eu.org",
"wingate.opm.blitzed.org",
"xbl.spamhaus.org",
"zombie.dnsbl.sorbs.net",
"ztl.dorkslayers.com"
 
); // Add your preferred list of DNSBL's
if($ip){
$reverse_ip=implode(".",array_reverse(explode(".",$ip)));

foreach($dnsbl_lookup as $host){
if(checkdnsrr($reverse_ip.".".$host."."."A")){
$listed.=$reverse_ip.'.'.$host.' <font color="red">Listed</font><br />';
}
else
{
$listed.=$reverse_ip.'.'.$host.' <font color="red">Not Listed</font><br />';
}
}
}
if($listed){
echo $listed;
}else{
echo '"A" record was not found';
}
}
?> 

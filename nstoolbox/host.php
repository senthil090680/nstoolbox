<html>
<table border=0 width=80 cellpadding=0 cellspacing=0>

<tr>
<td>

<?php
echo "Domain Name:";
echo "<hr>";

$nm=$_POST['tt'];
$dnm = gethostbyaddr($nm);

echo "$dnm";



?>

 
</td></tr></table>
</html>
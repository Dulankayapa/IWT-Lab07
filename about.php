<?php
define("companyName", "ABC Mobiles");
echo "<h2> About " . companyName . "</h2>";
echo "<h4> This page mainly about the " . companyName . " web site.</h4>";

$sold = 75;
$total = 100;

echo "<h2>The Shopping Cart Details.</h2>";

echo "<h3> NO of Sold Items :  $total </h3>";
echo "<h3> NO of Total Items : $sold </h3>";

echo "<table border='1' >
<tr>
<th> NO of Sold Items </th> 
<th> NO of Total Items </th> 
</tr>

<tr>
<td> $sold </td> 
<td> $total </td> 
</tr>
</table>
";

echo "<h3>NO of Total Items : ", $sold;
echo "<h3>"
    ?>
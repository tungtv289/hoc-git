<?php
class sp
{
       // Properties
       public $name;
       public $price;

       function __construct($name, $price)
       {
              $this->name = $name;
              $this->price = $price;
       }
}
$sp1 = new sp("quat", "5");
$sp2 = new sp("den", "25");
$sp3 = new sp("bep", "5");
$sp4 = new sp("gas", "15");
$sp5 = new sp("sach", "25");



$mang = array($sp1, $sp2, $sp3, $sp4, $sp5);
$arrLength = count($mang);

?>
<!DOCTYPE html>
<html>
<style>
       table,
       th,
       td {
              border: 1px solid black;
       }
</style>

<body>
 
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>BEFORE</h2>

<table>
  
           <th>NAME</th>
           <th>PRICE(dv: K)</th>
  
</tr>
  <?php for ($i = 0; $i < $arrLength; ++$i) { ?>
                                          <tr>
                                                 <td> <?php echo $mang[$i]->name; ?><td>
                                                 
                                                  <?php echo $mang[$i]->price; ?>
                                                 
  </tr>
                                          <?php } ?>
  <tr>  
</table>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>AFTER</h2>

<table>
  
           <th>NAME</th>
           <th>PRICE(dv: K)</th>
  
</tr>
  <?php for ($i = 0; $i < $arrLength; ++$i) { ?>
       <?php if ($mang[$i]->price>"10") {  ?>
       <tr>
                                                 <td> <?php echo $mang[$i]->name; ?><td>
                                                 
                                                  <?php echo $mang[$i]->price; ?>
                                                 
       </tr>
                                          <?php } ?>
                                          <?php } ?>
  </tr>  
</table>

</body>

</html>


<?php
include("D:\PHPpractice\array\DoAn.php");
include("D:\PHPpractice\array\XuLyFile.php");
$mang1 = readFileT("D:\PHPpractice\doan10.txt");

logMsg($_SERVER['REMOTE_ADDR']);
// if ($_SERVER['REMOTE_ADDR'] == '192.168.0.104') {
$DoanArr = array();
// logMsg("cho nay nek");
// logMsg("hiiii");
foreach ($mang1 as $value) {
  //  echo $value . "\n";
  if (empty($value) || $value[0] == ',') {
    continue;
  }
  // if (!empty($value)) {
  $tmpid = explode(",", $value)[0];
  $tmpname = explode(",", $value)[1];
  $tmpprice = explode(",", $value)[2];
  $tmptype = explode(",", $value)[3];
  $tmpstatus = explode(",", $value)[4];
  $obj = new DoAn($tmpid, $tmpname, $tmpprice, $tmptype, $tmpstatus);
  $DoanArr[] = $obj;
  // }

  //  ++$dem;
}
logMsg(count($DoanArr));
//echo count($DoanArr);
//echo gettype($DoanArr[1]->status);
// for ($i = 0; $i < count($DoanArr); ++$i) {
//     if ($DoanArr[$i]->status == "0") {
//         //       echo $DoanArr[$i]->name;
//         unset($DoanArr[$i]);
//         //  array_splice($DoanArr, $i, 1);
//         // ++$dem; 
//     }
// }
//var_dump($DoanArr);
//  $DoanArr = array_values($DoanArr);
//echo $dem;
//echo count($DoanArr);
// writeFile("D:\PHPpractice\array\do_an_sau_khi_xoa.txt",$DoanArr);

?>


<!DOCTYPE HTML>
<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    html {
      width: 100vw;
      height: 100vh;
    }

    /* CSS which you need for blurred box */
    body {
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      background-position: top;
      background-image: url(http://bit.ly/2gPLxZ4);
      width: 100%;
      height: 100%;
      font-family: Arial, Helvetica;
      letter-spacing: 0.02em;
      font-weight: 400;
      -webkit-font-smoothing: antialiased;
    }

    .blurred-box {
      position: relative;
      width: 250px;
      height: 350px;
      top: calc(50% - 175px);
      left: calc(50% - 125px);
      background: inherit;
      border-radius: 2px;
      overflow: hidden;
    }

    .blurred-box:after {
      content: '';
      width: 300px;
      height: 300px;
      background: inherit;
      position: absolute;
      left: -25px;
      left position right: 0;
      top: -25px;
      top position bottom: 0;
      box-shadow: inset 0 0 0 200px rgba(255, 255, 255, 0.05);
      filter: blur(10px);
    }


    /* Form which you dont need */
    .user-login-box {
      position: relative;
      margin-top: 50px;
      text-align: center;
      z-index: 1;
    }

    .user-login-box>* {
      display: inline-block;
      width: 200px;
    }

    .user-icon {
      width: 100px;
      height: 100px;
      position: relative;
      border-radius: 50%;
      background-size: contain;
      background-image: url(https://pbs.twimg.com/profile_images/725321660484583424/ArQ4fM3k.jpg);
    }

    .user-name {
      margin-top: 15px;
      margin-bottom: 15px;
      color: white;
    }

    input.user-password {
      width: 120px;
      height: 18px;
      opacity: 0.4;
      border-radius: 2px;
      padding: 5px 15px;
      border: 0;
    }

      {
      box-sizing: border-box;
    }

    .row {
      margin-left: -5px;
      margin-right: -5px;
    }

    .column {
      float: left;
      width: 50%;
      padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th,
    td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>
  <h2 style="color:#E0DFE6;">DELETE_FORM_TABLE</Table>
  </h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p style="color:#E0DFE6;;">Index</p><input type="text" name="index">
    <button type="submit" class="btn btn-primary">Delete</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    echo "@@@@@@@@@@@";
    $indexD = test_input($_POST['index']);
    echo "##################";
    if (empty($_POST["index"])) {
      $indexD = "";
    } else {
      // $indexD=$tmpid;
      for ($i = 0; $i < count($DoanArr); ++$i) {
        if ($DoanArr[$i]->id == $indexD) {
          unset($DoanArr[$i]);
        }
      }

      $DoanArr = array_values($DoanArr);
      writeFile("D:\PHPpractice\doan10.txt", $DoanArr);
      //  echo count($DoanArr);
    }
  }
  ?>

</body>

</html>

<body>
  <?php
  // define variables and set to empty values
  $nameErr = $priceErr = $typeErr = $statusErr = "";
  $name  = $price = $type = $status = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["price"])) {
      $price = "";
    } else {
      $price = test_input($_POST["price"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/", $price)) {
        $priceErr = "Only letters and white space allowed";
      }
    }
  }
  if (empty($_POST["type"])) {
    $type = "";
  } else {
    $type = test_input($_POST["type"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $type)) {
      $typeErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["status"])) {
    $statusErr = "status is required";
  } else {
    $status = test_input($_POST["status"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $status)) {
      $statusErr = "Only letters and white space allowed";
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <h2 style="color:#E0DFE6;">Add_New_Form_Table </Table>
  </h2>
  <!-- <p><span class="error">* required field</span></p> -->
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <p style="color:#E0DFE6;;">Name</p> <input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    <p style="color:#E0DFE6;;">Price</p> <input type="text" name="price" value="<?php echo $price; ?>">
    <span class="error"><?php echo $priceErr; ?></span>
    <br><br>
    <p style="color:#E0DFE6;;">Type</p><input type="text" name="type" value="<?php echo $type; ?>">
    <span class="error"><?php echo $typeErr; ?></span>
    <br><br>
    <p style="color:#E0DFE6;;">Status</p>
    <input type="text" name="status" value="<?php echo $status; ?>">
    <span class="error">* <?php echo $statusErr; ?></span>
    <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <?php
  if ($status >= "0") {
    $tmpid = count($DoanArr);
    $tmpname = $name;
    $tmpprice = $price;
    $tmptype = $type;
    $tmpstatus = $status;
    $DoanArr[] = new DoAn($tmpid, $tmpname, $tmpprice, $tmptype, $tmpstatus);
    $DoanArr = array_values($DoanArr);
    writeFile("D:\PHPpractice\doan10.txt", $DoanArr);
  }
  ?>
</body>

</html>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      td,
      th {
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

    <h2 style="color:#E0DFE6;">List Student</h2>

    <table class="table table-bordered table-dark">

      <th>INDEX</th>
      <th>NAME</th>
      <th>PRICE</th>
      <th>TYPE</th>
      <th>STATUS</th>


      </tr>
      <?php

      for ($i = 0; $i < count($DoanArr); ++$i) { ?>
        <tr>
          <td> <?php echo $DoanArr[$i]->id; ?>
          </td>
          <td> <?php echo $DoanArr[$i]->name; ?>
          </td>
          <td> <?php echo $DoanArr[$i]->price; ?>
          </td>
          <td> <?php echo $DoanArr[$i]->type; ?>
          </td>
          <td> <?php echo $DoanArr[$i]->status; ?>
          </td>
          <td>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <input type="hidden" name="index" value= <?php echo $DoanArr[$i]->id; ?>>
              <button type="submit" class="btn btn-outline-secondary" onclick="abc()">remove</button>
            </form>

            <script>
              function abc() {
                confirm("Are u sure?");

              }
            </script>

          </td>
        </tr>
      <?php } ?>
      </tr>
    </table>

    <?php
    $DoanArr = array_values($DoanArr);
    writeFile("D:\PHPpractice\doan10.txt", $DoanArr);
    // echo count($DoanArr);

    ?>
  </body>

  </html>

  <?php
  //  } else {

  //   echo "<a href='http://192.168.0.103:8000' target='_blank'>Khong duoc truy cap! Vui long nhan vao day de chuyen trang</a>";
  //  } 
  ?>
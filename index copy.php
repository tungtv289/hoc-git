
<?php




class Drink
{
  // Properties
  public $index;
  public $fullname;
  public $email;
  public $age;
  public $score;
  public $isActive;

  function __construct( $index,$fullname,$email,$age,$score, $isActive)
  {
    $this->fullname = $fullname;
    $this->index = $index;
    $this->email = $email;
    $this->age = $age;
    $this->score = $score;
    $this->isActive = $isActive;
  }
}

$myfile = fopen("sinhvien10.txt", "r") or die("Unable to open file!");
$noidungfile= fread($myfile, filesize("sinhvien10.txt"));
fclose($myfile);
// echo $noidungfile;


// PHP_EOL = end of line\
$mang1 = explode(PHP_EOL, $noidungfile);

//echo count($mang1);

$drinkArr = array();
echo "########################################" ;
echo "\n";
echo gettype($noidungfile);
echo " #################";

foreach ($mang1 as $value) {
  echo $value . "\n";
  $tmpindex = explode(",", $value)[0];
  $tmpfullname = explode(",", $value)[1];
  $tmpemail = explode(",", $value)[2];
  $tmpage = explode(",", $value)[3];
  $tmpscore = explode(",", $value)[4];
  $tmpisActive= explode(",", $value)[5];
  $obj = new Drink($tmpindex, $tmpfullname,$tmpemail,$tmpage,$tmpscore,$tmpisActive);
  $drinkArr[] = $obj;
}

echo $drinkArr[1]->fullname;

//    echo "Mang Drink sau khi bien doi la: \n";
//    foreach($drinkArr as $value) {
//        echo $value->name . "\n";
//    }

?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
                    <?php
                         $var = 
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

    <h2>BEFORE</h2>

    <table>

      <th>INDEX</th>
      <th>FULLNAME</th>
      <th>EMAIL</th>
      <th>AGE</th>
      <th>SCORE</th>
      <th>ISACTIVE</th>

      </tr>
      <?php for ($i = 0; $i < count($drinkArr); ++$i) { ?>
        <tr>
          <td> <?php echo $drinkArr[$i]->index; ?>
      </td>

       <td>     <?php echo $drinkArr[$i]->fullname; ?>
          </td>

        <td>    <?php echo $drinkArr[$i]->email; ?>
      </td>

     <td>       <?php echo $drinkArr[$i]->age; ?>
      </td>

      <td>      <?php echo $drinkArr[$i]->score; ?>
      </td>

       <td>     <?php echo $drinkArr[$i]->isActive; ?></td>

        </tr>
      <?php } ?>
      <tr>
    </table>

  </body>




  </html>
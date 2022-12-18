<?php
include("D:\PHPpractice\array\DoAn.php");
include("D:\PHPpractice\array\XuLyFile.php");
// include("D:\PHPpractice\index.php");
$mang1 = readFileT("D:\PHPpractice\doan10.txt");
$DoanArr = array();
foreach ($mang1 as $value) {
    if (empty($value) || $value[0] == ',') {
        continue;
    }
    if (!empty($value)) {
        $tmpid = explode(",", $value)[0];
        $tmpname = explode(",", $value)[1];
        $tmpprice = explode(",", $value)[2];
        $tmptype = explode(",", $value)[3];
        $tmpstatus = explode(",", $value)[4];
        $obj = new DoAn($tmpid, $tmpname, $tmpprice, $tmptype, $tmpstatus);
        $DoanArr[] = $obj;
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
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
            {
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
            /* background-image: url(http://bit.ly/2gPLxZ4); */
            background-color: pink;
            width: 100%;
            height: 100%;
            font-family: Arial, Helvetica;
            letter-spacing: 0.02em;
            font-weight: 400;
            -webkit-font-smoothing: antialiased;
        }
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
    </style>
<body>
    <div class="container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Please enter name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="number" class="form-control" name="price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter price">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type</label>
                <select class="custom-select" name="type">
                    <option selected>Open select type</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <!-- <input type="text" class="form-control" name="type "id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter type"> -->
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Status</label>
            </div>
            <!-- <a href="/index.php" type="submit" class="btn btn-primary">Add</a> -->
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        <?php
        $nameErr = $priceErr = $typeErr = $statusErr = "";
        $name  = $price = $type = $status = "";
        // var_dump($_SERVER);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameErr = "name is required";
            } else {
                $name = $_POST["name"];
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }
            if (empty($_POST["price"])) {
                $price = "";
            } else {
                $price = $_POST["price"];
                if (!preg_match("/^[a-zA-Z-' ]*$/", $price)) {
                    $priceErr = "Only letters and white space allowed";
                }
            }
        }
        if (empty($_POST["type"])) {
            $type = "";
        } else {
            $type = $_POST["type"];
            if (!preg_match("/^[a-zA-Z-' ]*$/", $type)) {
                $typeErr = "Only letters and white space allowed";
            }
        }
        $tmpid = count($DoanArr);
        $tmpname = $name;
        $tmpprice = $price;
        $tmptype = $type;
        $tmpstatus = "0";
        $DoanArr[] = new DoAn($tmpid, $tmpname, $tmpprice, $tmptype, $tmpstatus);
        $DoanArr = array_values($DoanArr);
        writeFile("D:\PHPpractice\doan10.txt", $DoanArr);
        // Thêm sinh viên thành công -> redirect về trang index.php
        header("Location: index.php");
        exit();
        //    var_dump($tmpname);
        ?>
    </div>
</body>
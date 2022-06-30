<?php
session_start();
//require_once "config.php";
include('db.php');
//$pno="";
$status="";
$pno = $addd = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pno = test_input($_POST["pno"]);
  $addd = test_input($_POST["addd"]);
  //$quantity = test_input($_POST["quantity"]);
  //$prise = test_input($_POST["prise"]);
  //$tprice = test_input($_POST["tprice"]);
  //$tprice = test_input($_POST["tprice"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}}
if(isset($_POST['submit']) && $_POST['submit'] == "checkout") {
//echo "hrllo";


//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //$pno = test_input($_POST["pno"]);
  //$addd = test_input($_POST["addd"]);
  //$quantity = test_input($_POST["quantity"]);
  //$prise = test_input($_POST["prise"]);
  //$tprice = test_input($_POST["tprice"]);
  //$tprice = test_input($_POST["tprice"]);
  //}

//function test_input($data) {
  //$data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  //return $data;
//}
}

?>
<html>
<head>



<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<title>online shoping mart jammu</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<center style="background-color:#333; padding: 14px 16px;" ><font color=white size=5    >Online Shoping Mart Jammu</center></font>
<img src=top.jpg height=250 width=100%>
<center style="background-color:#333; padding: 14px 16px;" ><font color=white size=5>Proceed ahead for order and bill</center></font>
<center>

<div style="width:700px; margin:50 auto;">


<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
$product_name = $product["name"];
$quantity = $product["quantity"];
//$username = array();
//$username=$product["name"];
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td>
<?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "Rs-".$product["price"]; ?></td>
<td><?php echo "Rs-".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "Rs-".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php

}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</form>

<?php
//if (isset($_POST['submit']) && $_POST['action']=="submit"){
//$pno = $add = "";
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //      $_SESSION['pno'] = $_POST['pno'];
    //    $_SESSION['add'] = $_POST['add'];
  //      if($_SESSION['pno']) {
    //        header('location: checkout.php');
      //  }
//    }

//if($_SERVER["REQUEST_METHOD"] == "POST"){
//$_SESSION['pno']=$rno;
//$_SESSION['add']=$add;
//}//}

//mysqli_free_result($result);
  //  mysqli_close($sql);

//} else
?>
 <form name="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 Pno : <input type ="text" name="pno" value=><br>
Address : <input type ="text" name="addd" value=>
<center> <DIV class=product_wrapper>
<input name='submit' type='submit' value='checkout' class=buy></center></div>

<?php

//if(isset($_POST['submit']) && $_POST['submit'] == "checkout") {
//echo "hrllo";


//if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //$pno = test_input($_POST["pno"]);
  //$addd = test_input($_POST["addd"]);
  //$quantity = test_input($_POST["quantity"]);
  //$prise = test_input($_POST["prise"]);
  //$tprice = test_input($_POST["tprice"]);
  //$tprice = test_input($_POST["tprice"]);
  //}

//function test_input($data) {
  //$data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  //return $data;
//}

 if ($link === false) {
    die("ERROR: Could not connect. ".mysqli_connect_error());
}
//foreach ($_SESSION["shopping_cart"] as $product){
foreach ($_SESSION["shopping_cart"] as $product){
$product_name = $product["name"];
$quantity = $product["quantity"];
$price = $product["price"];
 if($pno != null){

$sql = "INSERT INTO bill (name, quty, price, tprice, pno, addd, date)
          VALUES('$product_name', '$quantity', '$price', '$total_price', '$pno', '$addd', now()) ";
           header("location: checkout.php");
  //       }
     if (mysqli_query($link, $sql))
{
  //  echo "Records inserted successfully.";
}
else
{
    echo "ERROR: Could not able to execute $sql. ";
       // .mysqli_error($link);
}   } }
//}
//mysqli_close($link);

?>




    </form>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">

<?php// } ?>

<?php echo $status; ?>
</div>



</div>
</FORM>
</body>
</html>

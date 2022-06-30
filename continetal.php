<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
include('db.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($con,"SELECT * FROM conti WHERE code='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title>online shoping mart jammu</title>
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
<body>
<center style="background-color:#333; padding: 14px 16px;" ><font color=white size=5>Online Shoping Mart Jammu</center></font>
<img src=top.jpg height=230 width=100%>
<table width=100% bgcolor=#333>
<td style="background-color:#333; padding: 14px 16px;"><a href=index.php><img src=menu.png height=30 width=50></a></center></font></td>
<td style="background-color:#333; padding: 14px 16px;" ><font color=white size=5><center>Italian Cuisine(Veg & Non-veg)</center></font></td>
<td style="background-color:#333;">




<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
 ?>
<div class="cart_div">
<a href="cart.php"><img src="cart.png" height=30 width=70> <span><?php echo $cart_count; ?></span></a>
</div>
</td>
</table>
<div style="width:1100px; margin:30 auto;">

<?php

$sql = "SELECT * FROM conti";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image' ><img src='".$row['image']."' height=200 width=200 /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>Rs".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        } }}
//mysqli_close($con);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>






<br /><br />

</div>
</body>
</html>

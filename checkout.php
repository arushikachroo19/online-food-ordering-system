<?php
session_start();
session_destroy();

$status="";
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
}
function updateDbCart(){
$userId = $_SESSION['id'];
//create our json cart if it exists ready to put in db
if (!empty($_SESSION['shoping_cart'])){
$jsonCart = json_encode($_SESSION['shoping_cart']);
} else {
$jsonCart = '';
}
}
//}
//function your_function() {
  //  if( function_exists('WC') ){
   //     WC()->cart->empty_cart();
   // }
//}
//add_action('wp_logout', 'your_function');
}

//if ($link === false) {
  //  die("ERROR: Could not connect. ".mysqli_connect_error());
//}
  //   if($tid != null){
//$sql = "INSERT INTO bill (id, name, quty, price, tprice, date)
  //        VALUES('$id', '$name', '$quantity', '$price', '$total_price', 'now()') ";
    //if (mysqli_query($link, $sql))
//{
  //  echo "Records inserted successfully.";
//}
//else
//{
    //echo "ERROR: Could not able to execute $sql. "
       // .mysqli_error($link);
//}
 //}
//mysqli_close($link);

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
<table width=100% bgcolor=#333>
<td style="background-color:#333; padding: 14px 16px;"><a href=index.php><img src=menu.png height=30 width=50></a></center></font></td>
<td style="background-color:#333; padding: 14px 16px;" ><font color=white size=5><center></center></font></td>
<td style="background-color:#333;">
</td>
</table>
<div style="width:700px; margin:50 auto;">

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
}
 ?>
<?php

?>

<div class="cart">
<form method='post' action=''>

<?php
//$pno=$_SESSION["pno"];
//$add=$_SESSION["add"];

if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
    }    ?>
    <div class='product_wrapper' >
                                 <table  class='product_wrapper'>

<td class=buy>Your Order has been Placed!!</td>
<td class=buy>Thanks for the Order !!!      </td>
</table>
</div>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>



</div>
</body>
</html>

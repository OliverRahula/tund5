<?php
$car_plate_error = "";
$color_error = "";
$create_car_plate = "";
$create_color = "";
$create_car_plate_error = "";
$create_color_error = "";
$car_plate = "";
$color = "";

if(isset($_POST["create"])){
			if ( empty($_POST["create_car_plate"]) ) {
				$create_car_plate_error = "See väli on kohustuslik";
			}else{
				$create_car_plate = cleanInput($_POST["create_car_plate"]);
			}
			if ( empty($_POST["create_color"]) ) {
				$create_color_error = "See väli on kohustuslik";
			} else {
				if(strlen($_POST["create_color"])) {
					$create_color_error = "See väli on kohutuslik";
				}else{
					$create_color = cleanInput($_POST["create_color"]);
				}
			}
			if(	$create_car_plate_error == "" && $create_color_error == ""){
				echo "Võib auto luua! Auto number on ".$create_car_plate." ja parool on ".$create_color;
				
				$password_hash = hash("sha512", $create_password);
				echo "<br>";
				echo $password_hash;

?>

<!DOCTYPE html>
<html>
<body>
<h2>Lisa auto</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
  	<label for="car_plate" >auto nr</label><br>
	<input id="car_plate" name="car_plate" type="text" value="<?=$car_plate; ?>"> <?=$car_plate_error; ?><br><br>
  	<label>värv</label><br>
	<input name="color" type="text" value="<?=$color; ?>"> <?=$color_error; ?><br><br>
  	<input type="submit" name="create" value="Salvesta">
  </form>

</body>  
</html>
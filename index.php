<?php
if (isset($_POST["name"]) && isset($_POST["colors"])) {
  $name = $_POST["name"];
  $colors = implode(", ", $_POST["colors"]);

  echo "Name: " . $name . "<br>";
  echo "Colors: " . $colors;
} else {
  echo "Name and colors selection is mandatory.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
  Name: <input type="text" name="name"><br><br>
  Colors:<br>
  <input type="checkbox" name="colors[]" value="red"> Red<br>
  <input type="checkbox" name="colors[]" value="blue"> Blue<br>
  <input type="checkbox" name="colors[]" value="green"> Green<br>
  <input type="checkbox" name="colors[]" value="yellow"> Yellow<br>
  <input type="submit" value="Submit">
</form>
</body>
</html>
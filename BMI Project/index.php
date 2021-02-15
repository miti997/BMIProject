<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test 1 BMI</title>
  <meta charset="UTF-8">
</head>
<body>
  <form method="post">
    <label for="weight">Greutate</label>
    <input type="text" name="weight" id="weight" placeholder="Introduceți greutatea"><br>
    <label for="height">Înălțime</label>
    <input type="text" name="height" id="height" placeholder="Introduceți înălțimea"><br>
    <button type="submit" name="submit" id="submit" value="Calculate"> Press here to calculate you body mass index</button><br>
  </form>
  <?php include 'calc.php';//we include the php script
  $bmi=new Calc();//store the result in bmi
  echo $bmi->validate();//call function to validate
  ?>
</body>
</html>

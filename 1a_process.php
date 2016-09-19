<h2>Opgave 1B HTML</h2>
<?php $nameErr = "Naam is nodig";
      $numbErr = "Nummer is nodig";?>

Hallo <?php
if (empty($_POST["name"])){
  echo $nameErr;
}
  else{
    echo $_POST["name"];
  }
?>
<br>
<?php
if (empty($_POST["fout"])){
  echo $numbErr;
}else{
  echo "Je hebt" . $_POST["fout"];
}
?>

<br>
<br>
<a href="1a.php">Ga terug naar de homepage</a>
<br>
<br>
<a href=""

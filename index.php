<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "produkty";

$connect = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
if(!$connect){
  die ("Připojení selhalo " . mysqli_connect_error());
}



if(isset($_POST['submit'])){
  
  $id = $_POST['id'];
  $mnozstvi = $_POST['mnozstvi'];

  $sql = "INSERT INTO id(ID, Množství) VALUES('$id', '$mnozstvi')";

  $run = mysqli_query($connect, $sql);

  if($run){
    echo "Vše proběhlo správně";

  }else
    echo "Něco je špatně";
}

?>

<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Index</title>
    </head>
    <body>
     
    <form action="index.php" method="post">
        <input type="number" name="id" placeholder="ID produktu">
        <input type="number" name="mnozstvi" placeholder="Množství produktu">
        <button type="submit" name="submit">Odeslat</button>
    
    </form>
    
    
    </body>
</html>
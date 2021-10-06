<?php
 //session_start();
            //Establish connection with the database
            $user = 'root';
            $password = 'root';
            $db = 'covid_us';
            $host = 'localhost';
            $port = 8889;
            //$port = 5500;
           

            $conn = mysqli_init();
            $success = mysqli_real_connect(
                $conn,
                $host,
                $user,
                $password,
                $db,
                $port
             );
            
            if(!$conn){
                echo mysqli_connect_errno() . ":" . mysqli_connect_error();
                exit;
            }

          /*  $conn = new mysqli($host, $user, $password, $db);

            if (mysqli_connect_error()) {
                echo "error connect";
                die("Database connection failed: " . mysqli_connect_error());
               
            }
            */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>Document</title>
</head>
<body>
<header>
      <h1>BE ON TOP OF Covid-19</h1>
      <h2>Novel Coronavirus Dashboard for the USA </h2>
      <h5>updates every 30 minutes</h5>
  </header>
<span><h2>New York by County</h2></span>    
</form>
</fieldset>

<?php
$sql_total = mysqli_query($conn,"SELECT * FROM County");
echo "<table class='tbstyle' >
<tr>
      <th>County</th>
      <th>Cases</th>
      <th>Deaths</th>
</tr>
  ";
while($row = $sql_total ->fetch_assoc()){
    echo "<tr>";
        echo "<td>" . $row['county_name']."</td>";
        echo "<td>" . $row['cases']."</td>";
        echo "<td>" . $row['deaths']."</td>";
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
<title> <?php echo $_POST['team'];?> - <?php echo $_POST['season'];?></title>
<?php include 'top.php';?>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <h1 style="text-align:center;">Search for another Team</h1>

<div class="searches">
<form action="" method="POST">
Team Name:
<select name="team">
	<option>--Select Team--</option>
	<option value="Man United"> Man United</option>
	<option value="Chelsea">Chelsea</option>
    <option value="Arsenal">Arsenal</option>
    <option value="Tottenham">Tottenham</option>
    <option value="Liverpool">Liverpool</option>
	<option value="Burnley">Burnley</option>
    <option value="Portsmouth">Portsmouth</option>
    <option value="Man City">Man City</option>
    <option value="Bolton">Bolton</option>
    <option value="Fulham">Fulham</option>
    <option value="Wigan"> Wigan</option>
    <option value="Birmingham"> Birmingham</option>
    <option value="Aston Villa">Aston Villa</option>
    <option value="Blackburn"> Blackburn</option>
    <option value="Everton"> Everton</option>
    <option value="Sunderland"> Sunderland</option>
    <option value="Wolves"> Wolves</option>
    <option value="West Ham"> West Ham</option>
    <option value="stoke"> stoke</option>
    <option value="Hull"> Hull</option>
</select>
Season:
<select name="season">
<option>--Select season--</option>
<option value="season0910"> season0910</option>
<option value="season1011">season1011</option>
<option value="season1112">season1112</option>
<option value="season1213">season1213</option>
<option value="season1314">season1314</option>
<option value="season1415">season1415</option>
<option value="season1516">season1516</option>
<option value="season1617">season1617</option>
<option value="season1718">season1718</option>
<option value="season1819">season1819</option>
</select>

<input type="submit" name='submit' value='search'>

</form>
</div>

<a href="myepld.php">Return to Home</a>    

</div>

<div class=icon-headers>
<img src="images/<?php echo $_POST['team'];?>.png" alt="">
<h2> Search results for all games played by "<?php echo $_POST['team'];?>" Football Club in "<?php echo $_POST['season'];?>"</h2>
</div>





<div class="broom">
    <table>
    <caption> </caption>
    <tr>
    <th>Home Team</th>
    <th></th>
    <th>AwayTeam</th>
    <th>Date</th> 
  
    </tr>
<?php
if(isset($_POST['submit'])){

$team=$_POST['team'];
$season=$_POST['season'];

$sql= "SELECT *  FROM $season WHERE HomeTeam='$team' OR AwayTeam='$team'";

include("connect.php");


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> ";

echo"<td>".$row['HomeTeam']."</td>";
echo"<td>Vs</td>";
echo"<td>".$row['AwayTeam']."</td>";
echo"<td>".$row['Date']."</td>"; 

       }
} else {
    echo "TEAM not found";
}

        echo "</tr>";
$conn->close();

}
?>

    </table>
<div class="footer-line">
</div>

<footer>
<?php include 'bottom.php';?>
<a href="myepld.php">Return to Home</a>    

</footer>
   
   

</body>

</html>
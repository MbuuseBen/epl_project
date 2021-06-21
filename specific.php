<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
<title> <?php echo $_POST['team1'];?> Vs <?php echo $_POST['team2'];?></title>
<?php include 'top.php';?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<h1 style="text-align:center;">Search for other teams  </h1>

<div class="searches">
<form action="specific.php" method="POST">

Team Name1:
<select name="team1">
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

Team Name2:
<select name="team2">
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
<input type="submit" name='submit' value='search'>
</form>
</div>

<div>
    <table>
    <caption><h2><img src="images/<?php echo $_POST['team1'];?>.png"><?php echo $_POST['team1'];?>  Vs <?php echo $_POST['team2'];?> <img src="images/<?php echo $_POST['team2'];?>.png" ></h2></caption>
    <tr>
    <th>Date</th> 
    <th>Home Team</th>
    <th>AwayTeam</th>
    <th colspan="2">Final Score</th>
    <th>Referee</th>
   
    </tr>
<?php
if(isset($_POST['submit'])){

$team1=$_POST['team1'];
$season=$_POST['season'];
$team2=$_POST['team2'];

$sql= "SELECT *  FROM $season WHERE HomeTeam='$team1' AND AwayTeam='$team2' UNION ALL SELECT *  FROM $season WHERE HomeTeam='$team2' AND AwayTeam='$team1'";

include("connect.php");


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> ";
echo"<td>".$row['Date']."</td>"; 
echo"<td>".$row['HomeTeam']."</td>";
echo"<td>".$row['AwayTeam']."</td>";
echo"<td>".$row['FTHG']."</td>";
echo"<td>".$row['FTAG']."</td>";
echo"<td>".$row['Referee']."</td>";
    }
} else {
    echo "0 results";
}

echo "</tr>";
$conn->close();

}
?>
 </table>
</div>

<div class="footer-line">
</div>

 <footer>
<?php include 'bottom.php';?>
<a href="myepld.php">Return to Home</a>    
</footer>
   
</body>

</html>
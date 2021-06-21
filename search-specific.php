<html>
<head>
<title> Wins,Losses,Draws</title>
<?php include 'top.php';?>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="myepld.php">Return to Home</a>    
</head>

<body>

<div class="team-info">
<img src="images/<?php echo $_POST['team'];?>.png"  alt="">
<h1 style="text-align:center;"> Showing search results for <?php echo $_POST['team'];?> Football Club's wins,losses and draws in <?php echo $_POST['season'];?> </h1>
</div>

<div>


    <table>
    <caption><h3> TEAMS IT WON</h3></caption>
    <tr>
    <th>Date</th> 
    <th>Home Team</th>
    <th>AwayTeam</th>
    <th colspan="2">Final Score</th>
    <th>Referee</th>
    </tr>
<?php
if(isset($_POST['submit'])){

$team=$_POST['team'];
$season=$_POST['season'];


$sql= "SELECT * FROM $season WHERE AwayTeam='$team' AND FTR='a' UNION ALL SELECT * FROM $season WHERE HomeTeam='$team' AND FTR='h'";


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
    echo "TEAM NOT FOUND";
}

echo "</tr>";
$conn->close();

}
?>
    </table>
    </div>
    

<div>
<table >
<caption><h3>TEAMS IT LOST TO</h3></caption>
    <tr>
    <th>Date</th> 
    <th>Home Team</th>
    <th>AwayTeam</th>
    <th colspan="2">Final Score</th>
    <th>Referee</th>
    </tr>
<?php
if(isset($_POST['submit'])){

$team=$_POST['team'];
$season=$_POST['season'];


$sql= "SELECT * FROM $season WHERE AwayTeam='$team' AND FTR='h' UNION ALL SELECT * FROM $season WHERE HomeTeam='$team' AND FTR='a'";


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
    echo "TEAM NOT FOUND";
}

echo "</tr>";
$conn->close();

}
?>

    </table>


</div>


<div>
<table>
<caption><h3>TEAMS IT DREW WITH</h3></caption>
    <tr>
    <th>Date</th> 
    <th>Home Team</th>
    <th>AwayTeam</th>
    <th colspan="2">Final Score</th>
    <th>Referee</th>
    </tr>
<?php
if(isset($_POST['submit'])){

$team=$_POST['team'];
$season=$_POST['season'];


$sql= "SELECT *FROM $season WHERE HomeTeam='$team' AND FTR='d' UNION ALL SELECT * FROM $season WHERE AwayTeam='$team' AND FTR='d'";


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
    echo "TEAM NOT FOUND";
}

echo "</tr>";
$conn->close();

}
?>

    </table>


</div>
  
<h2 style="text-align:center;">search here for another team</h2>
    <div class="searches">
    <form action="search-specific.php" method="POST">
Team_Name:
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

<footer>
<?php include 'bottom.php';?>
<a href="myepld.php">Return to Home</a>    
</footer>
   
</body>

</html>
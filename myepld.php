<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<head>
<title>English Premiere League</title>
<?php include 'top.php';?>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="header-line1">
</div>

<div class="slag">
    <h3>The Home of European Football</h3>
</div>

<div class="header-line1">
</div>

<div>
<div class="broom">
    <table>
    <caption><h2>Premiere league table </h2> </caption>
    <tr>
    <th>POS</th>
    <th>TEAM</th>
    <th>P</th>
    <th>W</th>
    <th>D</th>
    <th>L</th>
    <th>Pts</th> 
    </tr>
<?php
$sql="SELECT * FROM season0910rankings ORDER BY `Pts`  DESC ";


include("connect.php");


$result = $conn->query($sql);
$count = 1;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> ";
       echo "<td>".$count."</td>";

echo"<td>".$row['TEAM']."</td>";
echo"<td>".$row['P']."</td>";
echo"<td>".$row['W']."</td>";
echo"<td>".$row['D']."</td>"; 
echo"<td>".$row['L']."</td>";
echo"<td>".$row['Pts']."</td>";
$count++;
       }
} else {
    echo "TEAM not found";
}

        echo "</tr>";
$conn->close();

?>

    </table>

</div>

    
    <h1 style="text-align:center;">Search for a Team  to see all the games it has played in that season</h1>
    
    <div class="header-line1">
</div>

    <div class="searches">
    <form action="search-all.php" method="POST">

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
   <!-- <input type="text" name="team">-->
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
    <div class="header-line1">
</div>


<h1 style="text-align:center;">Search for all teams that lost/won/drew against a particular team </h1>

<div class="searches">
<form action="search-specific.php" method="POST">

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

<h1 style="text-align:center;">Search for specific matches  </h1>

<div class="header-line1">
</div>

<div class="searches">
<form action="specific.php" method="POST">

Team1 Name:
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

Team2 Name:
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

<div class="header-line">
</div>


<footer>
<?php include 'bottom.php';?> 
<a href="myepld.php">Return to Home</a>   
</footer>
   

</body>

</html>
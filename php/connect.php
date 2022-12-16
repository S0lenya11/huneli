<?PHP
// Server ismi:
$servername = "fdb3.awardspace.net";
$username = "2059323_bilsem";
$password = "bilsem123";
$dbname = "2059323_bilsem";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Veri Tabanına bağlanılamadı. Bir sorun var." . $conn->connect_error);
}
echo "<br/><br/>Veri Tabanına Bağlanıldı."."<br><br>";
/* Form numarası*/
$sql="SELECT * FROM Dis_Servis_Formu ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

// check the connection
if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

// create a SELECT query
$query = "SELECT name FROM names";

// execute the query and get the result set
$result = mysqli_query($conn, $query);

// check for errors
if (!$result) {
  printf("Error: %s\n", mysqli_error($conn));
  exit();
}

// start the table
echo "<table>";
echo "<tr><th>Name</th></tr>";

// iterate over the result set and output each name
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "</tr>";
}

// end the table
echo "</table>";

// close the connection
mysqli_close($conn);
?>

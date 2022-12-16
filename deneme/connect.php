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
?>
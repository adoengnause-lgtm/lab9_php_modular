
<?php
require_once __DIR__ . '/../../config/database.php';

$id = $_GET['id'];
$sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);

header('location: index.php');
?>
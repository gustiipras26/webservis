<?php
 
$connect=mysqli_connect("localhost", "id12804342_kerjalapangan", "03037099", "id12804342_praktek");
 
$query = "SELECT * from tabel_mobil ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "id" => $row["id"],
    "merek" => $row["merek"], 
    "jumlah" => $row["jumlah"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA MAHASISWA\":" . $data . "}";
?>

<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['id'])) {
$url = 'https://prassgusti.000webhostapp.com/tabel.php';
//$data = "[{\"id\":\".$_POST['id'].\",\"merek\":\".$_POST['merek'].\",\"jumlah\":\".$_POST['jumlah'].\"}]";//
$data="{\"id\":\"".$_POST['id']."\",\"merek\":\"".$_POST['merek']."\",\"jumlah\":\"".$_POST['jumlah']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="">
<table>
<tr>
<td>ID</td>
<td><input type="text" name="id" id="id"></td>
</tr>
<tr>
<td>Merek</td>
<td><input type="text" name="merek" id="merek"></td>
</tr>
<tr>
<td>Jumlah</td>
<td><input type="text" name="jumlah" id="jumlah"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>
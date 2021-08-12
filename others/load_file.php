<?php


$url = "https://jsonplaceholder.typicode.com/users";
$val = $_GET['page'];
echo ($val);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);
$data = json_decode($result, true);
echo "<table border='1'>
     <tr>
     <th>id</th>
     <th>name</th>
     <th>username</th>
     <th>amail</th>
     </tr>";
for ($i = ($val - 1) * 5; $i < count($data); $i++) {
    echo "<tr>\n";
    echo "<td>" . $data[$i]['id'] . " </td> \n";
    echo "<td>" . $data[$i]['name'] . "</td> \n";
    echo "<td>" . $data[$i]['username'] . "</td> \n";
    echo "<td>" . $data[$i]['email'] . " </td> \n";
    echo "</tr>";
}
echo "</table>";

<?php require('../config/koneksi.php');
require('../config/query.php');

header('Access-Control-Allow-Origin: *');
date_default_timezone_set('Asia/Jakarta');
$_query = new crud();

function checkRoles($roles)
{
    switch ($roles) {
        case '1':
            return 'Admin';
            break;
        case '2':
            return 'Sales';
            break;
        default:
            break;
    }
}

$json = array(
    "response_status" => "OK",
    "response_messages" => "",
    "data" => array()
);

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? md5($_POST['password']) : '';

$query = "SELECT * FROM users WHERE email = '$email'";
$result = $_query->execute($query);
$num = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)) {
    $arr_row = array();
    $arr_row['id_user'] = $row['id_user'];
    $arr_row['email'] = $row['email'];
    $arr_row['password'] = $row['password'];
    $arr_row['level'] = checkRoles($row['level']);
    
}

if ($num != 0) {
    if ($arr_row['email'] == $email && $arr_row['password'] == $password) {
        $json['data'][] = $arr_row;
    } else {
        $json['response_status'] = 'wrong_emailpassword';
        $json['response_messages'] = 'Email atau Password salah';
    }
} else {
    $json['response_status'] = 'email_not_found';
        $json['response_messages'] = 'Email tidak ditemukan';
}

header('Content-Type: application/json');
print json_encode($json, JSON_PRETTY_PRINT);

?>
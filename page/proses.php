<?php require('../config/koneksi.php');
require('../config/query.php');

$_query = new crud();
session_start();

if(isset($_POST['login'])){
    prosesLogin($_query);
}

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

function prosesLogin($crud)
{
    $email = $_POST['txt_email'];
    $password = $_POST['txt_password'];

    if (!empty(trim($email)) && !empty(trim($password))) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $crud->execute($query);

        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $emailval = $row['email'];
            $passwordval = $row['password'];
            $fullname = $row['fullname'];
            $level = checkRoles($row['level']);
        }

        if ($num != 0) {
            if ($emailval == $email && $passwordval == md5($password)) {
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $emailval;
                $_SESSION['password'] = $passwordval;
                $_SESSION['roles'] = $level;
                $_SESSION['fullname'] = $fullname;
                $_SESSION['flashLogin'] = 'yes';

                header('Location: redirect.php');
            } else {
                $_SESSION['flashLogin'] = 'Email atau Password Salah';
                header('Location: login.php');
            }
        } else {
            $_SESSION['flashLogin'] = 'Email tidak ditemukan';
            header('Location: login.php');
        }
    }
}

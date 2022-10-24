<?php require('../config/koneksi.php');
require('../config/query.php');

session_start();
$_query = new crud();

if (isset($_POST['login'])) {
    prosesLogin($_query);
} else if(isset($_GET['logout'])){
    prosesLogout();
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

function prosesLogout()
{
    if (session_destroy()) {
        setcookie('id', null, time() - (60 * 30) + 1, '/');
        setcookie('email', null, time() - (60 * 30 + 2), '/');
        setcookie('password', null, time() - (60 * 30 + 1), '/');

        setcookie('roles', null, time() - (60 * 30 + 1), '/');
        header('Location: login.php');
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
            $id = $row['id_user'];
            $emailval = $row['email'];
            $passwordval = $row['password'];

            $level = checkRoles($row['level']);
        }

        if ($num != 0) {
            if ($emailval == $email && $passwordval == md5($password)) {
                setcookie('id', $id, time() + (60 * 30 * 1 * 1), '/');
                setcookie('email', $emailval, time() + 60 * 30 * 1 * 1, '/');
                setcookie('password', $passwordval, time() + 60 * 30 * 1 * 1, '/');
                setcookie('roles', $level, time() + 60 * 30 * 1 * 1, '/');

                $_SESSION['id'] = $id;
                $_SESSION['email'] = $emailval;
                $_SESSION['password'] = $passwordval;
                $_SESSION['roles'] = $level;

                $_SESSION['flashLogin'] = 'yes';

                header('Location: redirect.php?loading=' . md5('level'));
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


<?php
//var_dump($_POST);
$page_title='WELCOME LOG-IN HERE';
require_once('views/page_top.php');

?>


<?php
    const SESS_USERNAME = 'sess_username';

    // Starting session if not started yet
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    // var_dump($_SESSION);
    // Function that indicates that the user is logged in or not
    // True is there is a key SESS_USERNAME in the session
    function user_logged_in() {
        return array_key_exists(SESS_USERNAME, $_SESSION);
    }

    // Function that tells that given username and password match
    function authenticate_user($username, $password) {
        return true;
    }

    // Caring about POST data
    // var_dump($_POST);
    if (array_key_exists('login', $_POST) && array_key_exists('username', $_POST)&& array_key_exists('password', $_POST) && ( ! user_logged_in())) {
        if (authenticate_user($_POST['username'], $_POST['password'])) {
            // Adding variable in the session
            $_SESSION[SESS_USERNAME] = $_POST['username'];
        }
    } elseif (array_key_exists('logout', $_POST) && user_logged_in()) {
        unset($_SESSION[SESS_USERNAME]);       
    }

?>

<?php if (user_logged_in()) { ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="logoutform">
    <input type="submit" name="logout" value="Logout" />
</form>
<?php } else { ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" id="loginform<">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"  placeholder=" "required
        value="<?= array_key_exists('username', $_POST) ? $_POST['username'] : ''; ?>" 
    />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" 
        value=""  placeholder=" "required
    />
    <input type="submit" name="login" value="Login" />    
</form>
<?php } ?>


<?php
//var_dump($_POST);
$page_title='';
require_once('views/page_bottom.php');

?>

<?php
require_once('../model/database.php');
require_once('../model/workshop_db.php');

session_start();

$first_name = '';
$last_name = '';

$action = strtolower(filter_input(INPUT_POST, 'action'));
if ($action == NULL) {
    $action = strtolower(filter_input(INPUT_GET, 'action'));
    if ($action == NULL) {
        if(isset($_SESSION['email']) && (get_user($_SESSION['email'])[0]['admin'] == true)){
            $action = 'show_admin_page';
        }
        else if (isset($_SESSION['email'])){
            $action = 'show_workshop_signup';
        }
        else{
            $action = 'show_login';
        }
    }
}

switch ($action) {
    case 'return':
        header("Location: index.php");

        exit();
        break;

    case 'show_login':
        $email = '';
        $password = '';
        $message = '';
        $error = false;
        $message = "";

        include("login.php");

        exit();
        break;

    case 'show_create_account':
        $first_name = '';
        $last_name = '';
        $email = '';
        $password = '';
        $message = '';
        $passconfirm = '';
        $school = '';
        $advisor = '';
        $error = false;

        include("create_account.php");

        /*
        $email = '';
        $password = '';
        $error = true;
        $message = "Registration has closed.";

        include("login.php");

        exit();*/
        break;

    case 'show_admin_page':
        $users = get_users();
        $workshops_1 = get_workshops(1);
        $workshops_2 = get_workshops(2);
        $user_sel = '';

        include("admin_page.php");

        exit();
        break;

    case 'check_in_user':
        $user_sel = filter_input(INPUT_GET, 'user_sel');
        check_in($user_sel);

        $users = get_users();
        $workshops_1 = get_workshops(1);
        $workshops_2 = get_workshops(2);
        $user_sel = '';

        break;

    case 'check_out_user':
        $user_sel = filter_input(INPUT_GET, 'user_sel');
        check_out($user_sel);

        $users = get_users();
        $workshops_1 = get_workshops(1);
        $workshops_2 = get_workshops(2);
        $user_sel = '';

        break;

    case 'login':
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $user = get_user($email);
        $error = false;
        if (($user != null) && (password_verify($password, $user[0]['password']))){
        //if (($user != null)){
            $_SESSION['email'] = $email;
            $first_name = $user[0]['first_name'];
            $last_name = $user[0]['last_name'];
            $_SESSION['email'] = $user[0]['email'];
            $logged_in = true;

            $workshops_session_1 = get_workshops(1);
            $workshops_session_2 = get_workshops(2);
            $workshop_1_select = '';
            $workshop_2_select = '';
            $dinner_select = '';
            if(get_user($_SESSION['email'])[0]['admin'] == true){
                $users = get_users();
                $workshops_1 = get_workshops(1);
                $workshops_2 = get_workshops(2);
                $user_sel = '';
                include("admin_page.php");
            }
            else{
                $ended = false;
                include("workshop_signup.php");
            }
        }
        else if($user == null){
            $error = true;
            $message = 'Login Failed, User account does not exist!';
            include("login.php");
        }
        else{
            $error = true;
            $message = 'Login Failed, Please Check Password.';
            include("login.php");
        }
        exit();
        break;

    case'register':
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $grade = filter_input(INPUT_POST, 'grade');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $passconfirm = filter_input(INPUT_POST, 'passconfirm');
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $school = filter_input(INPUT_POST, 'school');
        $advisor = filter_input(INPUT_POST, 'advisor');

        if(user_exists($email)){
            $error = true;
            $message = "User account already exists! Please log in.";
            $email = '';
            $password = '';
            include("login.php");
        }
        else if($password != $passconfirm){
            $error = true;
            $message = "Passwords do not match.";
            include("create_account.php");
        }
        else{
            create_account($first_name, $last_name, $grade, $email, $password_hash, $school, $advisor);
            $error = true;
            $message = "Registration success! Please log in.";
            $email = '';
            $password = '';
            include("login.php");
        }

        /*$email = '';
        $password = '';
        $error = true;
        $message = "Registration has closed.";

        include("login.php");*/

        exit();
        break;

    case 'logout':
        $first_name = '';
        $last_name = '';
        $email = '';
        $_SESSION['email'] = null;
        header("Location: index.php");
        exit();
        break;

    case 'show_workshop_signup':
        $workshops_session_1 = get_workshops(1);
        $workshops_session_2 = get_workshops(2);
        $workshop_1_select = '';
        $workshop_2_select = '';
        $dinner_select = '';
        $user = get_user($_SESSION['email']);

        if(get_user($_SESSION['email'])[0]['admin'] == true){
            $users = get_users();
            $workshops_1 = get_workshops(1);
            $workshops_2 = get_workshops(2);
            $user_sel = '';
            include("admin_page.php");
        }
        else {
            $ended = false;
            include("workshop_signup.php");
        }

        exit();
        break;

    case 'submit':
        $error_msg = '';
        $workshop_1 = filter_input (INPUT_POST, 'workshop_1_select');
        $workshop_2 = filter_input (INPUT_POST, 'workshop_2_select');
        $dinner = filter_input (INPUT_POST, 'dinner_select');
        $user = get_user($_SESSION['email']);
        if($user[0]['workshop_1_id'] != null){
            remove_signup($user[0]['workshop_1_id'], 1);
        }
        if($user[0]['workshop_2_id'] != null){
            remove_signup($user[0]['workshop_2_id'], 2);
        }
        $dinner_choice;
        if($dinner == "on"){
            $dinner_choice = 1;
        }
        else{
            $dinner_choice = 0;
        }

        signup($workshop_1, $workshop_2, $dinner_choice, $_SESSION['email']);
        add_signup($workshop_1, 1);
        add_signup($workshop_2, 2);

        $workshop_1_result = get_workshop_by_id($workshop_1, 1);
        $workshop_2_result = get_workshop_by_id($workshop_2, 2);

        if(count($workshop_1_result) < 1){
            $workshop_1_name = "Not Signed Up";
        }
        else{
            $workshop_1_name = $workshop_1_result[0]['name'];
        }
        if(count($workshop_2_result) < 1){
            $workshop_2_name = "Not Signed Up";
        }
        else{
            $workshop_2_name = $workshop_2_result[0]['name'];
        }

        if ($dinner_choice == 1) {
            $dinner_choice_name = "Yes";
        }
        else {
            $dinner_choice_name = "No";
        }

        include("success.php");

        exit();
        break;

    default:
        exit();
        break;
    }

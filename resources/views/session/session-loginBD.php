

<?php 
    
    require('dbconnect.php');
    session_start();
    $user_log = $_POST['username'];
    // echo $username;
    $pass_log = $_POST['password'];

    if($user_log == 'Adminmaster'){
        // echo 'ok';
        $chackadmin = "SELECT * FROM admin_company WHERE admin_company_user = '$user_log' and admin_company_pass = '$pass_log'";
        $condb = mysqli_query($conn,$chackadmin);
        $dataadmin = mysqli_fetch_assoc($condb);
        $_SESSION['adminid'] = $dataadmin['admin_company_id'];
        $_SESSION['adminauser'] = $dataadmin['admin_company_user'];
        $_SESSION['adminname'] = $dataadmin['admin_company_name'];
        $_SESSION['adminemail'] = $dataadmin['admin_email'];
        $_SESSION['pathimg'] = $dataadmin['pathimg'];
        $_SESSION['statusA'] = $dataadmin['status'];
        $_SESSION['successloginadmin'] = "successloginadmin";
        
        header('Location: /homeadmin');
        exit(0);
    }

    else {
        $chackuser = "SELECT * FROM users WHERE username = '$user_log' and password = '$pass_log'";
        // echo $chackuser;
        $condb = mysqli_query($conn,$chackuser);
        $datauser = mysqli_fetch_assoc($condb);
        $_SESSION['usersid'] = $datauser['id'];
        $_SESSION['usernameguest'] = $datauser['username'];
        $_SESSION['nameuser'] = $datauser['name'];
        $_SESSION['emailuser'] = $datauser['email'];
        $_SESSION['pathimg'] = $datauser['pathimg'];
        $_SESSION['status'] = $datauser['status'];
        $_SESSION['message'] = "successlogin";

        header( "refresh: 0; url=/homeBD" );
        exit(0);

    }
    
    
?>
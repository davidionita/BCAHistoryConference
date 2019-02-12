<!DOCTYPE html>
<html lang="en">

<head>
	<title>BCA History Conference</title>
	<link rel="stylesheet" href="../styles.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

</head>

	<div id="welcome">
        <div class="row">
            <h3>BCA History Conference Workshop Sign Up</h3>
            <p>Friday, April 12th, 1:30 - 6:00 PM</p>
            <?php if(isset($_SESSION['email'])){ ?>
            <h5><a href="permissionslip.pdf">Permission Slip</a> (Print and Hand in to Mrs. Wallace - Room 236)</h5>
            <br>
            <form class="col s12" name="action" action="index.php" method="POST" value="logout">
                <input type="hidden" name="action" value="logout">
                <button class="btn waves-effect waves-light" type="submit" name="action" value="logout" formnovalidate>
                    Logout
                </button>
            </form>
            <?php }?>
        </div>
	</div>

    <div class="divider"></div>
    <br>

<body>

<html>
<head>
	<title>BCA History Conference</title>
	<link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
</head>
<body>
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
</body>
</html>

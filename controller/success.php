<html>
<head>
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Registration Success!</title>
</head>
<body>
    <div class="col s12" id="success">
        <h3>Registration Succeeded</h3>
        <p>Thank you for signing up!</p>
        <div style="text-align:left;padding-left:30%;margin-top:7vh;margin-bottom:5vh;">
            <p>Session 1: <?php echo(htmlspecialchars($workshop_1_name))?></p>
            <p>Session 2: <?php echo(htmlspecialchars($workshop_2_name))?></p>
            <p>Staying for dinner?: <?php echo(htmlspecialchars($dinner_choice_name))?></p>
        </div>
    <form class="col s12" name="action" action="index.php" method="POST" value="return">
        <input type="hidden" name="action" value="return">
        <button class="btn waves-effect waves-light" type="submit" name="action" value="return">Home
            <i class="material-icons right">home</i>
        </button>
    </form>
    </div>
</body>
</html>

<?php include '../view/footer.php'; ?>
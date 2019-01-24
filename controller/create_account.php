<?php include '../view/header.php'; ?>
    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
    <section>
        <div id="sign_up">
            <div class="row">
                <div class="col s12">
                    <p>Please use the same information as when you filled out the google form.</p>
                    <p>Welcome! Please Create an account to begin.</p>
                </div>
            </div>
            <div class="row">
                <form class="col s12" name="action" action="index.php" method="POST" value="register">
                    <input type="hidden" name="action" value="register">
                    <div class="row">
                        <div class="input-field col s6">
                            <input autocomplete='given-name' name="first_name" id="first_name" type="text" class="validate" value="<?php echo htmlspecialchars($first_name);?>" required>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input autocomplete='family-name' name="last_name" id="last_name" type="text" class="validate" value="<?php echo htmlspecialchars($last_name);?>" required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input autocomplete='email' name="email" id="email" type="email" class="validate" value="<?php echo htmlspecialchars($email);?>" required>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input autocomplete='password' name="password" id="password" type="password" class="validate" value="<?php echo htmlspecialchars($password);?>" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input autocomplete='password' name="passconfirm" id="password" type="password" class="validate" value="<?php echo htmlspecialchars($passconfirm);?>" required>
                            <label for="password">Retype Password</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action" value="register">Submit
                        <i class="material-icons right">send</i>
                    </button>
                    <button class="btn waves-effect waves-light" type="submit" name="action" value="return" formnovalidate>Home
                        <i class="material-icons right">home</i>
                    </button>
                </form>
            </div>
        </div>
    </section>
    </body>
    </html>
<?php if($error == true){ ?> <script>M.toast({html: '<?php echo $message ?>'});</script> <?php }?>
<?php include '../view/footer.php'; ?>
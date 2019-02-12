<?php include '../view/header.php'; ?>

    <section>
        <div id="sign_up">
            <div class="row">
                <div class="col s12">
                    <p>Please use the same information as when you filled out the google form.</p>
                </div>
            </div>
            <div class="row">
                <form class="col s12" name="action" action="index.php" method="POST" value="register">
                    <input type="hidden" name="action" value="register">
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
                    <button class="btn waves-effect waves-light" type="submit" name="action" value="login">Login
                        <i class="material-icons right">send</i>
                    </button>
                    <button class="btn waves-effect waves-light" type="submit" name="action" value="show_create_account" formnovalidate>
                        Create Account
                    </button>
                </form>
            </div>
        </div>
    </section>

<?php if($error == true){ ?> <script>M.toast({html: '<?php echo $message ?>'});</script> <?php }?>
<?php include '../view/footer.php'; ?>
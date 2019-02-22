<?php include '../view/header.php'; ?>

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
                        <div class="input-field col s5">
                            <input autocomplete='given-name' name="first_name" id="first_name" type="text" class="validate" value="<?php echo htmlspecialchars($first_name);?>" required>
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s5">
                            <input autocomplete='family-name' name="last_name" id="last_name" type="text" class="validate" value="<?php echo htmlspecialchars($last_name);?>" required>
                            <label for="last_name">Last Name</label>
                        </div>
                        <div class="input-field col s2">
                            <select name="grade" id="grade" required="required" class="validate">
                                <option value="" disabled selected>Choose grade</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="0">N/A</option>

                            </select>
                            <label>Grade</label>
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
                    <div class="row">
                        <div class="input-field col s6">
                            <input autocomplete='school' name="school" id="school" type="text" class="validate" value="<?php echo htmlspecialchars($school);?>" required>
                            <label for="school">School</label>
                        </div>
                        <div class="input-field col s6">
                            <input autocomplete='advisor' name="advisor" id="advisor" type="text" class="validate" value="<?php echo htmlspecialchars($advisor);?>">
                            <label for="advisor">Advisor Name (Leave blank if BCA student or attending without teacher)</label>
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
<br>
<script>
    $(document).ready(function(){
        $('select').formSelect();
        $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
    });


</script>
<?php if($error == true){ ?> <script>M.toast({html: '<?php echo $message ?>'});</script> <?php }?>
<?php include '../view/footer.php'; ?>
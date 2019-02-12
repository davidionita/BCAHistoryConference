<?php include '../view/header.php'; ?>

    <section>
        <div id="sign_up">
            <div class="row">
                <div class="col s12">
                    <p>Please use the same information as when you filled out the Google Form.</p>
                    <p>To change your registration, type in the same name and email. Then choose new workshops and click submit.</p>
                    <p>Workshop Information found <a href="https://bcahistoryconference.weebly.com/topics.html">here</a>.</p>
                    <?php if($ended == true){  ?> <div style="text-align: center;"><h5>Registration Has Ended</h5></div> <?php }?>
                </div>
            </div>
            <div class="row">
                <form class="col s12" name="action" action="index.php" method="POST" value="Submit">
                    <input type="hidden" name="action" value="Submit">
                    <div class="row">
                        <div class="input-field col s12">
                            <select <?php if($ended == true){  ?> disabled <?php }?>name="workshop_1_select">
                                <?php if($user[0]['workshop_1_id'] == null){ ?>
                                <option value="" disabled selected>Choose Workshop</option>
                                <?php }?>
                                <?php foreach ($workshops_session_1 as $workshop) :
                                    $id = $workshop['id'];
                                    $name = $workshop['name'];
                                    $current_signups = $workshop['current_signups'];
                                    $max_signups = $workshop['max_signups'];
                                    if($current_signups < $max_signups || $user[0]['workshop_1_id'] == $id){
                                    ?>
                                    <option value="<?php echo htmlspecialchars($id)?>" <?php if($user[0]['workshop_1_id'] == $workshop['id']){?>selected<?php }?>>
                                        <?php echo htmlspecialchars($name); ?>
                                    </option>
                                <?php } endforeach; ?>
                            </select>
                            <label>Session 1</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <select <?php if($ended == true){  ?> disabled <?php }?> name="workshop_2_select">
                                <?php if($user[0]['workshop_2_id'] == null){ ?>
                                    <option value="" disabled selected>Choose Workshop</option>
                                <?php }?>
                                <?php foreach ($workshops_session_2 as $workshop) :
                                    $id = $workshop['id'];
                                    $name = $workshop['name'];
                                    $current_signups = $workshop['current_signups'];
                                    $max_signups = $workshop['max_signups'];
                                    if($current_signups < $max_signups || $user[0]['workshop_2_id'] == $id){
                                    ?>
                                    <option value="<?php echo htmlspecialchars($id)?>" <?php if($user[0]['workshop_2_id'] == $workshop['id']){?>selected<?php }?>>
                                        <?php echo htmlspecialchars($name); ?>
                                    </option>
                                <?php } endforeach; ?>
                            </select>
                            <label>Session 2</label>
                        </div>
                    </div>
                    <p>
                        <label>
                            <input <?php if($ended == true){  ?> disabled <?php }?> name="dinner_select" class="filled-in" type="checkbox" <?php if ($user[0]['dinner'] == true){ ?>checked="checked" <?php }?> />
                            <span>Staying for dinner?</span>
                        </label>
                    </p>
                    <br>
                    <button <?php if($ended == true){  ?> disabled <?php }?> class="btn waves-effect waves-light" type="submit" name="action" value="Submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </section>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
<?php include '../view/footer.php'; ?>
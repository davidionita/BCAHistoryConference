<?php include '../view/header.php'; ?>

    <section>
        <div id="admin">
            <div class="row">
                <div class="col s12">
                    <p>Welcome to the admin page, edit users here.</p>
                    <h4>Signups:</h4>
                    <h5>Total Students: <?php echo(count($users)); ?></h5>
                    <?php $count = 0; foreach ($users as $user) :
                        if($user['dinner'] == true){
                            $count += 1;
                        }
                    endforeach;?>
                    <p>Staying for Dinner: <?php echo($count); ?></p>
                    <div class="row">
                        <div class="col s6">
                            <h5>Session 1:</h5>
                            <?php foreach ($workshops_1 as $workshop) :
                                $name = $workshop['name'];
                                $current_signups = $workshop['current_signups'];
                                $max_signups = $workshop['max_signups'];
                            ?>
                                <p><?php echo htmlspecialchars($name)?>:<br> Max: <?php echo htmlspecialchars($max_signups)?><br> Current: <?php echo htmlspecialchars($current_signups)?></p>
                            <?php endforeach; ?>
                        </div>
                        <div class="col s6">
                            <h5>Session 2:</h5>
                            <?php foreach ($workshops_2 as $workshop) :
                                $name = $workshop['name'];
                                $current_signups = $workshop['current_signups'];
                                $max_signups = $workshop['max_signups'];
                                ?>
                                <p><?php echo substr(htmlspecialchars($name),0,63); ?>:<br> Max: <?php echo htmlspecialchars($max_signups)?><br> Current: <?php echo htmlspecialchars($current_signups)?></p>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <input type="text" id="myInput" onkeyup="filterName()" placeholder="Search for a first name...">

            <table id="users" class="responsive-table">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Workshop 1</th>
                    <th>Workshop 2</th>
                    <th>Dinner</th>
                    <th>Status</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($users as $user) :
                    $first_name = $user['first_name'];
                    $last_name = $user['last_name'];
                    $email = $user['email'];
                    $workshop_1 = get_workshop_by_id($user['workshop_1_id'], 1)[0]['name'] ?? "Not Signed Up";
                    $workshop_2 = get_workshop_by_id($user['workshop_2_id'], 2)[0]['name'] ?? "Not Signed Up";
                    $dinner = $user['dinner'];
                    $checked_in = $user['checked_in'];
                    ?>
                        <tr>
                            <td width="10%"><?php echo htmlspecialchars($first_name); ?></td>
                            <td width="10%"><?php echo htmlspecialchars($last_name); ?></td>
                            <td width="5%"><?php echo htmlspecialchars($email); ?></td>
                            <td width="25%"><?php echo htmlspecialchars($workshop_1); ?></td>
                            <td width="25%"><?php echo htmlspecialchars($workshop_2); ?></td>
                            <td>
                                <p><?php if ($dinner == true){ ?>Y <?php }else{?>N<?php }?></p>
                            </td>
                            <td>
                                <?php if ($checked_in == false){ ?>
                                <button class="btn waves-effect waves-light btn-small" onclick="checkUser('<?php echo $user['id']?>')" name="action" value="check_in_user" <?php echo('id="check_'.$user['id'].'"') ?> >Out</button>
                                <?php } else { ?>
                                <button class="btn waves-effect waves-light btn-small" onclick="checkUser('<?php echo $user['id']?>')" name="action" value="check_out_user" <?php echo('id="check_'.$user['id'].'"') ?> >In</button>
                                <?php } ?>
                            </td>
                            <!--
                            <form name="action" action="index.php" method="POST" value="check_in">
                                <input type="hidden" name="user_sel" value="<?php /*echo($user['id']); */?>">
                                <td>
                                    <?php /*if ($checked_in == false){ */?>
                                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action" value="check_in_user" <?php /*echo('id="check_in_'.$user['id'].'"') */?>>Out</button>
                                    <?php /*} else{*/?>
                                        <button class="btn waves-effect waves-light btn-small" type="submit" name="action" value="check_out_user" <?php /*echo('id="check_out_'.$user['id'].'"') */?>>In</button>
                                    <?php /*} */?>
                                </td>
                            </form>
                            -->
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>
    <script>
        function filterName() {
            // Declare variables
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("users");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    <script>
        function checkUser(user_id) {
            console.log('called');

            let post_action = $("#check_" + user_id).val();

            console.log(user_id);
            console.log(post_action);

            let url = 'index.php?action='+post_action+'&user_sel='+user_id;
            let request = new XMLHttpRequest();
            request.open('GET', url, true);
            request.send();

            if (post_action === "check_in_user") {
                $("#check_" + user_id).prop('value', 'check_out_user');
                $("#check_" + user_id).html('In');
            }
            else {
                $("#check_" + user_id).prop('value', 'check_in_user');
                $("#check_" + user_id).html('Out');
            }

        }
    </script>

<?php include '../view/footer.php'; ?>
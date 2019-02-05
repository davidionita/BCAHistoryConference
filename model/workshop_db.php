<?php

function get_workshops($session) {
    if($session == 1){
        $query = 'SELECT *
                from workshop';
    }
    else{
        $query = 'SELECT *
                from workshop2';
    }

    global $db;

    try{
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function user_exists($first_name, $last_name, $email){
    global $db;

    $query = 'SELECT * from user
              WHERE (first_name = :first_name AND last_name = :last_name) OR email = :email';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_users(){
    $query = 'SELECT *
              from user
              order by last_name';

    global $db;

    try{
        $statement = $db->prepare($query);

        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_user($email){
    $query = 'SELECT *
              from user
              where email = :email';

    global $db;

    try{
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);

        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function check_in($id){
    global $db;

    $query = 'UPDATE user
                SET checked_in = true
                WHERE id = :id';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function check_out($id){
    global $db;

    $query = 'UPDATE user
                SET checked_in = false
                WHERE id = :id';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function create_account($first_name, $last_name, $email, $password_hash){
    global $db;

    $query = 'INSERT INTO user
                VALUES(null, :password_hash, :first_name, :last_name, :email, null, null, true, false, false)';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':password_hash', $password_hash);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->execute();
        $statement->closeCursor();

    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function get_workshop_by_id($workshop_id, $session) {
    if($session == 1){
        $query = 'SELECT name
                from workshop
                where id = :workshop_id';
    }
    else{
        $query = 'SELECT name
                from workshop2
                where id = :workshop_id';
    }

    global $db;

    try{
        $statement = $db->prepare($query);
        $statement->bindValue(':workshop_id', $workshop_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function user_has_signup($first_name, $last_name, $email){
    global $db;

    $query = 'SELECT * from user
              WHERE (first_name = :first_name AND last_name = :last_name) OR email = :email';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function signup($workshop_1, $workshop_2, $dinner, $email) {
    global $db;

    $query = 'UPDATE user
              SET workshop_1_id = :workshop_1,
                workshop_2_id = :workshop_2,
                dinner = :dinner
                WHERE email = :email';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':workshop_1', $workshop_1);
        $statement->bindValue(':workshop_2', $workshop_2);
        $statement->bindValue(':dinner', $dinner);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function add_signup($workshop_id, $session){
    global $db;

    if($session == 1){
        $query = 'UPDATE workshop
                  SET current_signups = (current_signups + 1)
                  WHERE id = :workshop_id';
    }
    else{
        $query = 'UPDATE workshop2
                  SET current_signups = (current_signups + 1)
                  WHERE id = :workshop_id';
    }

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':workshop_id', $workshop_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}

function remove_signup($workshop_id, $session){
    global $db;

    if($session == 1){
        $query = 'UPDATE workshop
                  SET current_signups = (current_signups - 1)
                  WHERE id = :workshop_id';
    }
    else{
        $query = 'UPDATE workshop2
                  SET current_signups = (current_signups - 1)
                  WHERE id = :workshop_id';
    }

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':workshop_id', $workshop_id);
        $statement->execute();
        $statement->closeCursor();
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
    }
}
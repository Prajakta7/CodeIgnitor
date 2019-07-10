<?php

class General_model extends CI_Model{

    public function subscribe_mail($email){
        $msg = "You have successfully subscribed to LEAVEVENTO!";
        if ($var = mail($email, "Feedback from Project 4", $msg)) {
            return true;
        }
        else {
            return false;
        }
    }

    public function insert_user(){
        $sql = "INSERT INTO `users` (first_name, last_name, email, password, address, zip, city, state, user_type) VALUES 
        ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['address']."', '".$_POST['zipcode']."', 
        '".$_POST['city']."', '".$_POST['state']."', '".$_POST['type']."')";

        return $this->db->query($sql);
    }

    public function contact(){
        $sql = "INSERT INTO `contact_us` (first_name, last_name, email, topic, message) VALUES 
        ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['email']."', '".$_POST['topic']."', '".$_POST['message']."')";

        return $this->db->query($sql);
    }

    public function login(){
        $sql = "SELECT * FROM `users` WHERE email = '".$_POST['email']."' AND password='".$_POST['password']."' LIMIT 1";
        $res = $this->db->query($sql);
        if($res->num_rows() > 0)
            return $res->row_array();
        else
            return FALSE;
    }

    public function getProducts(){
        $sql = "SELECT * FROM `products`";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function getProduct(){
        $sql = "SELECT * FROM `products` WHERE `product_id` = " . $_GET['id'];
        $res = $this->db->query($sql);
        return $res->row_array();
    }

    public function insertOrder(){
        $sql = "INSERT INTO `orders` (user_id, product_id, quantity, purchase_date) VALUES ('',
'".$_POST['id']."', '".$_POST['qty']."', '". date('Y-m-d H:i:s') ."')";
        return $this->db->query($sql);
    }

    public function getEvents(){
        $sql = "SELECT events.event_id, event_phone, responsible, place, schedule, ticket_amount, volunteer_id, user_id, v.event_id AS vid
FROM `events` LEFT JOIN (SELECT * FROM volunteer WHERE user_id = ".$_SESSION['user']['user_id'].") AS v ON v.event_id = events.event_id ORDER BY schedule DESC";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function getMyEvents(){
        $sql = "SELECT `volunteer_id`, `event_phone`, `responsible`, `place`, `ticket_amount`, `schedule`  
FROM `volunteer` 
INNER JOIN `events` ON events.event_id = volunteer.event_id WHERE volunteer.user_id = ".$_SESSION['user']['user_id']." ORDER BY schedule DESC";
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function confirmEvent(){
        $sql = "INSERT INTO `volunteer` (event_id, user_id) VALUES (" . $_GET['confirm']. ", ".$_SESSION['user']['user_id'].")";
        return $this->db->query($sql);
    }

    public function deleteVolunteering(){
        $sql = "DELETE FROM `volunteer` WHERE volunteer_id = " . $_GET['del'];
        return $this->db->query($sql);
    }

    public function fetchProfile(){
        $sql = "SELECT * FROM users WHERE user_id = " . $_SESSION['user']['user_id'];
        $res = $this->db->query($sql);
        if($res->num_rows() > 0)
            return $res->row_array();
        else
            return FALSE;
    }

    public function updateProfile(){
        $sql = "UPDATE `users` SET first_name = '".$_POST['firstname']."', last_name = '".$_POST['lastname']."', 
        email = '".$_POST['email']."', password = '".$_POST['password']."', registration_number = '".$_POST['registrationnumber']."', 
        username = '".$_POST['username']."', telephone = '".$_POST['telephone']."' WHERE user_id = '" . $_SESSION['user']['user_id'] . "'";
        return $this->db->query($sql);

    }
	

	
	
	
	
	
	
	

    public function getVolunteers($type = 'individual'){
        $sql = "SELECT * FROM volunteer LEFT JOIN users ON users.user_id = volunteer.user_id INNER JOIN events ON events.event_id = volunteer.event_id
WHERE user_type = '". $type ."' AND events.agent_id = " . $_SESSION['user']['user_id'];
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function getAgentEvents(){
        $sql = "SELECT * FROM events WHERE agent_id = " . $_SESSION['user']['user_id'];
        $res = $this->db->query($sql);
        return $res->result_array();
    }

    public function addEvent($schedule){
        $sql = "INSERT INTO events (event_phone, responsible, place, schedule, ticket_amount, agent_id) VALUES 
          ('" . $_POST['number'] . "', '".$_POST['responsible']."', '".$_POST['address']."', '".$schedule."','". $_POST['price'] ."',
          '". $_SESSION['user']['user_id'] ."')";
        return $this->db->query($sql);
    }

    public function getEvent(){
        $sql = "SELECT * FROM events WHERE event_id = " . $_GET['edit'];
        $res = $this->db->query($sql);
        if($res->num_rows() > 0)
            return $res->row_array();
        else
            return FALSE;
    }

    public function updateEvent($schedule){
        $sql = "UPDATE events SET event_phone = '". $_POST['number'] ."', responsible = '". $_POST['responsible'] ."', 
            place = '". $_POST['address'] . "', schedule = '". $schedule ."', ticket_amount = '". $_POST['price'] ."' 
            WHERE event_id = " . $_POST['event_id'];
        return $this->db->query($sql);
    }

    public function deleteEvent(){
        $sql = "DELETE FROM `events` WHERE event_id = " . $_GET['del'];
        return $this->db->query($sql);
    }


}
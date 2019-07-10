<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index(){

        if(isset($_POST['subscribe'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('home');
            }
            else {
                $this->load->model('general_model');
                if($this->general_model->subscribe_mail($_POST['email']))
                    $message = "Subscribed";
                else
                    $message = "Error subscribing";
                $this->load->view('home', array('message' => $message));
            }
        }
        else{

            $this->load->helper(array('form', 'url'));

            $this->load->view('home');
        }
    }

    public function QuienesSomos(){
        if(isset($_POST['subscribe'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('QuienesSomos');
            }
            else {
                $this->load->model('general_model');
                if($this->general_model->subscribe_mail($_POST['email']))
                    $message = "Subscribed";
                else
                    $message = "Error subscribing";
                $this->load->view('QuienesSomos', array('message' =>  $message));
            }
        }
        else{
            $this->load->helper(array('form', 'url'));
            $this->load->view('QuienesSomos');
        }
    }

    public function Registrate(){
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        if(isset($_POST['register'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
            $this->form_validation->set_rules('zipcode', 'Zip Code', 'required|numeric');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');


            if ($this->form_validation->run() == FALSE) {
                $this->load->view('registrate');
            }
            else {
                $this->load->model('general_model');
                if($this->general_model->insert_user())
                    $message = "Subscribed";
                else
                    $message = "Error subscribing";
                $this->load->view('registrate', array('message' => $message));
            }
        }
        else{

            $this->load->helper(array('form', 'url'));

            $this->load->view('registrate');
        }

    }

    public function Contacto(){
        $message = "";
        if(isset($_POST['contact'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('topic', 'Topic', 'required|alpha_numeric');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('contacto', array('error' => $message));
            }
            else {
                $this->load->model('general_model');
                if($this->general_model->contact())
                    $message = "Submitted";
                else
                    $message = "Error sending message";
                $this->load->view('contacto', array('error' => $message));
            }
        }
        else{
            $this->load->helper(array('form', 'url'));
            $this->load->view('contacto', array('error' => $message));
        }
    }

    public function IniciarSesion(){
        $message = "";
        unset($_SESSION['user']);
        if(isset($_POST['submit'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login', array('error' => $message));
            }
            else {
                $this->load->model('general_model');
                if($user =$this->general_model->login()){
                    $_SESSION['user'] = $user;
                    switch ($user['user_type']){
                        case 'individual':
                            redirect(base_url().'index.php/welcome/HomeIndividual');
                            break;

                        case 'agent':
                            redirect(base_url().'index.php/welcome/HomeAgentLEAN');
                            break;

                        case 'business':
                            redirect(base_url().'index.php/welcome/HomeBusiness');
                            break;

                        default:
                            redirect(base_url().'index.php/welcome/IniciarSesion');
                            break;
                    }
                }
                else
                    $message = "Invalid username or password";
                $this->load->view('login', array('error' => $message));
            }
        }
        else{
            $this->load->helper(array('form', 'url'));
            $this->load->view('login', array('error' => $message));
        }
    }

    public function ComprarBoletos(){
        $this->load->model('general_model');
        $message = "";

        if(isset($_POST['subscribe'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() !== FALSE) {
                if($this->general_model->subscribe_mail($_POST['email']))
                    $message = "Subscribed";
                else
                    $message = "Error subscribing";
            }
        }
        $res = $this->general_model->getProducts();
        $prices = $images = $titles = $productID = array();
        foreach ($res AS $key => $row){
            $productID[] = $row['product_id'];
            $titles[] = $row['product_name'];
            $prices[] = $row['price'];
            $images[] = $row['image_url'];
        }
        $data = array(
            'productID' => $productID,
            'titles' => $titles,
            'prices' => $prices,
            'images' => $images,
            'message' => $message
        );
        $this->load->helper(array('url'));
        $this->load->view('ComprarBoletos', $data);
    }

    public function Perdamos(){
        $this->load->model('general_model');
        $this->load->helper(array('url', 'form'));

        $message = "";

        if(isset($_POST['subscribe'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('Perdamos');
            }
            else {
                if($this->general_model->subscribe_mail($_POST['email']))
                    $message = "Subscribed";
                else
                    $message = "Error subscribing";
            }
        }
        if(empty($_GET['id'])){
            redirect(base_url().'index.php/welcome/ComprarBoletos');
        }
        elseif (isset($_POST['cart'])){
            if($_POST['qty'] > 0 || $_POST['qty'] <= 10){
                if($this->general_model->insertOrder()){
                    $message = "Order Placed.";
                }
                else{
                    $message = "Error placing order";
                }
            }
            else{
                $message = "For bulk orders contact customer support";
            }
        }
        $product = $this->general_model->getProduct();
        $data = array(
            'title' => $product['product_name'],
            'desc' => $product['description'],
            'price' => $product['price'],
            'image' => $product['image_url'],
            'message' => $message
        );
        $this->load->view('Perdamos', $data);
    }

    public function HomeIndividual(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'individual'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";
        if(isset($_GET['confirm'])){
            if($this->general_model->confirmEvent()){
                $message = "Event added to My Events.";
            }
            else{
                echo "Error: " . $this->db->last_query();
            }
        }
        $events = $this->general_model->getEvents();
        $this->load->helper(array('form', 'url'));
        $this->load->view('HomeIndividual', array('events' => $events, 'message' => $message));
    }

    public function MyEventsIndividual(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'individual'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";
        if(isset($_GET['del'])){
            if($this->general_model->deleteVolunteering()){
                $message = "Event deleted from My Events.";
            }
            else{
                echo "Error: " . $this->db->last_query();
            }
        }
        $events = $this->general_model->getMyEvents();
        $this->load->helper(array('form', 'url'));
        $this->load->view('MyEventsIndividual', array('events' => $events, 'message' => $message));
    }

    public function ProfileIndividual(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'individual'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";

        if(isset($_POST['update'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('firstname', 'First Name', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('telephone', 'Telephone', 'numeric|exact_length[10]');
            $this->form_validation->set_rules('username', 'Username', 'alpha_numeric|min_length[5]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if (!$this->form_validation->run() == FALSE) {
                if($user = $this->general_model->updateProfile()){
                    $message = "Profile updated!";
                }
                else
                    $message = "Couldn't update Profile";
            }
        }
        $user = $this->general_model->fetchProfile();
        $this->load->helper(array('form', 'url'));
        $this->load->view('ProfileIndividual', array('error' => $message, 'user' => $user));
    }

    public function HomeBusiness(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'business'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";
        if(isset($_GET['confirm'])){
            if($this->general_model->confirmEvent()){
                $message = "Event added to My Events.";
            }
            else{
                echo "Error: " . $this->db->last_query();
            }
        }
        $events = $this->general_model->getEvents();
        $this->load->helper(array('form', 'url'));
        $this->load->view('HomeBusiness', array('events' => $events, 'message' => $message));
    }

    public function MyEventsBusiness(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'business'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";
        if(isset($_GET['del'])){
            if($this->general_model->deleteVolunteering()){
                $message = "Event deleted from My Events.";
            }
            else{
                echo "Error: " . $this->db->last_query();
            }
        }
        $events = $this->general_model->getMyEvents();
        $this->load->helper(array('form', 'url'));
        $this->load->view('MyEventsBusiness', array('events' => $events, 'message' => $message));
    }

    public function ProfileBusiness(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'business'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";

        if(isset($_POST['update'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('firstname', 'First Name', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('telephone', 'Telephone', 'numeric|exact_length[10]');
            $this->form_validation->set_rules('username', 'Username', 'alpha_numeric|min_length[5]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if (!$this->form_validation->run() == FALSE) {
                if($user = $this->general_model->updateProfile()){
                    $message = "Profile updated!";
                }
                else
                    $message = "Couldn't update Profile";
            }
        }
        $user = $this->general_model->fetchProfile();
        $this->load->helper(array('form', 'url'));
        $this->load->view('ProfileBusiness', array('error' => $message, 'user' => $user));
    }

    public function HomeAgentLEAN(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'agent'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }
        $this->load->helper(array('form', 'url'));
        $this->load->view('HomeAgentLEAN');
    }

    public function ListaDeVoluntarios(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'agent'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $volunteers = $this->general_model->getVolunteers('individual');
        $this->load->helper(array('url'));
        $this->load->view('ListaDeVoluntarios', array('volunteers' => $volunteers));
    }

    public function ListaDeFundaciones(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'agent'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $volunteers = $this->general_model->getVolunteers('business');
        $this->load->helper(array('url'));
        $this->load->view('ListaDeFundaciones', array('volunteers' => $volunteers));
    }

    public function Eventos(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'agent'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";
        if(isset($_GET['del'])){
            if($this->general_model->deleteEvent()){
                $message = "Event deleted.";
            }
            else{
                echo "Error: " . $this->db->last_query();
            }
        }
        $events = $this->general_model->getAgentEvents();
        $this->load->helper(array('form', 'url'));
        $this->load->view('Eventos', array('events' => $events, 'message' => $message));
    }

    public function AddEvent(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'agent'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }
        $this->load->model('general_model');

        $error = "";

        if(isset($_POST['submit'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('number', 'Telephone', 'numeric|exact_length[10]');
            $this->form_validation->set_rules('responsible', 'Responsible', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('address', 'Address', 'required');
            $this->form_validation->set_rules('time', 'Time', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required|numeric');

            if(!$this->validate_address($_POST['address']))
                $error .= "Invalid Address<br>";
            if(!($date = $this->validate_date($_POST['date'])))
                $error .= "Invalid Date<br>";
            if(!$this->validate_time($_POST['time']))
                $error .= "Invalid Time<br>";

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('AddEvent', array('error' => $error));
            }
            else {
                if(empty($error)){
                    $schedule = date('Y-m-d H:i:s',strtotime($date[2] . '-' . $date[0] . '-' . $date[1] . $_POST['time']));
                    if(!empty($_POST['event_id'])){
                        $this->general_model->updateEvent($schedule);
                        $error = "Event Updated";
                    }
                    else{
                        $this->general_model->addEvent($schedule);
                        $error = "Event Added";
                    }
                    redirect(base_url().'index.php/welcome/Eventos');
                }
                $this->load->view('AddEvent', array('error' => $error));
            }
        }
        elseif(isset($_GET['edit'])) {
            $event = $this->general_model->getEvent();
            $data = array(
                'event_id' => $_GET['edit'],
                'number' => $event['event_phone'],
                'responsible' => $event['responsible'],
                'place' => $event['place'],
                'eventDate' => date('m/d/Y', strtotime($event['schedule'])),
                'time' => date('H:i', strtotime($event['schedule'])),
                'price' => $event['ticket_amount'],
                'error' => $error
            );
            $this->load->helper(array('form', 'url'));
            $this->load->view('AddEvent', $data);
        }
        else{
            $data = array(
                'event_id' => '',
                'number' => '',
                'responsible' => '',
                'place' => '',
                'eventDate' => '',
                'time' => '',
                'price' => '',
                'error' => ''
            );
            $this->load->helper(array('form', 'url'));
            $this->load->view('AddEvent', $data);
        }
    }

    public function Agente(){
        if(!isset($_SESSION['user']) || $_SESSION['user']['user_type'] !== 'agent'){
            redirect(base_url().'index.php/welcome/IniciarSesion');
        }

        $this->load->model('general_model');
        $message = "";

        if(isset($_POST['update'])){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            $this->form_validation->set_rules('firstname', 'First Name', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required|callback_alpha_dash_space');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('telephone', 'Telephone', 'numeric|exact_length[10]');
            $this->form_validation->set_rules('username', 'Username', 'alpha_numeric|min_length[5]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

            if (!$this->form_validation->run() == FALSE) {
                if($user = $this->general_model->updateProfile()){
                    $message = "Profile updated!";
                }
                else
                    $message = "Couldn't update Profile";
            }
        }
        $user = $this->general_model->fetchProfile();
        $this->load->helper(array('form', 'url'));
        $this->load->view('Agente', array('error' => $message, 'user' => $user));
    }

    function validate_date($string){
        $date = explode('/', $string);
        if(checkdate($date[0], $date[1], $date[2]))
            return $date;
        return FALSE;
    }

    function validate_address($string){
        return preg_match("/^[0-9a-zA-Z, -]*$/", $string);
    }

    function validate_time($string){
        return preg_match("/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/", $string);
    }

    function alpha_dash_space($fullname){
        if (! preg_match('/^[a-zA-Z\s]+$/', $fullname)) {
            $this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & White spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}

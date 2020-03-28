<?php
class links extends CI_Model{
	function _construct(){
		parent:: _construct();
		$this->load->library('session');
		
	}
function signin(){
	$this->load->library('session');
	$this->load->database("default",FALSE);
	$username=$this->input->post("username");
	$password=$this->input->post("password");
	$sql=$this->db->query("select * from bio where name='$username' and password='$password'");
	if ($sql) {
		$this->session->set_userdata('username',$username);
	return true;
	}
	else{
		return false;
	}

}
function weka($d){

$this->load->database("default",FALSE);
$title=$this->input->post("title");
$des=$this->input->post("des");
$images=$d;
$sql=$this->db->query("insert into items (title,des,images) values('$title','$des','$images')");
if ($sql) {
	return true;
}
else{
	return false;
}

}
function getall(){
	$this->load->database("default",FALSE);
	$sql=$this->db->query("select * from items");
	return $sql->result_array();
}
function createacc(){
	$this->load->database("default",FALSE);
$name=$this->input->post("name");
$email=$this->input->post("email");
$mobile=$this->input->post('mobile');
$password=md5($this->input->post('password'));
$sql=$this->db->query("select * from bio where email='$email'");
if ($sql->num_rows()>0) {
	return false;
}
else{
$sql=$this->db->query("insert into bio values('$name','$email','$mobile','$password')");
if ($sql) {
	return true;
}else{
return false;
}
}

}
function check($user){
	$this->load->database("default",FALSE);
	$sql=$this->db->query("select * from bio where email='$user'");
	if ($sql) {
		
	}
}
}
?>
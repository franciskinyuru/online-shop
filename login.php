<?php
class login extends CI_Controller

{
	function _construct(){
		parent:: _construct();
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->library('upload');
		$this->load->library('session');


	}
	function signup(){
		/*$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('mobile','Mobile','required|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[15]');
		$this->form_validation->set_rules('cpassword','Cpassword','required|min_length[8]|max_length[15]');
		if ($this->form_validation->run()==false) {
			$error=array('error'=>$this->load->display_errors());

		}*/
		$this->load->model('queries/links');
			$que=$this->links->createacc();
			if ($que) {
				?>
				<script type="text/javascript">
					alert("customer registered successfully");
				</script>

				<?php
				header("location:index");
			}
			else{
				 ?>
				<script type="text/javascript">
					alert("account already exist");
				</script>

				<?php
				header("location:index");
			}

	}
	function sign(){
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required',array('required'=> 'you must provide a %s.'));
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('project/signin');

		}else{
			$this->load->model('queries/links');
			$que=$this->links->signin();
			if ($que) {
				header("location:index");
			}
			else{
				$this->load->view('project/signin');
			}
			
		}
	}
	function index(){
		$this->load->library('session');
		$this->load->model('queries/links');
		$que['data']=$this->links->getall();
		$this->load->view('project/home',$que);

	}

	function uploads(){
$config['upload_path']='assets/images';
$config['allowed_types']='gif|jpg|png|jpeg|pdf|doc|txt';
$config['max_size']=3000;
$config['min_size']=10;
$config['max_height']=1500;
$this->load->library('upload',$config);
$up=$this->upload->do_upload('file');
if (!$up) {
	$error="wrong image format";
	$error=array('error'=>$this->upload->display_errors());
	//$this->load->view('image',$error);
	print_r($error);
}
else{
	$data=$this->upload->data();
if ($data) {
$ima=$data['file_name'];
	$this->load->model('queries/links');

			$que=$this->links->weka($ima);
			if ($que) {
				?>
				<script type="text/javascript">
					alert("item added successfully");
				</script>

				<?php
				header("location:index");
			}
			else{
				?>
				<script type="text/javascript">
					alert("failed to add item");
				</script>

				<?php
				header("location:index");
			}

	}else{
		echo "failed  try to upload again";
header("location:index");
	}
}
}
}
?>
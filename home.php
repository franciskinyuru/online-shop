<?php 
$que=$data;

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="<?php $this->load->helper('url');echo base_url();?>assets/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php $this->load->helper('url');echo base_url();?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php $this->load->helper('url');echo base_url();?>assets/js/bootstrap.bundle.js"></script>
</head>
<h4><p><?php echo $this->session->userdata('username'); ?> welcome to kQ Mall</p></h4>
<body>
	<div class="btn-group">
		<button class="btn " >Home</button>
		<div class="dropdown">
			<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownmenu1" data-toggle="dropdown"> Services<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role='menu' aria-labelledby="dropdownmenu1">
			<li><a href="#" role="menuitem">products</a> </li>
			<li><a href="#" role="menuitem">marketing</a> </li>
			<li><a href="#after sale" role="menuitem">after sale service</a> </li>
			<li><a href="#" role="menuitem">Delivery</a> </li>
			<li><a href="#payment" role="menuitem">payment methods</a> </li>	
		</ul>
		</div>
		<button class="btn btn-primary" data-toggle="modal" data-target="#register">register</button>
			<button class="btn btn-danger" type="submit" onclick="return confirm('are you sure you want to logout')">logout</button>
	</div><hr>
	<div class="body" style="width: 100%; height: 100vh; overflow: scroll; background-color: #efefef;">
		
<div class="modal fade" id="fors">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-head" >
				<button data-dismiss="modal" class="close"><span>&times</span></button>
				
			</div>
			<div class="modal-body">
				<form role="form" enctype="multipart/form-data" accept-charset="utf-8" action="uploads" method="post" style="width: 100%;">
		
<div class="form-group has-success">
	<label for="name" >Item Name</label>
	<input type="text" name="title" id="name" placeholder="item name" class="form-control">
</div class="form-group">
<div ><label >Item Description</label>
<textarea name="des" placeholder="item Description" class="form-control"></textarea>
</div>
<div class="form-group">
	<label >image</label>
	<input  class="form-control" type="file" name="file" >
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit">upload data</button>
</div>
</form>
			</div>
		</div>
		
	</div>
</div>
</script>
<style type="text/css">
.btn{
	margin-left: 2vh;
	margin-right: 2vh;
	float: right;
}
</style>
	
		<div class="container" style="width: 100%; padding-left: 0px; padding-right:0px;" >
			
		<div class="row" style="width: 100%;">
					<div class="col-sm-12 col-lg-2 col-md-2" style="max-height: 70vh;" >
	<h5><p>Item categories</p></h5>
	<ol>
		<li><a href="#" data-toggle="modal" data-target='items'>Cereals</a></li>
		<li>fruits</li>
		<li>Vegetables</li>
		<li>Dairy products</li>
		<li>spices</li>
		<li>crips</li>
	</ol>
</div>
<div class="col-sm-12 col-lg-10 col-md-10" style=" border: 1px solid black; max-height: 80vh;overflow: scroll; ">
	<div class="container" id="items">
		<div class="row">
			<?php foreach ($data as $key => $value): ?>
				
					<div class="col-sm-12 col-lg-4 col-md-4" style="height: 25vh; margin-top:1vh; margin-bottom: 1vh;">
						<img class="col-sm-12 col-lg-12 col-md-12" style="height: 25vh; margin-top:1vh; margin-bottom: 1vh;" src="<?php $this->load->helper('url');echo base_url();?>assets/images/<?php echo $value['images'];?>" >
					</div>
			<div class="col-sm-12 col-lg-8 col-md-8">
				<p><strong><?php echo $value['title']; ?></strong></p>	
				<p class="lead"><?php echo $value['des']; ?></p>		
<button class="btn" style="bottom: 0; float: right;">purchase</button>
			</div>
			<?php endforeach ?>
		</div>
	</div>
			</div>
		</div>
		
	</div>
<div class="" style="width: 100%; background:  yellow;"><button data-toggle="modal" data-target="#fors" class="btn btn-success" style="float: right; margin-right: 20%; margin-top: 1vh;">add</button></div>
<div class="modal fade" id="register" style="width: 40%;margin-left: auto;margin-right: auto;">
	<div class="modal-dialog"></div>
	<div class="modal-content">
		<div class="modal-head">
			<div data-dismiss='modal' class="close"><span>&times</span></div>
			<h5 style="text-align: center; margin-top: 1vh;">create an account here</h5>
			
		</div>
		<div class="modal-body">
			<form role='form' action="signup" method="post">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" required="" >
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" required="" >
				</div>
				<div class="form-group">
					<label>Mobile</label>
					<input type="number" name="mobile" class="form-control" required=""  >
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="" maxlength="15" minlength="8">
				</div>
				<div class="form-group">
					<label>confirm password</label>
					<input type="password" name="cpassword" class="form-control" required="" minlength="8"  maxlength="15">
				</div>
				<p><?php @$error ?></p>
				<button type="submit" class="btn btn-primary active">create account</button>
				<button type="button" class="btn btn-link active">having an account? login</button>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('project/after');  ?>
<?php $this->load->view('project/payment');  ?>
	</div>
</body>
</html>
<script type="text/javascript">
	//$("#fors").modal('toggle');


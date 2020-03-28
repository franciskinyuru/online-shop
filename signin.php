<!DOCTYPE html>
<html>
<head>
	<title>login codeigniter</title>
	<link rel="stylesheet" type="text/css" href="asset_url()css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php $this->load->helper('url');echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>
<div>
	<?php echo validation_errors(); ?>
<?php echo form_open('login/sign');?>
<label>Username:</label>
<input type="text" name="username">
<label>Password:</label>
<input type="password" name="password">
<input type="submit" name="submit" value="submit">
<p>No having an account? <strong>click here to register</strong></p>
</form>
</div>
</body>
</html>
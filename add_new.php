<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM members where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<div class="container-fluid">
	<form action="function.php" method="POST" id="manage-member">
    <div id="msg"></div>
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
		<div class="row form-group">
			<div class="col-md-4">
						<label class="control-label">ID No.</label>
						<input type="text" name="member_id" class="form-control" value="<?php echo isset($member_id) ? $member_id:'' ?>" >
						<small><i>Leave this blank if you want to a auto generate ID no.</i></small>
					</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4">
				<label class="control-label">First Name</label>
				<input type="text" name="firstname" class="form-control" required>
			</div>
			<div class="col-md-4">
				<label class="control-label">Middle Name</label>
				<input type="text" name="middlename" class="form-control">
			</div>
            <div class="col-md-4">
				<label class="control-label">Last Name</label>
				<input type="text" name="lastname" class="form-control" required>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4">
				<label class="control-label">Email</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="col-md-4">
				<label class="control-label">Contact</label>
				<input type="text" name="contact" class="form-control" required>
			</div>
			<div class="col-md-4">
				<label class="control-label">Gender</label>
				<select name="gender" class="custom-select" id="">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label">Address</label>
				<textarea name="address" class="form-control"></textarea>
			</div>
		</div>
	</form>
</div>
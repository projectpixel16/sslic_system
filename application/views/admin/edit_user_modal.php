<script src="../assets/js/contactformat.js"></script>
<script>
    $(document).ready(function() {
		var phones = [{ "mask": "(##) ###-###-####"}];
		$('#contact_no_edit').inputmask({ 
			mask: phones, 
			greedy: false, 
			definitions: { '#': { validator: "[0-9]", cardinality: 1}} 
		});
	});
</script>
<?php foreach($users AS $u){ ?>
	<div class="form-group">
		<input class="form-control" id = "userid" type = "hidden" value = "<?php echo $id;?>"/>
	</div>	
	<div class="form-group">
        <label for="username" class="control-label mb-1">ID Number:</label>
        <input id="username_edit" name="username" type="text" class="form-control bor-radius5" value = "<?php echo $u->username;?>">
    </div>
    <div class="form-group">
        <label for="fullname" class="control-label mb-1">Fullname:</label>
        <input id="fullname_edit" name="fullname" type="text" class="form-control bor-radius5" value = "<?php echo $u->fullname;?>">
    </div>
    <div class="form-group">
        <label for="address" class="control-label mb-1">Address:</label>
        <textarea id="address_edit" name="address" type="text" class="form-control bor-radius5"><?php echo $u->address;?></textarea>
    </div>
    <div class="form-group">
        <label for="contact_no" class="control-label mb-1">Contact Number:</label>
        <input id="contact_no_edit" name="contact_no" type="text" class="form-control bor-radius5" value = "<?php echo $u->contact_no;?>">
    </dev>
    <div class="form-group">
        <label for="email" class="control-label mb-1">Email:</label>
        <input id="email_edit" name="email" type="email" class="form-control bor-radius5" value = "<?php echo $u->email;?>">
    </div>
    <div class="form-group">
        <label for="usertype" class="control-label mb-1">Usertype:</label>
        <select id="usertype_edit" name="usertype" class="form-control bor-radius5 cc-cvc">
            <option value = "">--Select Usertype--</option>
            <option value="1" <?php echo ($u->usertype==1) ? 'selected' : ''; ?>>Admin</option>
            <option value="0" <?php echo ($u->usertype==0) ? 'selected' : ''; ?>>User</option>
        </select>
    </div>
<?php } ?>
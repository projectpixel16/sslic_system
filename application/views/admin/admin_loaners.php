<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/js/contactformat.js"></script>
<script>
	function saveUser(){
		var username = document.getElementById("username").value; 
		var fullname = document.getElementById("fullname").value; 
		var address = document.getElementById("address").value; 
		var contact_no = document.getElementById("contact_no").value; 
		var email = document.getElementById("email").value; 
		var usertype = document.getElementById("usertype").value; 
		var loc= document.getElementById("baseurl").value;
		var redirect = loc+"admin/save_user";
		if(username!='' && fullname!='' && address!='' && contact_no!='' && usertype!=''){
			$.ajax({
				data: "username="+username+'&fullname='+fullname+'&address='+address+'&contact_no='+contact_no+'&email='+email+'&usertype='+usertype,
				type: "POST",
				url: redirect,
				success: function(output){
					window.location=loc+'admin/admin_loaners';
				}
			});
		}else{
			if(username==''){
				var user=document.getElementById("username");
				user.style.backgroundColor  = '#ffedd5'
				$('#username').attr('placeholder','ID Number field is required!');
			}else{
				var user=document.getElementById("username");
				user.style.backgroundColor  = 'white'
				$('#username').attr('placeholder','ID Number');
			}
			if(fullname==''){
				var name=document.getElementById("fullname");
				name.style.backgroundColor  = '#ffedd5'
				$('#fullname').attr('placeholder','Fullname field is required!');
			}else{
				var name=document.getElementById("fullname");
				name.style.backgroundColor  = 'white'
				$('#fullname').attr('placeholder','Fullname');
			}
			if(address==''){
				var error_address=document.getElementById("address");
				error_address.style.backgroundColor  = '#ffedd5'
				$('#address').attr('placeholder','Address field is required!');
			}else{
				var error_address=document.getElementById("address");
				error_address.style.backgroundColor  = 'white'
				$('#address').attr('placeholder','Address');
			}
			if(contact_no==''){
				var error_contactno=document.getElementById("contact_no");
				error_contactno.style.backgroundColor  = '#ffedd5'
				$('#contact_no').attr('placeholder','Contact Number field is required!');
			}else{
				var error_contactno=document.getElementById("contact_no");
				error_contactno.style.backgroundColor  = 'white'
				$('#contact_no').attr('placeholder','Contact Number');
			}
			if(usertype==''){
				var error_usertype=document.getElementById("usertype");
				error_usertype.style.backgroundColor  = '#ffedd5'
				$('#usertype').attr('placeholder','Usertype field is required!');
			}else{
				var error_usertype=document.getElementById("usertype");
				error_usertype.style.backgroundColor  = 'white'
				$('#usertype').attr('placeholder','Usertype');
			}
		}
	}
	$(document).on('click', '#getEdit', function(e){
        e.preventDefault();
        var uid = $(this).data('id');    
        var loc= document.getElementById("baseurl").value;
        var redirect1=loc+'admin/edit_user_modal';
        $.ajax({
			url: redirect1,
			type: 'POST',
			data: 'id='+uid,
            beforeSend:function(){
                $("#users_details").html('Please wait ..');
            },
            success:function(data){
               $("#users_details").html(data);
            },
        })
    });
	function editUser(){
		var userid = document.getElementById("userid").value; 
		var username = document.getElementById("username_edit").value; 
		var fullname = document.getElementById("fullname_edit").value; 
		var address = document.getElementById("address_edit").value; 
		var contact_no = document.getElementById("contact_no_edit").value; 
		var email = document.getElementById("email_edit").value; 
		var usertype = document.getElementById("usertype_edit").value; 
		var loc= document.getElementById("baseurl").value;
		var redirect = loc+"admin/update_user";
		if(username!='' && fullname!='' && address!='' && contact_no!='' && usertype!=''){
			$.ajax({
				data: "username="+username+'&fullname='+fullname+'&address='+address+'&contact_no='+contact_no+'&email='+email+'&usertype='+usertype+'&userid='+userid,
				type: "POST",
				url: redirect,
				success: function(output){
					window.location=loc+'admin/admin_loaners';
				}
			});
		}else{
			if(username==''){
				var user=document.getElementById("username_edit");
				user.style.backgroundColor  = '#ffedd5'
				$('#username_edit').attr('placeholder','ID Number field is required!');
			}else{
				var user=document.getElementById("username_edit");
				user.style.backgroundColor  = 'white'
				$('#username_edit').attr('placeholder','ID Number');
			}
			if(fullname==''){
				var name=document.getElementById("fullname_edit");
				name.style.backgroundColor  = '#ffedd5'
				$('#fullname_edit').attr('placeholder','Fullname field is required!');
			}else{
				var name=document.getElementById("fullname_edit");
				name.style.backgroundColor  = 'white'
				$('#fullname_edit').attr('placeholder','Fullname');
			}
			if(address==''){
				var error_address=document.getElementById("address_edit");
				error_address_edit.style.backgroundColor  = '#ffedd5'
				$('#address_edit').attr('placeholder','Address field is required!');
			}else{
				var error_address=document.getElementById("address_edit");
				error_address.style.backgroundColor  = 'white'
				$('#address_edit').attr('placeholder','Address');
			}
			if(contact_no==''){
				var error_contactno=document.getElementById("contact_no_edit");
				error_contactno.style.backgroundColor  = '#ffedd5'
				$('#contact_no_edit').attr('placeholder','Contact Number field is required!');
			}else{
				var error_contactno=document.getElementById("contact_no_edit");
				error_contactno.style.backgroundColor  = 'white'
				$('#contact_no_edit').attr('placeholder','Contact Number');
			}
			if(usertype==''){
				var error_usertype=document.getElementById("usertype_edit");
				error_usertype.style.backgroundColor  = '#ffedd5'
				$('#usertype_edit').attr('placeholder','Usertype field is required!');
			}else{
				var error_usertype=document.getElementById("usertype_edit");
				error_usertype.style.backgroundColor  = 'white'
				$('#usertype_edit').attr('placeholder','Usertype');
			}
		}
	}
	window.onload = function(e){ 
		var phones = [{ "mask": "(##) ###-###-####"}];
		$('#contact_no').inputmask({ 
			mask: phones, 
			greedy: false, 
			definitions: { '#': { validator: "[0-9]", cardinality: 1}} 
		});
	};
</script>
<main id="main">
    <section class="contact">
	    <div class="container">
	        <div class="row">
		         <div class="col-lg-8 offset-lg-2">
		         	<div class="shadow-md p-3 bg-white rounded-b-md border-t-4 border-yellow-400">
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
							Add User
						</button>
			            <table class="border w-full" id="myTable">
			            	<thead>
			            		<tr>
			            			<th class="border p-2 text-sm text-center" width="10%">ID Number</th>
			            			<th class="border p-2 text-sm text-center" width="10%">Fullname</th>
			            			<th class="border p-2 text-sm text-center" width="10%">Address</th>
			            			<th class="border p-2 text-sm text-center" width="10%">Contact No.</th>
			            			<th class="border p-2 text-sm text-center" width="10%">Email</th>
			            			<th class="border p-2 text-sm text-center" width="10%">Usertype</th>
			            			<th class="border p-2 text-sm text-center" width="10%">Actions</th>
			            		</tr>
			            	</thead>
			            	<tbody>
								<?php foreach($loaners AS $lo){ ?>
			            		<tr>
			            			<td class="border p-2 text-sm text-center"><?php echo $lo->username; ?></td>
			            			<td class="border p-2 text-sm"><?php echo $lo->fullname; ?></td>
			            			<td class="border p-2 text-sm"><?php echo $lo->address; ?></td>
			            			<td class="border p-2 text-sm text-center"><?php echo $lo->contact_no; ?></td>
			            			<td class="border p-2 text-sm"><?php echo $lo->email; ?></td>
			            			<td class="border p-2 text-sm text-center"><?php echo ($lo->usertype==1) ? 'Admin' : 'User'; ?></td>
			            			<td class="border p-2 text-sm" >
										<button type="button" class="p-1 px-2 bg-blue-500 text-white text-xs font-bold rounded" data-id="<?php echo $lo->user_id; ?>" data-toggle="modal" id='getEdit' data-target="#editModal">
											Edit
										</button>
			            			</td>
			            		</tr>
								<?php } ?>
			            	</tbody>
			            </table>
			        </div>
		        </div>
	        </div>
	    </div>
    </section><!-- End Contact Section -->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST">
						<div class="form-group">
							<label for="username" class="col-form-label">ID Number:</label>
							<input type="text" class="form-control" id="username" required>
							<div class="alert alert-danger alert-shake" id="error_idnumber" style='display:none'>
								<center id="error_idnumber_msg"><center>
							</div>
						</div>
						<div class="form-group">
							<label for="fullname" class="col-form-label">Fullname:</label>
							<input type="text" class="form-control" id="fullname" required>
							<div class="alert alert-danger alert-shake" id="error_fullname" style='display:none'>
								<center id="error_fullname_msg"><center>
							</div>
						</div>
						<div class="form-group">
							<label for="address" class="col-form-label">Address:</label>
							<textarea class="form-control" id="address" required></textarea>
							<div class="alert alert-danger alert-shake" id="error_address" style='display:none'>
								<center id="error_address_msg"><center>
							</div>
						</div>
						<div class="form-group">
							<label for="contact_no" class="col-form-label">Contact Number:</label>
							<input type="text" class="form-control" id="contact_no" required>
							<div class="alert alert-danger alert-shake" id="error_contact" style='display:none'>
								<center id="error_contact_msg"><center>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-form-label">Email Address:</label>
							<input type="email" class="form-control" id="email" placeholder="(Optional)">
						</div>
						<div class="form-group">
							<label for="usertype" class="col-form-label">Usertype:</label>
							<select class="form-control" id="usertype" required>
								<option value="">--Seelct Usertype--</option>
								<option value="1">Admin</option>
								<option value="0">User</option>
							</select>
							<div class="alert alert-danger alert-shake" id="error_usertype" style='display:none'>
								<center id="error_usertype_msg"><center>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" onclick="saveUser()">Save</button>
							<input name="baseurl" id="baseurl" value="<?php echo base_url(); ?>" class="form-control" type="hidden" >
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Edit -->
	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" >
					<form method="POST">
						<div id = 'users_details'></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" onclick="editUser()">Update</button>
							<input name="baseurl" id="baseurl" value="<?php echo base_url(); ?>" class="form-control" type="hidden" >
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>

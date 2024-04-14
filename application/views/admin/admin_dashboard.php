<script>
	function approveApp(personal_id) {
		var loc= document.getElementById("baseurl").value;
		var redirect = loc+"admin/approve_application";
		var conf = confirm('Are you sure you want to approve this application?');
		if(conf){
			$.ajax({
				type: "POST",
				url: redirect,
				data: 'personal_id='+personal_id,
				success: function (output) {
					window.location.reload();
				}
			});
		}  
	}

	function declineApp(personal_id) {
		var loc= document.getElementById("baseurl").value;
		var redirect = loc+"admin/decline_application";
		var conf = confirm('Are you sure you want to decline this application?');
		if(conf){
			$.ajax({
				type: "POST",
				url: redirect,
				data: 'personal_id='+personal_id,
				success: function (output) {
					window.location.reload();
				}
			});
		}  
	}
</script>

<main id="main">
    <section class="contact">
	    <div class="container">
	        <div class="row">
		         <div class="col-lg-8 offset-lg-2">
		         	<div class="flex between-start space-x-1">
		         		<a href="../admin/admin_dashboard" class="text-white text-md rounded-t px-5 py-1 bg-yellow-400 hover:bg-yellow-500 font-bold">Pending</a>
		         		<a href="../admin/admin_approved" class="text-white text-md rounded-t px-5 py-1 bg-green-200 hover:bg-green-500">Approved</a>
		         		<a href="../admin/admin_declined" class="text-white text-md rounded-t px-5 py-1 bg-red-200 hover:bg-red-500">Declined</a>
		         	</div>
		         	<div class="shadow-md p-3 bg-white rounded-b-md border-t-4 border-yellow-400">
			            <table class="border w-full" id="myTable">
			            	<thead>
			            		<tr>
			            			<th class="border p-2 text-sm">Applicant's Name</th>
			            			<th class="border p-2 text-sm" width="10%">Application</th>
			            			<th class="border p-2 text-sm" width="10%">Actions</th>
			            		</tr>
			            	</thead>
			            	<tbody>
								<?php foreach($pending AS $p){ ?>
			            		<tr>
			            			<td class="border p-2 text-sm"><?php echo $p->fullname ?></td>
			            			<td class="border p-2 text-sm">
			            				<div class="flex justify-center">
			            					<a href="">View</a>
			            				</div>
			            			</td>
			            			<td class="border p-2 text-sm" >
			            				<div class="flex justify-center space-x-1">
			            					<button class="p-1 px-2 bg-green-500 text-white text-xs font-bold rounded" onclick='approveApp(<?php echo $p->personal_id ?>)'>Approve</button>
			            					<button class="p-1 px-2 bg-red-500 text-white text-xs font-bold rounded" onclick='declineApp(<?php echo $p->personal_id ?>)'>Decline</button>
											<input name="baseurl" id="baseurl" value="<?php echo base_url(); ?>" class="form-control" type="hidden" >
			            				</div>
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


</main>

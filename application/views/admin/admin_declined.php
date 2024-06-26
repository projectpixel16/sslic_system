<main id="main">
   <!--  <section class="breadcrumbs">
      	<div class="container">
	        <div class="d-flex justify-content-between align-items-center">
		        <h2>Contact</h2>
		        <ol>
		            <li><a href="index.html">Home</a></li>
		            <li>Contact</li>
		        </ol>
	        </div>
      	</div>
    </section> -->
    <section class="contact" >
	    <div class="container">
	        <div class="row">
		         <div class="col-lg-8 offset-lg-2">
		         	<div class="flex between-start space-x-1">
		         		<a href="../admin/admin_dashboard" class="text-white text-md rounded-t px-5 py-1 bg-yellow-100 hover:bg-yellow-500">Pending</a>
		         		<a href="../admin/admin_approved" class="text-white text-md rounded-t px-5 py-1 bg-green-200 hover:bg-green-500">Approved</a>
		         		<a href="../admin/admin_declined" class="text-white text-md rounded-t px-5 py-1 bg-red-400 hover:bg-red-500 font-bold">Declined</a>
		         	</div>
		         	<div class="shadow-md p-3 bg-white rounded-b-md border-t-4 border-red-400">
			            <table class="border w-full" id="myTable">
			            	<thead>
			            		<tr>
			            			<th class="border p-2 text-sm">Applicant's Name</th>
			            			<th class="border p-2 text-sm" width="30%">Actions</th>
			            		</tr>
			            	</thead>
			            	<tbody>
								<?php foreach($declined AS $d){ ?>
			            		<tr>
			            			<td class="border p-2 text-sm"><?php echo $d->fullname; ?></td>
			            			<td class="border p-2 text-sm" >
			            				<div class="flex justify-center space-x-1">
			            					<button class="p-1 px-2 bg-blue-500 text-white text-xs font-bold rounded">Send SMS</button>
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

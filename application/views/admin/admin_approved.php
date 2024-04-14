<script>
	function sendSMS(personal_id,contact_no){
		const myHeaders = new Headers();
		myHeaders.append("Authorization", "App 2fae3f1ba142c2e60d2f4ede029a6bc7-e3b729f7-a404-4534-ab04-13a96d91ceff");
		myHeaders.append("Content-Type", "application/json");
		myHeaders.append("Accept", "application/json");
		const raw = JSON.stringify({
			"messages": [
				{
					// "destinations": [{"to":"639515663308"}],
					"destinations": [{"to":"639772167282"}],
					"from": "ServiceSMS",
					"text": "Hi Miss, Miss na miss ta naka bala, San-o ta ayhan ka kitaay liwat :)"
				}
			]
		});
		const requestOptions = {
			method: "POST",
			headers: myHeaders,
			body: raw,
			redirect: "follow"
		};
		fetch("https://3gq25m.api.infobip.com/sms/2/text/advanced", requestOptions)
		.then((response) => response.text())
		.then((result) => console.log(result))
		.catch((error) => console.error(error));
		sendData(personal_id);
	}
	function sendData(personal_id){
		var loc= document.getElementById("baseurl").value;
        var redirect=loc+'admin/send_data';
        $.ajax({
			url: redirect,
			type: 'POST',
			data: 'personal_id='+personal_id,
            success:function(data){
            },
        })
	}

	function sendSMS1(){
		var loc= document.getElementById("baseurl").value;
        var redirect=loc+'admin/send_data1';
        $.ajax({
			url: redirect,
			type: 'POST',
            success:function(output){
				console.log(output);
            },
        })
	}
</script>
<main id="main">
    <section class="contact" >
	    <div class="container">
	        <div class="row">
		         <div class="col-lg-8 offset-lg-2">
		         	<div class="flex between-start space-x-1">
		         		<a href="../admin/admin_dashboard" class="text-white text-md rounded-t px-5 py-1 bg-yellow-100 hover:bg-yellow-500">Pending</a>
		         		<a href="../admin/admin_approved" class="text-white text-md rounded-t px-5 py-1 bg-green-400 hover:bg-green-500 font-bold">Approved</a>
		         		<a href="../admin/admin_declined" class="text-white text-md rounded-t px-5 py-1 bg-red-200 hover:bg-red-500">Declined</a>
		         	</div>
		         	<div class="shadow-md p-3 bg-white rounded-b-md border-t-4 border-green-400">
			            <table class="border w-full" id="myTable">
			            	<thead>
			            		<tr>
			            			<th class="border p-2 text-sm">Applicant's Name</th>
			            			<th class="border p-2 text-sm" width="30%">Actions</th>
			            		</tr>
			            	</thead>
			            	<tbody>
								<?php foreach($approved AS $a){ ?>
			            		<tr>
			            			<td class="border p-2 text-sm"><?php echo $a->fullname; ?></td>
			            			<td class="border p-2 text-sm" >
			            				<div class="flex justify-center space-x-1">
			            					<button class="p-1 px-2 bg-blue-500 text-white text-xs font-bold rounded" onclick="sendSMS1('<?php echo $a->personal_id; ?>','<?php echo $_SESSION['contact_no']; ?>')">Send SMS</button>
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

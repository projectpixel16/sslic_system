<?php
    if (isset($_SESSION['user_id'])) {
        echo "<script>window.location ='".base_url()."main/app_form'; </script>";
    } 
?>
<script>
	function login(){
		var username = document.getElementById("username").value; 
		var password = document.getElementById("password").value; 
		var loc= document.getElementById("baseurl").value;
		var redirect = loc+"main/login_process";
		$.ajax({
			data: "username="+username+'&password='+password,
			type: "POST",
			url: redirect,
			success: function(output){
				if(output=='success'){
					window.location=loc+'main/app_form';
				}else{
					var error=document.getElementById("error");
					error.style.display = "block";
					document.getElementById("error_msg").innerHTML='Username And Password Do not Exist!';
				}
			}
		});
	}
</script>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
	    <div class="container">
	        <div class="row">
		         <div class="col-lg-4 offset-lg-4">
					<div class="alert alert-danger alert-shake" id="error" style='display:none'>
						<center id="error_msg"><center>
					</div>
		         	<div class="bg-white shadow-md rounded-md">
						<form  method = "POST" class="php-email-form py-20 mt-5 !shadow-none">
							<div class="my-2">
								<h3 class="text-center font-bold my-3 uppercase">Login</h3>
								<div class="form-row">
									<div class="col-md-12 form-group">
										<input type="text" name="username" class="form-control" id="username" placeholder="ID Number"/>
									</div>
									<div class="col-md-12 form-group">
										<input type="password" id="password" class="form-control" name="password" placeholder="Password" />
									</div>
								</div>
								<div class="text-center"><button onclick='login()' class="w-full btn_login">Login</button></div>
								<!-- <a href="../admin/admin_dashboard">login</a> -->
								<input name="baseurl" id="baseurl" value="<?php echo base_url(); ?>" class="form-control" type="hidden" >
							</div>
						</form>
		            </div>
		        </div>
	        </div>
	    </div>
    </section><!-- End Contact Section -->
  </main>
  
 
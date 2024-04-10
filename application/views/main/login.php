<?php
	// echo form_open('main/login_process');
    if (isset($_SESSION['user_id'])) {
        echo "<script>window.location ='".base_url()."main/app_form'; </script>";
    } 
	echo form_open('main/login_process');
?>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
	    <div class="container">
	        <div class="row">
		         <div class="col-lg-4 offset-lg-4">
					<?php
						$error_msg= $this->session->flashdata('error_msg'); 
						if($error_msg){
					?>
						<div class="alert alert-danger alert-shake">
							<center><?php echo $error_msg; ?></center>                    
						</div>
					<?php } ?>
		         	<div class="bg-white shadow-md rounded-md">
						<form  method = "POST" action="<?php echo base_url(); ?>main/login_process" class="php-email-form py-20 mt-5 !shadow-none" accept-charset="utf-8">
							<div class="my-2">
								<h3 class="text-center font-bold my-3 uppercase">Login</h3>
								<div class="form-row">
									<div class="col-md-12 form-group">
										<input type="text" name="username" class="form-control" id="username" placeholder="Number ID"/>
									</div>
									<div class="col-md-12 form-group">
										<input type="password" class="form-control" name="password" placeholder="Password" />
									</div>
								</div>
								<div class="text-center"><button type="submit" class="w-full">Login</button></div>
								<!-- <a href="../admin/admin_dashboard">login</a> -->
							</div>
						</form>
		            </div>
		        </div>
	        </div>
	    </div>
    </section><!-- End Contact Section -->


  </main>
 
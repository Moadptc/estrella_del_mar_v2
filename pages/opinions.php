<?php

$pageTitle = 'opinions';

?>
<div class="contact-section my-5">

	<div class="row">
		<div class="container">
			<h1 class="display-4 main-color font-weight-bold mb-5">Feedback</h1>
			<div class="row my-5">

				<div class="col-lg-12">
					<form method="post">
						<div class="row">
							<div class="col-lg-4">
								<label for="name">Name</label>
								<input type="text" id="name" name="name" placeholder="Name"
								       class="form-control input-text">
							</div>
							<div class="col-lg-4">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" placeholder="Email"
								       class="form-control input-text">
							</div>

							<div class="col-lg-12 my-4">
								<label for="message">Feedback</label>
								<textarea name="Your Feedback" id="feedback" class="form-control input-textarea"
								          placeholder="Post Your Feed Back" cols="30" rows="10"></textarea>
							</div>
							<div class="col-lg-4 my-2">
								<button type="submit" name="post-feedback"
								        class="form-control btn-conatct">
									<i class=""></i> Post Feedback
								</button>
							</div>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>



	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="main-color font-weight-bold my-5">Feedback Users</h2>
			</div><!-- /col-sm-12 -->
		</div><!-- /row -->

		<div class="row mb-5">
			<div class="col-md-1">
				<div class="thumbnail">
					<img class="img-fluid user-photo"
					     src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->

			<div class="col-md-11">
				<div class="card opinion-card card-default">
					<div class="card-header opinion-card-title">
						<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
					</div>
					<div class="card-body opinion-card-body">
						Panel content
					</div>
				</div>
			</div>
		</div><!-- /row -->

		<div class="row mb-5">
			<div class="col-md-1">
				<div class="thumbnail">
					<img class="img-fluid user-photo"
					     src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
				</div><!-- /thumbnail -->
			</div><!-- /col-sm-1 -->

			<div class="col-md-11">
				<div class="card opinion-card card-default">
					<div class="card-header opinion-card-title">
						<strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
					</div>
					<div class="card-body opinion-card-body">
						Panel content
					</div>
				</div>
			</div>
		</div><!-- /row -->


	</div>
</div>

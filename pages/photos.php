<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>

<?php

$pageTitle = 'photos';

?>

<div class="photo-section my-5">

	<div class="row justify-content-center">
		<div class="container">
			<h1 class="display-4 main-color font-weight-bold mb-5">Fotos</h1>
			<div class="row">

				<a href="upload/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
					<img src="upload/1.jpg" class="img-fluid shadow-effect-1 mb-4">
					<span class="overlay-photo d-flex justify-content-center align-items-center">
						<i class="fas fa-search fa-2x"></i>
					</span>
				</a>
				<a href="upload/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
					<img src="upload/1.jpg" class="img-fluid shadow-effect-1">
					<span class="overlay-photo d-flex justify-content-center align-items-center">
						<i class="fas fa-search fa-2x"></i>
					</span>
				</a>
				<a href="upload/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
					<img src="upload/1.jpg" class="img-fluid shadow-effect-1">
					<span class="overlay-photo d-flex justify-content-center align-items-center">
						<i class="fas fa-search fa-2x"></i>
					</span>
				</a>
				<a href="upload/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
					<img src="upload/1.jpg" class="img-fluid shadow-effect-1">
					<span class="overlay-photo d-flex justify-content-center align-items-center">
						<i class="fas fa-search fa-2x"></i>
					</span>
				</a>
				<a href="upload/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
					<img src="upload/1.jpg" class="img-fluid shadow-effect-1">
					<span class="overlay-photo d-flex justify-content-center align-items-center">
						<i class="fas fa-search fa-2x"></i>
					</span>
				</a>
				<a href="upload/1.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
					<img src="upload/1.jpg" class="img-fluid shadow-effect-1">
					<span class="overlay-photo d-flex justify-content-center align-items-center">
						<i class="fas fa-search fa-2x"></i>
					</span>
				</a>

			</div>



		</div>
	</div>
</div>

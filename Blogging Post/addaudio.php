<?php include "header.php"; ?>
<!--Main container start -->
	<main class="main-container">

		<section class="main-content extra-pages">
			<div class="main-content-wrapper add-to-margin">
				<div class="content-body" style="margin-right: 0px;">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-content">
							<h1 class="extra-title">Add Audio</h1>
							<div class="article-inner">
								

								<div class="contact-form">
									<form action="audioprocess.php" method="post" enctype="multipart/form-data" id="contactFrom">
									
										<div class="frm-row">
											<div class="">
												<select class="frm-input">
													<option value="">Select Category</option>
													<option>Cat1</option>
													<option>Cat1</option>
													<option>Cat1</option>
													<option>Cat1</option>
												</select>
											</div><br>
											<div class="">
												<input type="text" name="audioname" placeholder="Audio Name" class="frm-input">
											</div>
											<br>
											<diV class="frm-row">
												<textarea class="frm-input" rows="8" name="audiodescription" placeholder="audio Description"></textarea>
											</diV>
											<br>
											<div class="">
												<input type="file" name="fileToUpload" placeholder="Upload Audio" class="frm-input">
											</div>
											<div class="clearfix"></div>
										</div>
										
										
										<div class="frm-row send-button">
											<button type="submit" class="frm-button material-button">Upload</button>
										</div>
									</form>
								</div>
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

						</div>
					</article>
					<!-- article body end -->

				</div>
				
		</section>

	</main>
	<?php
	include('footer.php');
	?>
<?php include "header.php"; ?>


<?php 
	$q1 = "SELECT * FROM product_cat_tbl";
	$rs1 = mysqli_query($conn,$q1);
	while ($row1 = mysqli_fetch_assoc($rs1)) {
		$category[] = $row1;
	}
?>
<!--Main container start -->
	<main class="main-container">

		<section class="main-content extra-pages">
			<div class="main-content-wrapper add-to-margin">
				<div class="content-body" style="margin-right: 0px;">

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-content">
							<h1 class="extra-title">Add Product</h1>
							<div class="article-inner">
								

								<div class="contact-form">
									<form action="productprocess.php" method="post" enctype="multipart/form-data" id="contactFrom">
									
										<div class="frm-row">
											<div class="">
												<select class="frm-input" name="categoryid">
													<option value="">Select Category</option>
													<?php
													foreach ($category as $key => $value) { ?>
													 	<option value="<?php echo $value['id'] ?>" name="categoryname"><?php echo $value['category_name'];  ?></option>
													<?php  } ?>
												</select>
											</div><br>
											<div class="">
												<input type="text" name="productname" placeholder="Product Name" class="frm-input">
											</div>
											<br>
											<diV class="frm-row">
												<textarea class="frm-input" rows="8" name="productdescription" placeholder="Product Description"></textarea>
											</diV>
											<div class="">
												<input type="text" name="price" placeholder="Price" class="frm-input">
											</div>
											<br>
											<div class="">
												<input type="file" name="fileToUpload" placeholder="Image" class="frm-input">
											</div>
											<div class="clearfix"></div>
										</div>
										
										
										<div class="frm-row send-button">
											<button type="submit" class="frm-button material-button">SUBMIT</button>
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
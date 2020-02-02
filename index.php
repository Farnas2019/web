<?php 
include("admin/db_con.php");
?>
<!DOCTYPE html>

<html>
	<?php 
include("includes/head.php");
?>
	<body >
	
	<div class="container" id="main"> 
	<?php 
include("includes/nav.php");
?>
	</div>
	
	<div class="row" >
	<div class=" col-sm-6 col-xs-12" style="margin-top: 90px;">
	<div class="col-md-4 col-sm-6 col-xs-12 feature" >
							<div class="panel" id="panel">
									<div class="panel-heading">
										<h4 class="panel-tittle"> Prof. Nasiruddeen Farhan Ahmad</h4></div>
									<img src="images/fa.jpg" id="row_image" class="img-circle">
									<h5><strong>VC G.D COLLEGE OF COMPUTING</strong> </h5>
									
								</div>
					</div>
	</div>
		<div class="col-sm-6 col-xs-12">
			<div id="slider">
			<figure>
				
			<img src="images/logo2.JPG">
			<img src="images/k.JPG">
			<img src="images/j.JPG">
			<img src="images/l.JPG">
			<img src="images/prof1.JPG">
			</figure>
			</div>
		</div>
	</div>
		<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
			<div class="more-info-tab clearfix">
			   <h3 class="new-product-title pull-left">ِAvailable books</h3>
				<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
					<li class="active"><a href="#all" data-toggle="tab">All</a></li>
					<li><a href="#books" data-toggle="tab">Books</a></li>
					<li><a href="#furniture" data-toggle="tab">Furniture</a></li>
				</ul><!-- /.nav-tabs -->
			</div>

			<div class="tab-content outer-top-xs">
				<div class="tab-pane in active" id="all">			
					<div class="product-slider">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
<?php
$ret=mysql_query("select * from products");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>
					    	
		<div class="item item-carousel">
		<div class="products">
		<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="180" height="300" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>
			<div class="product-price">	
				<span class="price">
					N <?php echo htmlentities($row['productPrice']);?>			</span>
										     <span class="price-before-discount">N <?php echo htmlentities($row['productPriceBeforeDiscount']);?>	</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Add to Cart</a></div>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>

			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>
			<div class="row" id="frow">
			<div class="col-md-4 col-sm-6 col-xs-12 feature" >
										<div class="panel" id="panel">
												<div class="panel-heading">
													<h4 class="panel-tittle"> Dr. Zainab Muhammad </h4></div>
												<img src="images/za.jpg" id="row_image" class="img-circle">
												<h5><strong>Faculty Of Computing</strong> </h5>
												<p>Dr. Zainab Muhammad, she's a Doctor of Cyber Security, was born in Jigawa State in 
													1986 he stated her Basic education in Great Albarka Int. School where he obtained his Primary Leaving Certifiate
													 and so for he obtained is Dr. of Cyber Department at Cambridge university London......<a class="btn btn-danger">Read more</a></p>
											</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12 feature" >
											<div class="panel" id="panel">
													<div class="panel-heading">
														<h4 class="panel-tittle"> Prof. Mahmud Mukhtar Shafi</h4></div>
													<img src="images/f.png" id="row_image" class="img-circle">
													<h5>DVC Admin College Of Computing</h5>
													<p>Prof. NAsiruddeen Fahan Ahmad, He's a Professor of Artificial Intelegence, was born in Kwara in 
														1978 he sarted his Basic education in Ilorin Grammar School where he obtained his Primary Leaving Certifiate
														 and so for he obtained is Dr. of Philosophy at Cambridge university London......<a class="btn btn-danger">Read more</a></p>
												</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12 feature" >
												<div class="panel" id="panel">
														<div class="panel-heading">
															<h4 class="panel-tittle"> Prof. Mahmud Mukhtar Shafi</h4></div>
														<img src="images/f.png" id="row_image" class="img-circle">
														<h5>DVC Admin College Of Computing</h5>
														<p>Prof. NAsiruddeen Fahan Ahmad, He's a Professor of Artificial Intelegence, was born in Kwara in 
															1978 he sarted his Basic education in Ilorin Grammar School where he obtained his Primary Leaving Certifiate
															 and so for he obtained is Dr. of Philosophy at Cambridge university London......<a class="btn btn-danger">Read more</a></p>
													</div>
											</div>


			</div>
					<div class="row" id="f1row">	
			<div class="col-md-6">
							<img src="images/back2.jpg" id="isec">
								<p style=" font: 30px bold arial; color: black; padding-left: 100px; background-color: white; width: 500px;">SENATE BUILDING</p>
								</div>
								<div class="col-md-6" id="head">
										<img src="images/lib.jpg" id="isec">
										<p style=" font: 30px bold arial; color: green; padding-left: 100px; background-color: white; width: 500px;">OUR SCHOOL LIBRARY</p>	
								</div>
								
			</div>
		</div>	
		<?php include("includes/footer.php"); ?>
			
	
		<script src="http://code.jquery.com/jquery.js"></script>
 <script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>
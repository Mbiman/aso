<?php
	session_start();
	if (! isset($_SESSION['first_name'])) {
		header('location:login.php');
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<title>Aso Dogs | Home</title>
	<link rel="stylesheet" href="css/style.css">
	<style>
		.padding-0{
    padding-right:0;
    padding-left:0;
}
	</style>
	<script>
		var i = 0;//start point
		var images = [];
		var time = 3000;
	
	//image list
	images[0] = "images/9.jpeg"
	images[1] = "images/2.jpeg"
	images[2] = "images/11.jpeg"
	images[3] = "images/6.jpeg"
	images[4] = "images/10.jpeg"
	
	
	
	
	//change image
	function changeImg(){
		document.slide.src = images[i];
	
		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
	
		}
	
		setTimeout("changeImg()", time);
	}
	
	window.onload = changeImg;
	
	</script>
</head>
<body style="background-color: #dddddd; width: 100%;">

	<div class="scroll-up-btn">
		<i class="fa fa-arrow-up"></i>
	</div>
	
			<nav class="navbar">
			<div class="max-width">
				<div class="logo"><a href="#">ASO<span>DOGS</span></a></div>
				<ul class="menu">
					<li><a href="#" class="menu-btn">HOME</a></li>
					<li><a href="products.php" class="menu-btn">DOGS</a></li>
					<li><a href="#" class="menu-btn">CARRIERS/CAGES</a></li>
					<li><a href="#" class="menu-btn">FOODS/TREATS</a></li>
					<li><a href="#" class="menu-btn">ACCESORIES</a></li>
					<li><a href="logout.php" class="menu-btn">LOGOUT</a></li>
				</ul>
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div>
			</div>
		</nav><!-- closing nav -->
		<div style="height: 90px;"></div>

		<?php 
	if (isset($_GET['succ'])) 
	{
?>
	<h4><?php echo ($_GET['succ']); ?></h4>
<?php
	}elseif (isset($_GET['err']))
	{
?>
		<h4><?php echo ($_GET['err']); ?></h4>
<?php	
	}
 ?>

<div class="main container">
	<div class="row">
	<div class="first">
		<div class="col-sm-3 padding-0">
			<table>
				<tr>
					<td><i class="fa fa-dog"></i> <a href="#">Dogs</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-food"></i> <a href="#">Food & Treats</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-carrier"></i> <a href="#">Plastic Carriers & Cages</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-bottle"></i> <a href="#">Dog Grooming</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-"></i> <a href="#">Feeding Bowls</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-"></i> <a href="#">Collars & Leashes</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-"></i> <a href="#">Dog Toys</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-dog"></i> <a href="#">Supplements & Vitamins</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-tissue"></i> <a href="#">Canine Toiletries</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-dog"></i> <a href="#">Training Aids</a></td>
				</tr>
				<tr>
					<td><i class="fa fa-"></i> <a href="#">Microchips and Scanners</a></td>
				</tr>		
			</table>
		</div>
		<div class="col-sm-7 padding-0">
			<img name="slide" style="width: 100%; height: 350px; object-fit: cover;">
		</div>
		<div class="col-sm-2 padding-0">
			<div class="wrap" style="background-color: #EFCF18;">
				<i class="fa fa-bus"></i> Free Shipping Within Abakiliki
			</div>
			<div class="wrap" style="background-color: #FF3E3E;">
				<i class="fa fa-money"></i> Flexible Payment Option 
			</div>
			<div class="wrap" style="background-color: #3268C2;">
				<i class="fa fa-car"></i> Lorem, ipsum dolor.
			</div>
		</div>
	</div>
	<div class="second">
		<div class="col-sm-12">
			<h3 style="padding-bottom: 10px;"><i class="fa fa-flash"></i> TOP SELLING PRODUCTS</h3>
		</div>
		
		<div class="col-sm-3 my-3 my-md-0 padding-0">
            <div class="card shadow">
                <div>
                    <img src="images/15.jpg" alt="" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">GOLDEN RETRIEVER</h5>
				   <h6>
					<i class="fa fa-star"></i>   
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
				   </h6>
				   <h5>
					  <span class="price">N0.00</span> 
				   </h5>
                </div>
            </div>
		</div>

		<div class="col-sm-3 my-3 my-md-0 padding-0">
            <div class="card shadow">
                <div>
                    <img src="images/14.jpg" alt="" style="object-fit: contain;" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">GOLDEN RETRIEVER</h5>
				   <h6>
					<i class="fa fa-star"></i>   
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
				   </h6>
				   <h5>
					  <span class="price">N0.00</span> 
				   </h5>
                </div>
            </div>
		</div>
		
		
		
	
	
		
		
		<div class="col-sm-3 my-3 my-md-0 padding-0">
            <div class="card shadow">
                <div>
                    <img src="images/13.jpg" alt="" class="img-fluid card-img-top" style="object-fit: cover;">
                </div>
                <div class="card-body">
                    <h5 class="card-title">GOLDEN RETRIEVER</h5>
				   <h6>
					<i class="fa fa-star"></i>   
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
				   </h6>
				   <h5>
					  <span class="price">N0.00</span> 
				   </h5>
                </div>
            </div>
		</div>
		
	
		<div class="col-sm-3 my-3 my-md-0 padding-0">
            <div class="card shadow">
                <div>
                    <img src="images/15.jpg" alt="" style="object-fit: contain;" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">GOLDEN RETRIEVER</h5>
				   <h6>
					<i class="fa fa-star"></i>   
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
					<i class="fa fa-star"></i>  
				   </h6>
				   <h5>
					  <span class="price">N0.00</span> 
				   </h5>
                </div>
            </div>
		</div>
			
</div>

<div class="nothing" style="height: 30px;"></div>

<div class="third">
	<div class="col-sm-12">
		<h3><i class="fa fa-thumbs-up"></i> BEST DEALS</h3>
	</div>
	
	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow" style="height: 450px;">
			<div>
				<img src="images/25.jpeg" alt="" height="330px" style="object-fit: contain;" class="card-img-top">
			</div>
			<div class="card-body">
				<h5 class="card-title">GOLDEN RETRIEVER</h5>
			   <h6>
				<i class="fa fa-star"></i>   
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
			   </h6>
			   <h5>
				  <span class="price">N0.00</span> 
			   </h5>
			</div>
		</div>
	</div>
	
	
	
		<div class="middle col-sm-3 my-3 my-md-0 padding-0">
			<div class="col-sm-12 padding-0">
				<div class="card" style="height: 150px;">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="card-title">SIBERIAN HUSKY</h5>
								<p class="card-text"><h6>
									<i class="fa fa-star"></i>   
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
								   </h6></p>
								   <h5>
									<span class="price">N0.00</span> 
								 </h5>
							</div>
							<div class="col-sm-6 text-right">
								<img class="" src="images/30.jpeg" alt="sans" width="100%">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 padding-0">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="card-title">MALTESE</h5>
								<p class="card-text"><h6>
									<i class="fa fa-star"></i>   
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
								   </h6></p>
								   <h5>
									<span class="price">N0.00</span> 
								 </h5>
							</div>
							<div class="col-sm-6 text-right">
								<img class="" src="images/31.jpeg" alt="sans" width="100%">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 padding-0">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
								<h5 class="card-title">CAUSCASIAN SHEPHERD</h5>
								<p class="card-text"><h6>
									<i class="fa fa-star"></i>   
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
									<i class="fa fa-star"></i>  
								   </h6></p>
								   <h5>
									<span class="price">N0.00</span> 
								 </h5>
							</div>
							<div class="col-sm-6 text-right">
								<img class="" src="images/27.jpeg" alt="sans" width="100%">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	
	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow" style="height: 450px;">
			<div>
				<img src="images/34.jpeg" alt="" class="card-img-top" height="330px" style="object-fit: contain;">
			</div>
			<div class="card-body">
				<h5 class="card-title">GOLDEN RETRIEVER</h5>
			   <h6>
				<i class="fa fa-star"></i>   
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
			   </h6>
			   <h5>
				  <span class="price">N0.00</span> 
			   </h5>
			</div>
		</div>
	</div>
	

	<div class="middle col-sm-3 my-3 my-md-0 padding-0">
		<div class="col-sm-12 padding-0">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<h5 class="card-title">ROTTWEILER</h5>
							<p class="card-text"><h6>
								<i class="fa fa-star"></i>   
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
							   </h6></p>
							   <h5>
								<span class="price">N0.00</span> 
							 </h5>
						</div>
						<div class="col-sm-6 text-right">
							<img class="" src="images/32.jpeg" alt="sans" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 padding-0">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<h5 class="card-title">BEAGLE</h5>
							<p class="card-text"><h6>
								<i class="fa fa-star"></i>   
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
							   </h6></p>
							   <h5>
								<span class="price">N0.00</span> 
							 </h5>
						</div>
						<div class="col-sm-6 text-right">
							<img class="" src="images/33.jpeg" alt="sans" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 padding-0">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<h5 class="card-title">BOSTON TERRIER</h5>
							<p class="card-text"><h6>
								<i class="fa fa-star"></i>   
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
								<i class="fa fa-star"></i>  
							   </h6></p>
							   <h5>
								<span class="price">N0.00</span> 
							 </h5>
						</div>
						<div class="col-sm-6 text-right">
							<img class="" src="images/35.jpeg" alt="sans" width="100%">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
</div>

<div class="nothing" style="height: 30px;"></div>


  <div class="second">
	<div class="col-sm-12">
		<h3><i class="fa fa-edit"></i> NEW ARRIVALS</h3>
	</div>
	
	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div>
				<img src="images/49.jpeg" alt="" style="object-fit: contain;" class="img-fluid card-img-top">
			</div>
			<div class="card-body">
				<h5 class="card-title">GOLDEN RETRIEVER</h5>
			   <h6>
				<i class="fa fa-star"></i>   
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
			   </h6>
			   <h5>
				  <span class="price">N0.00</span> 
			   </h5>
			</div>
		</div>
	</div>

	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div>
				<img src="images/41.jpeg" alt="" style="object-fit: contain;" class="img-fluid card-img-top">
			</div>
			<div class="card-body">
				<h5 class="card-title">GOLDEN RETRIEVER</h5>
			   <h6>
				<i class="fa fa-star"></i>   
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
			   </h6>
			   <h5>
				  <span class="price">N0.00</span> 
			   </h5>
			</div>
		</div>
	</div>
	
	
	


	
	
	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div>
				<img src="images/39.jpg" alt="" class="img-fluid card-img-top" style="object-fit: cover;">
			</div>
			<div class="card-body">
				<h5 class="card-title">GOLDEN RETRIEVER</h5>
			   <h6>
				<i class="fa fa-star"></i>   
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
			   </h6>
			   <h5>
				  <span class="price">N0.00</span> 
			   </h5>
			</div>
		</div>
	</div>
	

	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div>
				<img src="images/37.jpeg" alt="" style="object-fit: contain;" class="img-fluid card-img-top">
			</div>
			<div class="card-body">
				<h5 class="card-title">GOLDEN RETRIEVER</h5>
			   <h6>
				<i class="fa fa-star"></i>   
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
				<i class="fa fa-star"></i>  
			   </h6>
			   <h5>
				  <span class="price">N0.00</span> 
			   </h5>
			</div>
		</div>
	</div>
		
</div>
  
<div class="nothing" style="height: 30px;"></div>


	</div>
</div>

<div class="clients">
	<div class="container">
		<div class="row">
	
	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div class="card-body">
				<i class="fa fa-edit"></i>
				<h5 class="card-title">1000+ Clients Love Us</h5>
			   <h6>
				We Offer best service and great prices on high quality products 
			   </h6>
			</div>
		</div>
	</div>

	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div class="card-body">
				<i class="fa fa-plane"></i>
				<h5 class="card-title">Shipping to the 36 states</h5>
			   <h6>
				We deliver nationwide working with credible airlines, interstate transport and logistics companies 
			   </h6>
			</div>
		</div>
	</div>
	
	
	
	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div class="card-body">
				<i class="fa fa-credit-card"></i>
				<h5 class="card-title">100% Safe Payment</h5>
			   <h6>
				Shop with confidence Using the world's most secure and popular payment methods
			   </h6>
			</div>
		</div>
	</div>
	

	<div class="col-sm-3 my-3 my-md-0 padding-0">
		<div class="card shadow">
			<div class="card-body">
				<i class="fa fa-money"></i>
				<h5 class="card-title">3000+ Successful Deliveries</h5>
			   <h6>
				Our buyer protection covers your purchase from click to delivery 
			   </h6>
			</div>
		</div>
	</div>

</div>
</div>
</div>

<div class="nothing" style="height: 30px;"></div>

<div class="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h3>ABOUT ASO DOGS</h3>
				<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio est suscipit natus totam non aliquam quia. Dolorem nobis pariatur deleniti modi omnis excepturi sint cupiditate hic aliquam, deserunt, veniam distinctio blanditiis delectus corrupti autem sapiente iusto debitis, aspernatur voluptatem mollitia eveniet impedit neque exercitationem explicabo. Aspernatur hic explicabo commodi dolore cum atque debitis, possimus esse itaque et, sed beatae nobis dolor nemo id exercitationem laudantium, omnis amet cumque saepe aperiam expedita dignissimos. Ex optio nihil, officiis, maiores iure soluta eos et, illo itaque veniam laboriosam facere voluptates molestiae ullam dignissimos inventore quaerat. Possimus consequatur placeat quo dolorum quibusdam praesentium tenetur.
				<br> <br>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident laborum, eligendi iure fugit omnis maxime. Suscipit dolorum laboriosam quas nostrum magni quaerat veritatis natus, eius ratione atque? Optio nesciunt eum doloremque nostrum sed nisi? Quod totam itaque nihil. Dolor corrupti doloremque nihil laudantium temporibus quaerat sequi, est suscipit soluta quod molestias possimus maxime nobis accusamus inventore necessitatibus natus odio qui minus. Repudiandae ex laborum eius. Atque dolorum mollitia minima nemo culpa aliquam omnis amet perferendis adipisci non laudantium eos est necessitatibus quasi, dolores deleniti in voluptatibus nihil odio vel enim perspiciatis doloremque. Consequuntur at odio voluptate soluta quis! Consectetur, excepturi.
				<br> <br>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sequi ab beatae aliquid veritatis ex nulla? Tenetur nobis amet, animi tempora rerum autem, expedita molestiae quidem consequuntur dicta nostrum eius explicabo magnam inventore aliquid eos saepe provident, labore illo. Ut repellendus voluptas nisi libero, expedita ipsa laboriosam veniam id perferendis iusto aspernatur ratione facere porro? Sit autem et ad officia est, doloribus obcaecati cum velit aliquid odit culpa! Doloremque a nemo quos molestias voluptatum culpa pariatur possimus sapiente omnis placeat natus, qui enim quis atque laudantium, quidem ut animi rem? Aut consequuntur cupiditate dolores, dolorem esse laborum maiores. Porro, aspernatur?
				</p>
			</div>
			<div class="col-sm-3">
				<img src="images/2.jpg" alt="" width="100%">
				<label for="">Aso</label>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorem, iusto sequi nulla ratione est? Sit libero provident consequuntur adipisci numquam pariatur itaque assumenda minima necessitatibus nisi quae sunt laborum ex dolorum eius, qui unde quos nemo eum maiores amet.</p>
			</div>
		</div>
	</div>
</div>

<div class="nothing" style="height: 30px;"></div>

<?php
require_once ('footer.php');
?>


<script>
    //slide up btn script
	$('.scroll-up-btn').click(function(){
		$('html').animate({scrollTop: 0});
	});
</script>

<script src="javascript/script.js"></script>		
</body>
</html>
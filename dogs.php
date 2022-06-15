<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aso Dogs</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <style>
        @media (max-width: 947px){
            .card img{
                height: 100%;
            }
        }
    </style>
</head>
<body>
<div class="scroll-up-btn">
		<i class="fa fa-arrow-up"></i>
	</div>
	<div class="nothing" style="height: 30px;"></div>
			<nav class="navbar">
			<div class="max-width">
				<div class="logo"><a href="index.html">ASO<span>DOGS</span></a></div>
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div>
			</div>
        </nav><!-- closing nav -->
        
        <hr>
<div class="container shadow"style="background-color: #dddddd;">
    <h3 class="text-center font-weight-bold text-secondary mt-3"></h3>
   
    <div class="row">
    <?php
    require_once 'config.php';
    $config = new Config;
    $sql = 'SELECT * FROM products ORDER BY id DESC';
    $stmt = $config->conn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll();
    foreach ($products as $row):
    ?>
    <div class="col-lg-3 col-md-6">
        <div class="card shadow mt-2 mb-4">
            <img src="uploads/image/<?= $row['product_image'] ?>" class= "card-img-top p-3" style="height: 200px; object-fit: contain;">
            <div class="card-body pt-0">
                <h5 class="card-title"><?= $row['product_name'] ?></h5>
                <div class="card-text my-2"><?= $row['product_desc'] ?></div>
                <button class="btn btn-danger btn-block rounded-pill buy_now_btn" id="<?= $row['id'] ?>">&#8358 <?= number_format($row ['product_price'], 0, '.', ',')?> Buy Now</button>
            </div>
        </div>
    </div>
<?php endforeach; ?>
    </div>
</div>


<hr>
<div class="footer">
	<div class="container">
		<div class="row py-5">
			<div class="col-sm-4">
				<h4>SUBSCRIPTION</h4>
				<div class="sub" style="display: flex;">
				<input type="text" class="form-control" placeholder="Your Email Address" style="width: 100%;"> <input type="submit" style="border-radius: 5px; background-color:  #E0B938; color: white; border-color:  #E0B938;">
				</div>
				<br>
				<h4>STAY CONNECTED</h4>
				<div class="social">
					<a href="#" style="color:black;"><span class="fa fa-facebook-f"></span></a>
					<a href="#" style="color:black;"><span class="fa fa-twitter"></span></a>
					<a href="#" style="color:black;"><span class="fa fa-instagram"></span></a>
					<a href="#" style="color:black;"><span class="fa fa-google-plus"></span></a>
				</div>
			</div>
			<div class="col-sm-2">
				<h4>HOW TO BUY</h4>
					<li><a href="#">Create An Account</a></li>
					<li><a href="#">Make Payments</a></li>
					<li><a href="#">Delivery Options</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms and Condition</a></li>
			</div>
			<div class="col-sm-2">
				<h4>CUSTOMER SERVICE</h4>
					<li><a href="#">Customer support</a></li>
					<li><a href="#">Affiliate Programs</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
			</div>
			<div class="col-sm-4">
				<h4>CONTACT US</h4>
			<div class="row">
				<i class="fa fa-map-marker"></i>
				<div class="info">
					<div class="head">Ae - Funai, Ebonyi State, Nigeria.</div>
				</div>
			</div>
			<div class="row">
				<i class="fa fa-phone"></i>
				<div class="info">
					<div class="head">+2348 123 4567</div>
				</div>
			</div>
			<div class="row">
				<i class="fa fa-envelope"></i>
				<div class="info">
					<div class="head">Asodogs@gmail.com</div>
				</div>
			</div>
			</div>


		</div>
	</div>
</div>

<div class="extra">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="line">
				<h4>DOGS:</h4>
				<p>
					<a href="#">Labrador</a> | <a href="#">Golden Retriever</a> | <a href="#"><Pug/a> | <a href="#">Dalmatian</a> | <a href="#">Maltese</a> | <a href="#">Pomeranian</a> |<br> <a href="#">Shih Tzu</a> | <a href="#">Dachshund</a> | <a href="#">French Bulldog</a> | <a href="#">German Shepherd</a> | <a href="#">Rottweiler</a> |
				</p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="line">
				<h4>DOGS:</h4>
				<p>
					<a href="#">Doberman Pinscher</a> | <a href="#">St. Bernard</a> | <a href="#">Chihuahua</a> | <a href="#">Chow Chow</a> | <a href="#">Boxer</a> | <a href="#">Siberian Husky</a> | <a href="#">Alaskan Malamute</a> | <a href="#">English Bulldog</a> | <a href="#">Lhasa Apso</a> | <a href="#">Great Dane</a> | <a href="#">Boerbel</a>
				</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="final">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p>
				<span>Created By <a href="#">Aso Nnamdi</a> | <span class="fa fa-copyright"></span>2020 All Rights Reserved</span>
					</p>
			</div>
		</div>
	</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
	$(window).scroll(function(){
		
		if(this.scrollY > 500){
			$('.scroll-up-btn').addClass("show");
		}else{
			$('.scroll-up-btn').removeClass("show");
		}
	});

	//toggle menu and navbar
	$('.menu-btn').click(function(){
		$('.navbar .menu').toggleClass("active");
		$('.menu-btn i').toggleClass("active");
	});


	//slide up btn script
	$('.scroll-up-btn').click(function(){
		$('html').animate({scrollTop: 0});
	});
});
</script>
</body>
</html>
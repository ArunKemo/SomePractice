 <!DOCTYPE html>
<html>
<head>
	<title>Arun's Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/min.css">
	<meta name="viewport" content="width=device=widhth, initial-scale=1,user-scalable=no">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- Top nav bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Arun's page</a>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
					<ul clss="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Header -->
	<div id="header-wrapper">
		<div id="back-flower"></div>
		<div id="logotext"></div>
		<div id="fore-flower"></div>
	</div>
<div class="container-fluid">
	<!-- Left-sidebar -->
	<div class="col-md-2">
		left sidebar
	</div>
	<!-- main-content -->
	<div class="col-md-8">
		<div class="row">
			<h2 class="text-center">Featured product.</h2>
			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>

			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>


			
			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>


			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>

			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>

			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>

			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>

			<div class="col-md-3">
				<h4>Luffy.</h4>
				<img src="images/products/luffy2.jpg" alt="luffy" />
				<p class="list-price text-danger">List Price: <s>5232</s></p>
				<p class="price">our Price: 250</p>
				<button type="button" class="btn btn-sm btn-success" data-toggle="model" data-target="#detail-1">Detail
					
				</button>  
			</div>




		</div>
	</div>
	<!-- right-sidebar -->
	<div class="col-md-2">
		Right side bar
	</div>
</div>

	
<script>
	jquery(window).scroll(function(){
		var vscroll = jquery(this).scrollTop();
		console.log(vscroll);
	});
</script>

</body>
</html>
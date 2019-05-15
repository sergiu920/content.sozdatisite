<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="description shop">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>My shop</title>
	<style type="text/css">

		header{
			border-bottom: 2px solid #ccc;
			margin-bottom: 20px;
		}

		h2{
			font-size: 3em;
			color: green;
		}

		.product_specifications{
			margin-top: 20px;
		}

		.price{
			font-size: 2em;
		}

		.price span{
			color: #cc0000;
		}

	</style>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center">My Shop</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="product.jpg" alt="Mouse" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2>Mouse</h2>
				<div class="product_specifications">
					<h4>Характеристики товара:</h4>
					<ul>
						<li>Количество кнопок: 6</li>
						<li>DPI до 2000</li>
						<li>Подсветка RGB LED</li>
					</ul>
				</div>
				<div class="price">
					Цена: <span>18$</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
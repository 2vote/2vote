<!doctype html>
<html lang="en" class="h-100">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{ env('APP_NAME') }} Voting System">
	<meta name="author" content="Pim Oude Veldhuis, Peter Bosch">
	<title>{{ env('APP_NAME') }} Voting System</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/app.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

	</style>
</head>
<body class="d-flex flex-column h-100">
	<header>
		<!-- Fixed navbar -->
		<nav class="navbar navbar-expand-md navbar-dark">
			<a class="navbar-brand" href="/">{{ env('APP_NAME') }} <span class="subtitle">| {{ env('APP_COMPANY') }}</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Admin
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Voters</a>
							<a class="dropdown-item" href="#">Add meeting</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" tabindex="-1">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="header">
		<div class="container">
			<div class="text-white">
				<div class="media-body">
					<h3 class="mb-1 text-white font-weight-normal text-center">@yield('page_title', 'NO PAGE TITLE')</h3>
				</div>
			</div>
		</div>
	</div>
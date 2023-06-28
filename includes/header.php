<header>
	<div class="main-header">
		<div class="container">
			<div class="menu-Bar">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="row align-items-center">
				<div class="col-md-4 text-left">
					<a href="./" class="logo">
						<img src="./assets/images/logo-1.png" alt="">
					</a>
				</div>

				<div class="col-md-8 text-right">
					<div class="menuWrap d-flex align-items-center">
						<ul class="menu">
							<li <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>
								<a href="./">Home</a>
							</li>
							<li <?php if (basename($_SERVER['PHP_SELF']) == 'portfolio.php') echo 'class="active"'; ?>>
								<a href="./portfolio.php">Portfolio</a>
							</li>
							<li <?php if (basename($_SERVER['PHP_SELF']) == 'blogs.php') echo 'class="active"'; ?>>
								<a href="./blogs.php">Blogs</a>
							</li>
							<li <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"'; ?>>
								<a href="./contact.php">Contact</a>
							</li>
						</ul>


						<div class="header-btn">
							<button class="btn">
								Get in touch
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
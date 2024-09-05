<div class="sidebar app-aside" id="sidebar">
	<div class="sidebar-container perfect-scrollbar">

		<nav>

			<!-- start: MAIN NAVIGATION MENU -->
			<div class="navbar-title">
				<span>Main Navigation</span>
			</div>
			<ul class="main-navigation-menu">
				<li>
					<a href="<?= base_url("dashb") ?>">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-home"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Dashboard </span>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-user"></i>
							</div>
							<div class="item-inner">
								<span class="title"> RH</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?= base_url("rhAdd") ?>">
								<span class="title"> Add RH</span>
							</a>
						</li>
						<li>
							<a href="<?= base_url("listRh") ?>">
								<span class="title"> Manage RH </span>
							</a>
						</li>

					</ul>
				</li>

				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-user"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Users</span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?= base_url("userAdd") ?>">
								<span class="title"> Add Users</span>
							</a>
						</li>
						<li>
							<a href="<?= base_url("listUser") ?>">
								<span class="title"> Manage Users </span>
							</a>
						</li>

					</ul>
				</li>

				<li>
					<a href="<?= base_url("offers") ?>">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-file"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Offers History </span>
							</div>
						</div>
					</a>
				</li>

				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-files"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Conatct Us Queries </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="<?= base_url("contus") ?>">
								<span class="title"> Query List</span>
							</a>
						</li>

					</ul>
				</li>

				<!--- Pages---->
				<li>
					<a href="javascript:void(0)">
						<div class="item-content">
							<div class="item-media">
								<i class="ti-file"></i>
							</div>
							<div class="item-inner">
								<span class="title"> Pages </span><i class="icon-arrow"></i>
							</div>
						</div>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="<?= base_url("about-us") ?>">
								<span class="title">About Us </span>
							</a>
						</li>
						<li>
							<a href="<?= base_url("contact-us") ?>">
								<span class="title">Contact Us </span>
							</a>
						</li>
					</ul>
				</li>

			</ul>
			<!-- end: CORE FEATURES -->

		</nav>
	</div>
</div>
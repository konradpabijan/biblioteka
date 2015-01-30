<!DOCTYPE html>
<html>
<head>
    <?php echo $this->partial('parts/header'); ?>
</head>
<body class="fixed-header container">

<div>

    <?php echo $this->partial('parts/top'); ?>

	<aside id="left-panel">

		<!-- User info -->
		<div class="login-info">
			<span> <!-- User image size is adjusted inside CSS, it should stay as it -->
				<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
					<img src="/img/avatars/sunny.png" alt="me" class="online" />
					<span>
						john.doe
					</span>
					<i class="fa fa-angle-down"></i>
				</a>
			</span>
		</div>
		<!-- end user info -->

		<!-- NAVIGATION : This navigation is also responsive-->
		<nav>
			<ul>
				<li class="active">
					<a href="/" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
				</li>
				<li>
					<hr />
				</li>
				<li>
					<a href="#">Kategorie</a>
				</li>
				<?php foreach ($categories as $category) { ?>
				<li>
					<a href="/categories/show/<?php echo $category->category_link; ?>"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent"><?php echo $category->category_name; ?></span></a>
				</li>
				<?php } ?>
			</ul>
		</nav>
			<span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

	</aside>
	<!-- END NAVIGATION -->

	<!-- MAIN PANEL -->
	<div id="main" role="main">

		<!-- RIBBON -->
		<div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

			<!-- breadcrumb -->
			<ol class="breadcrumb">
				<li>Home</li><li>Dashboard</li>
			</ol>
			<!-- end breadcrumb -->

			<!-- You can also add more buttons to the
            ribbon for further usability

            Example below:

            <span class="ribbon-button-alignment pull-right">
            <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
            <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
            <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
            </span> -->

		</div>
		<!-- END RIBBON -->

		<!-- MAIN CONTENT -->
		<div id="content">
            <?php echo $this->getContent(); ?>
		</div>
		<!-- END MAIN CONTENT -->

	</div>
	</div>

<?php echo $this->partial('parts/footer'); ?>




</body>
</html>
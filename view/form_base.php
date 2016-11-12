<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Select and Register for Courses</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link type="text/css" rel="stylesheet" href="/resources/SiteStyle.css">
		<link type="text/css" rel="stylesheet" href="/resources/ConstituencyStyle.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<script>
			var courses = <?php echo json_encode($courses); ?>;
		</script>
	</head>
	<body>
		<div id="webPage">
			<div id="pageHeader">
				<div id="headerBanner">
					<div id="acctToolbar">
						<ul class="toolbar">
							<li id="acctContact">
								<a><span class="label">Help</span></a>
							</li>
							<li id="acctHelp">
								<a><span class="label">Help</span></a>
							</li>
							<li id="acctConstituency">
								<a><span class="label">Students Menu</span></a>
							</li>
							<li id="acctMain">
								<a><span class="label">Main Menu</span></a>
							</li>
							<li id="acctLogout">
								<a><span class="label">Log Out </span></a>
							</li>
						</ul>
						<div id="acctWidget">
						</div>
					</div>
				</div>
				<div class="custom">
				</div>
			</div>
			<div id="pageBody" class="WBST">
				<div id="bodyConstituency">Current Students</div>
				<div class="clear">
				</div>
				<div id="bodyForm">
					<div id="screenTitle">
						<span>Select and Register for Courses</span>
					</div>
					<div class="custom">
						<?php foreach ($errors as $error) { ?>
							<div class="errorText"><?= $error ?></div>
						<?php } ?>
					</div>
					<div class="custom">
<pre>
</pre>
					</div>

					<?php include __DIR__ . '/' . $view . '.php' ?>

				</div>
			</div>
			<div id="pageFooter">
				<div class="custom">
				</div>
				<div id="footerBanner">
					<div id="sysToolbar">
						<ul class="toolbar">
							<li id="sysContact">
								<a><span class="label">Help</span></a>
							</li>
							<li id="sysHelp">
								<a><span class="label">Help</span></a>
							</li>
							<li id="sysConstituency">
								<a><span class="label">Students Menu</span></a>
							</li>
							<li id="sysMain">
								<a><span class="label">Main Menu</span></a>
							</li>
							<li id="sysLogout">
								<a><span class="label">Log Out </span></a>
							</li>
						</ul>
						<div id="sysWidget">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

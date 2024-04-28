<!DOCTYPE HTML>
<html>

<head>
	<title>{$page_title}</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/lib/template/assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="{$conf->app_url}/lib/template/assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">
		{*
			<!-- Header -->
			<header id="header">
			<a href="{$conf->action_url}calcShow" class="logo"><strong>Kalkulator</strong> <span>kredytowy</span></a>
			{if isset($role)}
				<a href="{$conf->action_url}operationList" style="padding:0 1.5em">Poprzednie wyniki</a>
				<a href="{$conf->action_url}logout" style="padding:0 1.5em">wyloguj</a>
			{/if}
			</header>
		*}

		<!-- Main -->
		<div id="main" class="alt">
			<!-- One -->
			<section id="one">
				<div class="inner">
					<!-- Elements -->
					<div class="row gtr-200">
						<div class="col-6 col-12-medium">
							{block name = top}{/block}
							{block name = bottom}{/block}
						</div>
					</div>

				</div>
			</section>

		</div>
		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="copyright">
					<li>&copy; Vitalii Kovtun</li>
					<li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
<html>
	<head>
		<title>ЦТС Инфр</title>
		<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap/dist/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.css"/>	</head>
		<link href="./assets/css/open-iconic.css" rel="stylesheet">
		<style>
			.scrolling-wrapper 
			{
				overflow-x: hidden;
				overflow-y: auto;
				white-space: nowrap;
			}
		</style>
	<body>
		<div id="app">
			<b-navbar toggleable="md" variant="primary" type="dark" variant="info" position="fixed">
				<b-navbar-brand href="#">ЦТС Инфр</b-navbar-brand>
				<b-navbar-nav>
					<b-nav-item to="/asoz">АСОЗ</b-nav-item>
					<b-nav-item to="/tmap">Часовые пояса</b-nav-item>
				</b-navbar-nav>
			</b-navbar>
			<div class="scrolling-wrapper" style="height: 85%">
				<router-view></router-view>
			</div>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/vue"></script>
		<script src="//unpkg.com/babel-polyfill@latest/dist/polyfill.min.js"></script>
		<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
		<script src="//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js"></script>
		<script src="./assets/js/app.js"></script>
	</body>
</html>


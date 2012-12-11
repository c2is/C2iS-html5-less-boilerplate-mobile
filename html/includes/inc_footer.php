<!-- End of document -->
	<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script>window.jQuery || document.write('<script src='+settingsGlobal.sTemplatePath+'"js/libs/jquery-1.8.3.min.js">\x3C/script>')</script>

	<script>
		head.js(
			{modernizr: settingsGlobal.sTemplatePath+"js/libs/modernizr-2.6.1.min.js"}, // test support html5 functionality
			//{selectivizr: settingsGlobal.sTemplatePath+"js/libs/selectivizr-min.js"}, // extend css selectors for IE
			{ratchet: settingsGlobal.sTemplatePath+"js/libs/ratchet.js"},
			{jqPlugins: settingsGlobal.sTemplatePath+"js/plugins.js"},
			{frontJS: settingsGlobal.sTemplatePath+"js/front.js"}
		);
	</script>

	<!-- Prompt IE 6 users to install Chrome Frame -->
	<!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
</body>
</html>

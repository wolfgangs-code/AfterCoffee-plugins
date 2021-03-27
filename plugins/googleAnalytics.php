<?php
#===========================================================#
# This plugin for AfterCoffee adds Google Analytics support #
#===========================================================#
class googleAnalytics {
	protected $tag = USERSET["pluginSetting"]["googleAnalytics"]["gtag"];
	function addHead() {
		print ("
			<script async src=\"https://www.googletagmanager.com/gtag/js?id=" . $tag . "\"></script>
			<script>
		  		window.dataLayer = window.dataLayer || [];
		  		function gtag(){dataLayer.push(arguments);}
		  		gtag('js', new Date());

		  		gtag('config', '" . $tag . "');
			</script>
		");
	}
}
?>

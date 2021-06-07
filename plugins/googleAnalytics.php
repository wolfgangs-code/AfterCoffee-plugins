<?php
#===========================================================#
# This plugin for AfterCoffee adds Google Analytics support #
#===========================================================#
class googleAnalytics {
	const version = '3.0';
	protected $tag = USERSET[__CLASS__]["gtag"];
	function addSetting() {
		$settings = ["gtag"];
		return $settings;
	}
	function addHead() {
		print ("
			<script async src=\"https://www.googletagmanager.com/gtag/js?id=" . $this->tag . "\"></script>
			<script>
		  		window.dataLayer = window.dataLayer || [];
		  		function gtag(){dataLayer.push(arguments);}
		  		gtag('js', new Date());

		  		gtag('config', '" . $this->tag . "');
			</script>
		");
	}
}
?>

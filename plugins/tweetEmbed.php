<?php
	#===========================================================#
	# This plugin for AfterCoffee replaces Twitter URL Links    #
	# with full HTML embeds.                                    #
	#===========================================================#
class tweetEmbed {
	const version = '2.0';
	function addHead() {
		print("<meta name=\"twitter:widgets:border-color\" content=".USERSET["themeColor"].">");
	}

	function changeText($html) {
		# Tweer URI example: https://twitter.com/BombosArt/status/1367576818958614530
		$html = preg_replace("/<a href=\"https?:\/\/twitter\.com\/([\w_]{1,15})\/status\/(\d*)\">.*<\/a>/",
		"<blockquote class=\"twitter-tweet\">
			<a href=\"https://twitter.com/$1/status/$2\"></a>
		</blockquote>",
		$html);
		return $html;
	}

	function addFooter() {
		print("<script async src=\"https://platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>");
	}

	function editorGuide() {
		$guide = "<b>Tweet Embed:</b> Placing a link to a tweet anywhere will work.";
		return $guide;
	}
}
?>
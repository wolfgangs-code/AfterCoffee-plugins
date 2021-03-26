<?php
#===========================================================#
# This plugin for AfterCoffee replaces Spotify track URIs   #
# with full HTML embeds.                                    #
#===========================================================#
class spotifyEmbed {
	function changeText($html) {
		# Track URI example: spotify:track:7EaL8Zt8UAabmP6sQydgx9
		$html = preg_replace("/spotify:(\w*):(\w{22})/", "<iframe src=\"https://open.spotify.com/embed/$1/$2\" width=\"300\" height=\"80\" frameborder=\"0\" allowtransparency=\"true\" allow=\"encrypted-media\"></iframe>", $html);
		return $html;
	}
}
?>

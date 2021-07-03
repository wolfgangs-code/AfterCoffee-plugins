<?php
class vanillaTilt {
	const version = '2.0';
	function changeText($html) {
		$html = preg_replace("/(\[card\])(.*?)(\[\/card\])/", "<div style=\"display: inline-block\"data-tilt data-tilt-glare data-tilt-max-glare=\"0.8\" data-tilt-scale=\"1.1\">$2</div>", $html);
		return $html;
	}
	function addFooter($html) {
		$hasCard = strpos($html, "data-tilt");
		!$hasCard ?: print "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js\" integrity=\"sha512-SttpKhJqONuBVxbRcuH0wezjuX+BoFoli0yPsnrAADcHsQMW8rkR84ItFHGIkPvhnlRnE2FaifDOUw+EltbuHg==\" crossorigin=\"anonymous\"></script>\n";
	}
	function editorGuide() {
		$guide = "<b>vanilla-tilt:</b> [card]image.png[/card]";
		return $guide;
	}
}
?>

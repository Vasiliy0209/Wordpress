<?
/*
	Plugin name: Демонстрация шорткодоа
	Author: Me
*/

function my_shortcode($attrs,$content) {
	//do_shortcode($content);
	$attrs_as_string="";
	foreach($attrs As $name=>$value)
		$attrs_as_string.="<tr><td>$name</td><td>$value</td></tr>";
	return "
<table border=\"1\">
	$attrs_as_string
	<tr><td colspan=\"2\">Контент:</td></tr>
	<tr><td colspan=\"2\">$content</td></tr>
</table>";
}
add_shortcode("myshortcode","my_shortcode");

function my_subcode() {
	return "<hr/><center>Это сабкод</center><hr/>";
}
add_shortcode("mysubcode","my_subcode");
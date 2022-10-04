<?php
/*
	Plugin name: Плагин, добавляющий команды в меню
	Author: Me
*/

function register_button($buttons){
	array_push($buttons,'mytabs_mce_button');
	return $buttons;
}
add_filter("mce_buttons","register_button");

function add_js($opt){
	$opt["mytabs_mce_button"]=plugins_url(
		"scripts/mytabs_button.js",
		__FILE__
	);
	return $opt;
}
add_filter("mce_external_plugins","add_js");

<?php
namespace FixFarsi;

class Fix {
	public static function fix($string) {
		$search = ['ك','ي'];

		$replace = ['ک',	'ی'];

		return str_replace($search, $replace, $string);
	}
}
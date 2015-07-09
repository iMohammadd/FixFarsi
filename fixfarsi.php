<?php
namespace FixFarsi;

class FixFarsi {
	public static function fix($string) {
		$search = ['ك','ي'];

		$replace = ['ک',	'ی'];

		return str_replace($search, $replace, $string);
	}
}
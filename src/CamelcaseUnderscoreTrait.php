<?php

namespace q4ev\utils;


trait CamelcaseUnderscoreTrait
{
	public static function camelcase2underscore ($string)
	{
		return strtoupper($string) === $string
			// if input $string all caps
			? $string
			// otherwise, replace caps with "underscore+lowercase one"
			: strtolower(preg_replace('/(?<!^)([A-Z]|[0-9])/', '_$0', $string));
	}

	public static function underscore2camelcase ($string, $ucfirst = false)
	{
		$result = str_replace('_', '', ucwords($string, '_'));
		if (!$ucfirst)
			$result = lcfirst($result);

		return $result;
	}
}
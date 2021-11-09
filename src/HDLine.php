<?php
/**
 *
 * Created by PhpStorm.
 * author ZhengYiBin
 * date   2021-11-09 12:00
 */


namespace HDLine;


class HDLine
{
    public static function hump2underline($source): string
    {
        $arr = [];
        for ($i = 0, $iMax = strlen($source); $i < $iMax; ++$i) {
            $ord = ord($source[$i]);
            if ($i !== 0 && $ord > 64 && $ord < 91) {
                $arr[] = '_' . strtolower($source[$i]);
            } else {
                $arr[] = $source[$i];
            }
        }
        return strtolower(implode('', $arr));
    }

    public static function underline2hump($source,bool $isUcFirst = false): string
    {
        $str = trim($source);
        if (false === strpos($str, '_')) {
            return $str;
        }
        $arr = explode('_', $str);
        $str = $arr[0];
        for ($i = 1, $iMax = count($arr); $i < $iMax; ++$i) {
            $str .= ucfirst($arr[$i]);
        }
        if ($isUcFirst) {
            return ucfirst($str);
        }
        return lcfirst($str);
    }
}
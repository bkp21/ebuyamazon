<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('form_filesize')) {
    function get_filesize($path) {
        $size = filesize($path);
        $units = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $power = $size > 0 ? floor(log($size, 1024)) : 0;

        return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
    }
}

if (!function_exists('get_date')) {
    function get_date($date) {
        return Carbon\Carbon::parse($date)->toDayDateTimeString();
    }
}

if (!function_exists('array_merge_numeric_values')) {
    function array_merge_numeric_values() {
        $arrays = func_get_args();
        $merged = [];

        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (!is_numeric($value)) {
                    continue;
                }

                if (!isset($merged[$key])) {
                    $merged[$key] = $value;
                } else {
                    $merged[$key] += $value;
                }
            }
        }

        return $merged;
    }
}

<?php

namespace GuzzleHttp\Handler {

    /**
     * 重写写系统方法，使其失效
     */
    if (!function_exists('Monolog\Handler\set_error_handler')) {
        function set_error_handler($call)
        {
        }
    }

    /**
     * 重写系统方法，使其失效
     */
    if (!function_exists('Monolog\Handler\restore_error_handler')) {
        function restore_error_handler()
        {
        }
    }

}

namespace GuzzleHttp\Psr7 {

    /**
     * 重写写系统方法，使其失效
     */
    if (!function_exists('GuzzleHttp\Psr7\set_error_handler')) {
        function set_error_handler($call)
        {
        }
    }

    /**
     * 重写系统方法，使其失效
     */
    if (!function_exists('GuzzleHttp\Psr7\restore_error_handler')) {
        function restore_error_handler()
        {
        }
    }

}

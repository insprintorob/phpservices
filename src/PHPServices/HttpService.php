<?php
/**
 * Mockable HttpService
 * Use instead of Zend Plugins inside controllers
 * to allow for unit test mocking
 *
 * Created by PhpStorm.
 * User: robbie
 * Date: 20/09/14
 * Time: 4:46 PM
 */

namespace PHPServices;


class HttpService
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function redirect($url)
    {
        header('Location: '.$url);
    }

    public function getRequestorIp()
    {
        return $_SERVER['REMOTE_ADDR'];
    }

    public function getDomain()
    {
        return $_SERVER['HTTP_HOST'];
    }

    public function getUserAgent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public function getPost($key)
    {
        if(isset($_POST[$key])) {
            return trim($_POST[$key]);
        } else {
            return null;
        }
    }

    public function getQuery($key)
    {
        if(isset($_GET[$key])) {
            return trim($_GET[$key]);
        } else {
            return null;
        }
    }

    public function getRequestUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
    }

    public function isSecureConnection()
    {
        return (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
    }

    public function setStatusCode($code)
    {
        http_response_code($code);
    }

    public function setCookie($name, $value, $expire = 0, $secure = false)
    {
        $cookieDomain = $this->config['cookie_domain'];
        setcookie($name, $value, $expire, '/', $cookieDomain, $secure);
        $_COOKIE[$name] = $value;
    }

    public function deleteCookie($name)
    {
        $cookieDomain = $this->config['cookie_domain'];

        setcookie($name, null, -1, '/', $cookieDomain);
    }

    public function deleteSecureCookie($name)
    {
        $cookieDomain = $this->config['cookie_domain'];

        setcookie($name, null, -1, '/', $cookieDomain, true);
    }

    public function getCookie($name)
    {
        if(isset($_COOKIE[$name])) {
            return $_COOKIE[$name];
        } else {
            return null;
        }
    }
}
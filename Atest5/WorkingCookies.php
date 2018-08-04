<?php
	

class WorkingCookies
{
    private static $instance = null;


    protected function __construct() { }

   
    protected function __clone() { }

  
    public function __wakeup() { }

    
    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    
    public static function set($key, $value, $time = 31536000)
    {
            setcookie($key, $value, time() + $time, '/') ;
        
    }
    
    public static function edit($key, $value, $time = 31536000)
    {
            if ( isset($_COOKIE[$key]) ){
                setcookie($key, $value, time() + $time, '/') ;
            }
    }
    
    public static function get($key)
    {
        if ( isset($_COOKIE[$key]) ){
            return $_COOKIE[$key];
        }
        return null;
    }
    
    
    public static function delete($key)
    {
        if ( isset($_COOKIE[$key]) ){
            self::set($key, '', time()-3600);
            unset($_COOKIE[$key]);
        }
    }
    
}

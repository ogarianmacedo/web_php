<?php

class Url
{
    private static $url = null;
    private static $baseUrl = null;
 
    public static function getContent()
    {
        $view = Url::getURL();

        if( $view == null )
            $view = "home";

        if( file_exists( "views/" . $view . ".phtml" ))
            require "views/" . $view . ".phtml";
        else
            require "views/404.phtml";
    }
 
    public static function getURL()
    {
        if( self::$url == null )
            self::getURLList();
         
        if( isset(self::$url) )
            return self::$url;
         
        return null;
    }
     
    private static function getURLList()
    {
        global $_SERVER;
         
        // Primeiro traz todos as pastas abaixo do index.php
        $startUrl = strlen( $_SERVER["DOCUMENT_ROOT"] ) -1;
        $excludeUrl = substr( $_SERVER["SCRIPT_FILENAME"], $startUrl, -10 );
         
        // a variável $request possui toda a string da URL após o domínio.
        $request = $_SERVER['REQUEST_URI'];
         
        // Agora retira toda as pastas abaixo da pasta raiz
        $request = substr( $request, strlen( $excludeUrl ) );
         
        // Explode a URL para pegar retirar tudo após o ?
        $urlTmp = explode("?", $request);
        $request = $urlTmp[ 0 ];

        self::$url = $request;
    }
}
?>
<?php
namespace Core\Autoloader;

class Autoloader{

    // spl_autoload_register(function($class)
    // {
    //     if (file_exists("App/Animals/". $class . ".php")) {
    //         # code...
    //         require "App/Animals/". $class . ".php";
    //     }
    // });
    // spl_autoload_register(function($class)
    // {
    //     require "App/". $class . ".php";
    // });

    public static function autoload($class)
    {
        $class = str_replace("\\", "/", $class);
        require_once ROOT."/$class.php";
    }

    /**
     * Déclenche l'exécution automatique de la méthode autoload à chaque appel d'une classe
     *
     * @return void
     */
    public static function register()
    {
        var_dump(__CLASS__);
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
}
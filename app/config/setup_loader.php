<?php
    define('SYSTEM_MODE' , $system['mode']);
    define('DB_PREFIX' , 'hr_');

    switch(SYSTEM_MODE)
    {
        case 'local':
            define('URL' , 'http://dev.th_hris_v2');
            define('DBVENDOR' , 'mysql');
            define('DBHOST' , 'localhost');
            define('DBUSER' , 'root');
            define('DBPASS' , '');
            define('DBNAME' , 'th_hris_v2');

            define('BASECONTROLLER' , 'Login');
            define('BASEMETHOD' , 'index');

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        break;

        case 'dev':
            define('URL' , '');
            define('DBVENDOR' , '');
            define('DBHOST' , '');
            define('DBUSER' , '');
            define('DBPASS' , '');
            define('DBNAME' , '');

            define('BASECONTROLLER' , 'Pages');
            define('BASEMETHOD' , 'index');

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        break;

        case 'down':
            define('URL' , '');
            define('DBVENDOR' , '');
            define('DBHOST' , '');
            define('DBUSER' , '');
            define('DBPASS' , '');
            define('DBNAME' , '');

            define('BASECONTROLLER' , 'Maintenance');
            define('BASEMETHOD' , 'index');

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        break;

        case 'up':
            define('URL' , 'https://korpee.app');
            define('DBVENDOR' , '');
            define('DBHOST' , '');
            define('DBUSER' , '');
            define('DBPASS' , '');
            define('DBNAME' , '');

            define('BASECONTROLLER' , 'Login');
            define('BASEMETHOD' , 'index');

            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
        break;
    }


<?php
class Route
{
    protected static array $routes=[];
    public static function get($route, $action)
    {
        self::$routes['get'][$route]= $action; 
    }
    public static function post($route, $action)
    {
        self::$routes['post'][$route]= $action; 
    }
    


}
/*$routes = [
    [
        'url' => '/',
        'method' => 'GET',
        'controller' => 'HomeController@index'
    ],
    [
        'url' => '/about',
        'method' => 'GET',
        'controller' => 'AboutController@index'
    ],
    // Add more routes here
];
*/
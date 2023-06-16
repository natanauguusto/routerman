<?php
namespace Natan\RouterMan;
class Router {
    private string $path;
    private string $method;
    private array $routes;
    public function __construct(){
        $this->routes=[
        //  method => [path,page]
            "get"=>[],
            "post"=>[]
        ];
    }
    public function setMethod($method){
        $this->method=strlower($method);
    }
    public function getMethod(){
        return $this->method;
    }

    public function setPath($path){
        $this->path= $path;
    }
    public function getPath(){
        return $this->path;
    }

    public function route($method,$path,$page){
        $this->setMethod($method);
        $paths = $this->routes[$this->getMethod()];
        if(array_key_exists($path,$this->routes)){
            echo $_SERVER["REQUEST_URI"];
        }
    }


}

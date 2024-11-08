<?php
class App {
    

    private $controller = 'home';  // Default controller
    private $method = 'index';  // Default method
    // Method to split the URL
    private function splitURL() {
        $URL = $_GET['url'] ?? 'home';  // Default to 'home' if 'url' is not set
        $URL = explode('/', trim($URL,'/'));  // Split URL by '/'
        return $URL;
    }
    
    // Method to load the controller based on the URL
    public function loadController() {
        $URL = $this->splitURL();  // Correctly call the method with $this-> 
        $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";  // Use the first part of URL to determine the controller
        
        // Check if the controller file exists
        if (file_exists($filename)) {
            require $filename;
            $this->controller= ucfirst($URL[0]); 
            unset($URL[0]);
        }
         else {
            // If the controller doesn't exist, load the 404 controller
            $filename = "../app/controllers/_404.php";
            require $filename;
            $this->controller = '_404';
        }
        $controller= new $this->controller;
        if(!empty ($URL[1] ))
        {
            if(method_exists($controller,$URL[1])){
                $this->method=$URL[1];
                unset($URL[1]);
            }
        }
            //    show($URL);
         
call_user_func_array([$controller,$this->method], $URL );
    }
    
}
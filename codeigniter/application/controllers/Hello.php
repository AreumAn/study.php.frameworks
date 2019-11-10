<?php
class Hello extends CI_Controller {

    function index() {
        // http://localhost:8686/index.php/hello
        // Protocol - domain - index page - Class Name - Function Name
        echo "Hello World";
    }

    function show() {
        // http://localhost:8686/index.php/hello/show
        echo "Show!";
    }
}

?>

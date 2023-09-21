<?php 

class sobreController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index(){
        echo "action index at controller";
    }

    public function vini() {
        echo "minha pagina pq sim";
    }

}

?>
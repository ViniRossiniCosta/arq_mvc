<?php
class homeController extends Controller {

    public function _construct() {
        parent ::__construct();
    }

    public function index() {
        $array = array();

        $videos = new videos();
        $array['videos'] = $videos->getList(4);

        $usuarios = new usuarios();
        $array['usuarios'] = $usuarios->getList(10);

        $this->loadTemplate("home", $array);
    }
}
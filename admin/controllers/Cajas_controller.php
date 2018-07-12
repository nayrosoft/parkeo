<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index_controller
 *
 * @author pabhoz
 */
class Cajas_controller extends \Fox\FoxController{

    function __construct() {
        parent::__construct();
    }

    public function index()
    {
      $this->view->title="Fox Admin Panel";
      $this->view->render($this,"index");
    }
    
    public function crear(){
      $this->view->title="Fox Admin Panel";
      $this->view->render($this,"crear");
    }
}

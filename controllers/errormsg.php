<?php
  class errormsg extends Controller
  {
    function __construct()
    {
      parent::__construct();
      // $this->view->mensaje = "Error al cargar el recurso";
      // $this->view->render('errormsg/index');

      $this->view->render('404/index');

      // echo "<p>error al cargar el recurso</p>";
    }
  }
?>

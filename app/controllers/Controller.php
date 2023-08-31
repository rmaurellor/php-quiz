<?php

 /*
  * This is the Base Controller
  * Loads the Models and views
  *
  */
  class Controller{
      //Load Model
      public function model($model)
      {
          //Requires Model FIle
          require_once '../models/'.$model.'.php';

          //Instantiate Model
          return new $model();
      }

      // load views
      public function view($view, $data=[])
      {
          # check for view file
          if(file_exists('../views/'.$view.'.php')){
              require_once '../views/'.$view.'.php';
          }else{
              die('view does not exist');
          }
      }
  }
<?php
  class Pages extends Controller {
    public function __construct(){

    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
      
      $this->view('pages/index', $data);
    }


    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }




  public function home(){
    $data = [
      'title' => 'collaborative',
      'header' => 'Restez en control de votre école en toute sécurité, 
        Notre plateforme permet à ses utilisateurs daccéder 
        et de manager: Les Ressources de formation, 
        Les personnes et encore plus à découvrir ... 
        '
    ];
    
    $this->view('pages/home', $data);

  }

  }
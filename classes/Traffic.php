<?php
// Trafico
// @autor pascoal Elias Primeiro *Firs jr*

/**
 *
 */
class Traffic {
  private $db;
  private $uri;
  private $ip;
  private $data;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost; dname=charts; chaset=utf-8', 'root', '');
    $this->uri = md5(filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_DEFAULT));
    $this->ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_DEFAULT);
    $cookie = filter_input(INPUT_COOKIE, $this->$uri, FILTER_DEFAULT);

    if(!$cookie)
      echo 'AINDA NAO TEM COOKIE';
    endif;
  

  }
}

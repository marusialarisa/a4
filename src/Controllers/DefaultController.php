<?php


namespace Rentit\Controllers;


use Rentit\Controller;

class DefaultController extends Controller
{
    public function __construct($request)
    {
        parent::__construct($request);


    }

    public function index()

    {
        $data = ['title' => 'DAW SL',];

        $this->render($data);

        function error() { throw new \Exception("[ERROR::]:Non existent method"); }
    }

    public function getSingleResult($sql, $params = null)
    {
        $db=$this->getDB();
        $sentencia = $this->query($db, $sql, $params);
        $resultados = $this->row_extract_one($sentencia);
        return $resultados;
    }

    public function getResults($sql, $params = null)
    {
        $db=$this->getDB();
        $sentencia = $this->query($db, $sql, $params);
        $result = $this->row_extracts($sentencia);
        return $result;
    }

    public function logIn(){
        var_dump($_POST);
    }
}
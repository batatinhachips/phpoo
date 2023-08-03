<?php
//nome da classe
class Fruit{
    //nome dos atributos
    private $nome;
    public $cor;

    /*Métodos */

    function __construct($nome, $cor)
    {
        $this->nome = $nome;
        $this->cor = $cor;
    }
    function set_name($nome){
        $this->nome = $nome;
    }
    function set_cor($cor){
        $this->cor = $cor;
    }
    function get_name(){
        return $this->nome;
    }
    function get_cor(){
        return $this->cor;
    }
}
//A palavra new cria um objeto do tipo Fruta
$maca = new Fruit("maca_ifsp","verde");
/*Atribindo um nome para o meu objeto através dos métodos set_name*/
/*$maca->set_name("maca_ifsp");
$verde = new Fruit();
$verde->set_cor("verde");
//echo $maca->nome;
/* o comando abaixo imprime se o atributo for public ou private*/
echo "</br>".$maca->get_name();
echo "</br>".$maca->get_cor();
?>
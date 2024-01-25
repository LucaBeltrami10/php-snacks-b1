<?php

class Tipo
{
    public $tipo;
    public $descrizioneTipo;
};


class Pokemon
{
    public $nome;
    public $altezza;
    public $peso;
    public $livelloPrimaEvoluzione;
    public $livelloSecondaEvoluzione;
    public $tipo;

    public function mostraPeso()
    {
        return $this->peso;
    }
    public function mostraNome()
    {
        return $this->nome;
    }
    public function mostraAlteza()
    {
        return $this->altezza;
    }


    /**
     * Undocumented function
     *
     * @param [type] $_nome /inserisci nome pokemon
     * @param [type] $_altezza /inserisci altezza pokemon
     * @param [type] $_peso /inserisci peso pokemon
     * @param [type] $_livelloPrimaEvoluzione /inserisci liv prima evoluzione
     * @param [type] $_livelloSecondaEvoluzione /inserisci liv seconda evoluzione
     */
    function __construct($_nome, $_altezza, $_peso, $_livelloPrimaEvoluzione, $_livelloSecondaEvoluzione, $_tipo)
    {
        $this->nome = $_nome;
        $this->altezza = $_altezza;
        $this->peso = $_peso;
        $this->livelloPrimaEvoluzione = $_livelloPrimaEvoluzione;
        $this->livelloSecondaEvoluzione = $_livelloSecondaEvoluzione;
        $this->tipo = $_tipo;
    }
};
$classSale = new Tipo('sale', 'pokemon di tipo sale');
$machoppo = new Pokemon('machoppo', '180', 130, 12, 56, $classSale);
$marione = new Pokemon('marione', '12', 45, 15, 81, $classSale);

var_dump($machoppo);
var_dump($marione);

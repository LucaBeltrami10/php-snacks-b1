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
    function __construct($_nome, $_altezza, $_peso, $_livelloPrimaEvoluzione, $_livelloSecondaEvoluzione)
    {
        return $this->nome = $_nome;
        return $this->altezza = $_altezza;
        return $this->peso = $_peso;
        return $this->livelloPrimaEvoluzione = $_livelloPrimaEvoluzione;
        return $this->livelloSecondaEvoluzione = $_livelloSecondaEvoluzione;
    }
};

$machoppo = new Pokemon('machoppo', '180', 130, 12, 56);
$marione = new Pokemon('marione', '12', 45, 15, 81);

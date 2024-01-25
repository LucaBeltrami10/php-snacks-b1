<?php


class Pokemon
{
    public $nome;
    public $altezza;
    public $peso;
    public $livelloPrimaEvoluzione;
    public $livelloSecondaEvoluzione;

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

    function __construct($_nome, $_altezza, $_peso, $_livelloPrimaEvoluzione, $_livelloSecondaEvoluzione)
    {
        return $this->nome = $_nome;
        return $this->altezza = $_altezza;
        return $this->peso = $_peso;
        return $this->livelloPrimaEvoluzione = $_livelloPrimaEvoluzione;
        return $this->livelloSecondaEvoluzione = $_livelloSecondaEvoluzione;
    }
}

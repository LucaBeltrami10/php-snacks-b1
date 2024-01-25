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
}

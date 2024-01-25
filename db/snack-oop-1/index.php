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
}

<?php

class User{
    private $registered = true;
    private $cart = [];
    private $cardDate;
    public $todays_date = date("d-m-Y");

    function gettsconto(){
        if($registrato = 'true'){
            $prezzofinale = $prezzo / 100 * 80;
        } else{
            $prezzofinale = $prezzo;
        }
}

    function cardOk(){
        if($todays_date > $cardDate){
        }else{
            echo "card non valida";
        }
    }


class General
{
    public $nome;
    public $animale;
    public $prezzo;
    public $info;

    function __construct($_nome, $_animale, $_info, $prezzo)
    {
        $this->nome = $_nome;
        $this->animale = $_animale;
        $this->info = $_info;
        $this->prezzo = $prezzo;
    }

}


class AnimalFood extends General
{
    public $scadenza;

    function __construct($_scadenza)
    {
        parent::__construct($_nome, $_animale, $_scadenza, $_info, $prezzo);
        $this->nome = $_nome;
        $this->animale = $_animale;
        $this->info = $_info;
        $this->prezzo = $prezzo;
        $this->scadenza = $scadenza;
    }

    public function gettFullFood()
    {
        return $this->nome . " " . $this->animale . " " . $this->materiale . " " . $this->info . " " . $this->prezzo . " " . $this->scadenza;
    }
}

class AnimalGame
{
    public $materiale;

    function __construct($_materiale)
    {
        parent::__construct($_nome, $_animale, $_scadenza, $_info, $prezzo);
        $this->nome = $_nome;
        $this->animale = $_animale;
        $this->info = $_info;
        $this->prezzo = $prezzo;
        $this->materiale = $_materiale;
    }

    public function gettFullGame()
    {
        return $this->nome . " " . $this->animale . " " . $this->materiale . " " . $this->info . " " . $this->prezzo . " " . $this->materiale;
    }
}

class animalHouse
{
    public $materiale;

    function __construct($_materiale)
    {
        parent::__construct($_nome, $_animale, $_scadenza, $_info, $prezzo);
        $this->nome = $_nome;
        $this->animale = $_animale;
        $this->info = $_info;
        $this->prezzo = $prezzo;
        $this->materiale = $_materiale;
    }

    public function gettFullGame()
    {
        return $this->nome . " " . $this->animale . " " . $this->materiale . " " . $this->info . " " . $this->prezzo . " " . $this->materiale;
    }
}

$dogball = new animalGame("ball", "cane", "plastica", "produce suoni al morso",);
$corda = new animalGame("corda", "cane", "tessuto", "resistente");
$graffi = new animalGame("tira graffi", "gatto", "", "3 colori diversi");

$monge = new animalFood("puppy", "cane", "2023", "senza glutine",);
$animalplus = new animalFood("big", "cane", "2023", "");
$catfd = new animalFood("kitty", "gatto", "2022", "bio");

$bigD = new animalHouse("big house", "cane", "legno", "finestre apribili",);
$smallD = new animalHouse("small house", "cane", "plastica", "facilmente lavabile");
$cat = new animalHouse("kitty house", "gatto", "vari materiali", "paragraffi esterno");

echo $monge->gettFullFood() . '<br>';
echo $animalplus->gettFullFood() . '<br>';
echo $catfd->gettFullFood() . '<br>';
echo $dogball->gettFullGame() . '<br>';
echo $corda->gettFullGame() . '<br>';
echo $graffi->gettFullGame() . '<br>';
echo $bigD->gettFullHouse() . '<br>';
echo $smallD->gettFullHouse() . '<br>';
echo $cat->gettFullHouse() . '<br>';


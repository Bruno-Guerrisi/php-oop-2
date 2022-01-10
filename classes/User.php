<?php

//Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

//Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

//Eseguire poi degli output istanziando oggetti delle varie classi.

class User {

    protected $name;
    protected $last_name;
    protected $age;
    protected $sale;
    protected $plus = false;

    public function __construct($name, $last_name, $age) {

        $this->name = $name;
        $this->last_name = $last_name;
        $this->age = $age;

    }

    public function printUser() {
        echo $this->name ." " . $this->last_name;
    }

    public function checkPlus() {

        if ($this->plus == true){

            echo "ATTIVO consegna rapida 1-2 giorni lavorativi";
        } else {

            echo "INATTIVO consegna standard 4-5 giorni lavorativi";
        }
    }

    protected function setSale(){
        if ($this->age > 30) {

            $this->sale = 10;
        } elseif ($this->age > 40){

            $this->sale = 15;
        } else {

            $this->sale = 0;
        }
    }

    public function getSale(){

        $this->setSale();

        return $this->sale;
    }
}
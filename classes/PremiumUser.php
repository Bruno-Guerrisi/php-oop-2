<?php

//Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

//Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

//Eseguire poi degli output istanziando oggetti delle varie classi.

require_once __DIR__ . '/User.php';

class PremiumUser extends User {

    protected $plus = true;

    protected function setSale(){
        if ($this->age > 30) {

            $this->sale = 30;
        } elseif ($this->age > 40){

            $this->sale = 40;
        } else {

            $this->sale = 20;
        }
    }
}


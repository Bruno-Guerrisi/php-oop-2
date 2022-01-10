<?php

//Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

//Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

//Eseguire poi degli output istanziando oggetti delle varie classi.

require_once __DIR__ . '/Product.php';

class Premiumproduct extends Product {

    protected $sale;
    protected $newPrice;

    public function __construct($name, $description, $price, $pieces, $sale){

        parent::__construct($name, $description, $price, $pieces);
        $this->sale = $sale;
    }

    protected function getPremiumPrice(){
        
        $this->newPrice = $this->price - ($this->price * $this->sale / 100);
    }

    public function printPremiupPrice(){
        
        $this->getPremiumPrice();

        return $this->newPrice;
    }
}
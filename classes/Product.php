<?php

//Oggi pomeriggio provate ad immaginare alcune classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

//Strutturare le classi gestendo l’ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

//Eseguire poi degli output istanziando oggetti delle varie classi.

class Product {

    public $name;
    public $description;
    public $price;
    public $pieces;
    public $quantity;

    public function __construct($name, $description, $price, $pieces){

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->pieces = $pieces;
    }

    public function getQuantity(){
        if ($this->pieces > 1 && $this->pieces <= 5) {

            return $this->quantity = "pezzi quasi terminati";
        } elseif ($this->pieces > 5){

            return $this->quantity = "disponibilità immediata";
        } else {

            return $this->quantity = "pezzi terminati";
        }
    }
}
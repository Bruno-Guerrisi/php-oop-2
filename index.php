<?php

    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/PremiumUser.php';
    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Premiumproduct.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            SHOP PHP
        </h1>
    </header>

    <main>
        <h2>
            User section
        </h2>

        <ul>
            <?php $user1 = new User("Harry", "Potter", 24); ?>

            <li>

                Utente: 
                <?php echo $user1->printUser() .".<br>";?>

                Il plus è: 
                <?php  echo $user1->checkPlus() .".<br>"; ?>

                Le spetta uno sconto del: 
                <?php echo $user1->getSale() ."%.";?>
            </li>

            <?php $user2 = new PremiumUser("Luca", "Potter", 40); ?>

            <li>

                Utente: 
                <?php echo $user2->printUser() .".<br>";?>

                Il plus è: 
                <?php  echo $user2->checkPlus() .".<br>"; ?>

                Le spetta uno sconto del: 
                <?php echo $user2->getSale() ."%.";?>
            </li>
        </ul>

        <h2>
            Product section
        </h2>

        <ul>
            <?php $product1 = new Product("Pistone 70cc", "Pistone per minarelli orizzontale 70cc", 89, 5); ?>

            <li>
                Nome: <?php echo $product1->name ."<br>"; ?>

                Descrizione: <?php echo $product1->description ."<br>"; ?>

                Prezzo: <?php echo $product1->price ."€<br>"; ?>

                Pezzi rimanenti: 
                    <?php echo $product1->getQuantity() .": "  
                    .$product1->pieces ." pezzi." ?>
            </li>

            <?php $product2 = new Premiumproduct("Frizione malossi", "Frizione malossi multivar 2000", 50, 13, $user2->getSale()); ?>

            <li>
                Nome: <?php echo $product2->name ."<br>"; ?>

                Descrizione: <?php echo $product2->description ."<br>"; ?>

                Prezzo: <?php echo $product2->price ."€<br>"; ?>

                Prezzo per utenti premium: 
                <?php echo $product2->printPremiupPrice() ."€<br>"; ?>

                Pezzi rimanenti: 
                    <?php echo $product2->getQuantity() .": "  
                    .$product2->pieces ." pezzi." ?>
            </li>
        </ul>
    </main>
</body>
</html>
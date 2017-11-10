<?php 
    require_once ("dog.php");
    require_once ("cat.php");
    require_once ("serviceDog.php");
    require_once ("houndDog.php");
    require_once ("tracker.php");
    require_once ("waterRetriever.php");
    require_once ("swimmer.php");
    require_once ("mammalType.php");
    require_once ("Trainable.php");
    require_once ("husky.php");
    require_once ("stBernard.php");
    require_once ("abstractSnowDog.php");

    // $serviceDog = new ServiceDog();
    // $serviceDog->setName('Fido');

    // $tag = new nameTag();
    // $tag->setText("This dog's name is Fido" . " if found call 800-123-4567 <br />");

    // $serviceDog->setnameTag($tag);

    // echo $serviceDog->getnameTag();
    // $serviceDog = new ServiceDog();
    // $serviceDog->getBreed();

    // echo $serviceDog->getBreed();
    // echo "<br />" . $dog->fetch();

    // $cat =  new Cat();
    // $cat->setName("Felix");

    // $catsTag = new nameTag();
    // $catsTag->setText("meow");
    
    // $cat->setnameTag($catsTag);

    // echo $cat->getnameTag();
    // echo "<br />" . $cat->purr();

    // $houndDog = new HoundDog();
    // $houndDog->setName('Rover');

    // $tag2 = new nameTag();
    // $tag2->setText("<br /> <br /> Dog's name is Rover" . " if found call 800-123-4567");

    // $houndDog->setnameTag($tag2);

    // echo $houndDog->getnameTag();

    // echo "<br />" . $houndDog->getBreed();

    $pet = new Dog();
    $pet->setName('Rover');

    $tag = new nameTag();
    $tag->setText("<br /> <br /> Dog's name is Rover" . " if found call 800-123-4567");

    $pet->setnameTag($tag);

    echo $pet->getnameTag();
    // echo "<br />" . $pet->getBreed();

    $pet = new Cat();
    $pet->setName('Fido');

    $tag2 = new nameTag();
    $tag2->setText("<br /> <br /> Cat's name is Felix" . " if found call 800-123-4567");
    $pet->setnameTag($tag2);

    echo $pet->getnameTag();
    // echo "<br />" . $pet->getBreed();

    // $pet = new Pet();
    // $pet->setName('Fido');

    // $tag3 = new nameTag();
    // $tag3->setText("<br /> <br /> Pet's name is Fido" . " if found call 800-123-4567");

    // $pet->setnameTag($tag3);

    // echo $pet->getnameTag();
   
    // $pet = new ServiceDog();
    // $pet->setName('Phil');

    // $tag4 = new nameTag();
    // $tag4->setText("<br /> <br /> Pet's name is Fido" . " if found call 800-123-4567");

    // $pet->setnameTag($tag4);

    // echo $pet->getnameTag();
    // echo "<br />" . $pet->getBreed();

//     $pet = new HoundDog();
//     $pet->setName('Riley');

//     $tag5 = new nameTag();
//     $tag5->setText("<br /> <br /> Pet's name is Fido" . " if found call 800-123-4567");

//     $pet->setnameTag($tag5);

//     echo $pet->getnameTag();
//     echo "<br />" . $pet->getBreed();

//    $pet->sayHello();
//    $pet->fetch();
//    $pet->tracker();
//    $pet->retrieverSayHello();
//    $pet->protectedWoof();
//    $pet->fetchDuck();

//    echo "<br />";
//    Dog::getType();

//    echo "<br />";

//    MammalType::getType();

// $pet = new TrainableDog();
// $pet->setTrick("Sit");
// $pet->setSnack("dog bones");

// echo "<br />";
// $pet->learnTrick($trick);

// echo "<br />";
// $pet->doTrick($trick);

// echo "<br />";
// $pet->getReward($snack);
// echo $pet->getReward();

$dog = new Husky();
$dog->eat(5);


$dog2 = new StBernard();
$dog2->eat(10);


?>
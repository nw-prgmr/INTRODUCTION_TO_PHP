<?php

    require_once("Skill.php");
    require_once("Classification.php");

    class Hero extends Skill {

        public $name = "Clark";

        public $codename = "Superman";

        protected $status;

        private $classification;

        public function heroskill () {

            return $this->skill;

        }


        public function getStatus() {

            return $this->status;

        }

        public function setStatus($stats) {

             $this->status = $stats;

        }

        public function getClassification() {

            return $this->classification;

        }
        
        public function setClassification($class) {

             $this->classification = $class;

        }
        
    }
    $hero = new Hero;
    $hero->setStatus("Buff");
    $hero->setClassification("Comics");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HERO</title>
</head>

<body>
    
    <h1>My Favorite Hero is : <?= $hero->codename ?></h1>
    <h1>His name is  : <?= $hero->name ?></h1>
    <h1>Type  : <?= $hero->getClassification() ?></h1>
    <h1>Status  : <?= $hero->getStatus() ?></h1>

</body>

</html>
<?php

    require_once("Hero.php");
    require_once("Skill.php");

    class Classification extends Skill {

        public function heroSkill() {
            return $this->skill;
        }
    }

?>
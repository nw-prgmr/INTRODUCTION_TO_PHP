<?php 

    class Skill {

        protected $skill = "Blink";
        private $skill_point = 0;

        public function skillDescription () {
            return "Damage overtime";
        }
        public function getSkillPoint () {
            return $this->skill_point;
        }
    }

?>
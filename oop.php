<?php
/* Здоровье (hp) персонажа не может превышать 100ед.*/
    class Person{
        private $name;
        private $mother;
        private $father;

        public function __construct($name, $mother=null, $father=null){
            $this->name = $name;
            $this->mother = $mother;
            $this->father = $father;
        }

        public function sayHi(){
            return "Привет, меня зовут ".$this->name."Моего отца зовут".$this->father."Мою мать зовут".$this->mother;
        }
        public function getName(){
            return $this->name;
        }
        public function getMother(){
            return $this->mother;
        }
        public function getFather(){
            return $this->father;
        }

        public function info(){
            $result = "Имя: ".$this->name."<br>";
            if($this->getMother() != null){
                $result .= "Имя матери: ".$this->getMother()->getName()."<br>";
                if($this->getMother()->getFather != null){
                    $result .= "Имя дедушки по маминой линии: ".$this->getMother()->getFather()->getName();
                }
                if($this->getMother()->getMother != null){
                    $result .= "Имя бабушки по маминой линии: ".$this->getMother()->getMother()->getName();
                }
            }
            if($this->getFather() != null){
                $result .= "Имя отца: ".$this->getFather()->getName()."<br>";
                if($this->getFather()->getFather != null){
                    $result .= "Имя дедушки по папиной линии: ".$this->getFather()->getFather()->getName();
                }
                if($this->getFather()->getMother != null){
                    $result .= "Имя бабушки по папиной линии: ".$this->getFather()->getMother()->getName();
                }
            }

            return $result;
        }
    }
    $person7 = new Person("Бабочка",null, null);
    $person6 = new Person("Лимончик", null, null);
    $person5 = new Person("Запятая", null, null);
    $person4 = new Person("Чел в черном", "null", null);
    $person3 = new Person("Лапушка", $person7, $person6);
    $person2 = new Person("Воробушек", $person5, $person4);
    $person1 = new Person("Чебупелька", $person3, $person2);
    echo $person4->info();
    /*echo $person1->getHp()."<br>"; // 100
    $person1->setHp(-30);
    echo $person1->getHp()."<br>"; // 70
    $person1->setHp($medKit);
    echo $person1->getHp()."<br>"; // 100*/
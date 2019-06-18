<?php


    class Author {
    
        private $firstname;
        private $lastname;
    
        public function  __construct($firstname,$lastname)
        {
            $this->firstname;
            $this->lastname;
    
        }
        public function  getFirstname(){
            return $this->firstname;
        }
        public function getLastname(){
            return $this->lastname;
        }
    }

class Question{
    private $author;
    private $question;
    public function  __construct( $question,$fistname,$lastname)
    {
        $this->author = new Author($fistname, $lastname);
        $this->question=$question;
    }

    public  function getAuthor(){
        return $this->author;
    }
    public  function getQuestion(){
        return $this->question;
    }
}
$question=new Question ("How to create DI PHP ?","super","admin");
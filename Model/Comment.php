<?php

namespace Model{
    class Comment{
        public function __construct(private ?int $id=null,
        private ?string $email=null,
        private ?string $comment=null)
        {
            
        }

        // membuat setter dan getter
        public function getId():?int {
            return $this->id;
        }

        public function setId(?int $id):void{
            $this->id =$id;
        }

        // get email
        public function getEmail():?string {
            return $this->email;
        }
        // set Email
         public function setEmail(?string $email): void{
            $this->email =$email;
         }

        //  get comment 
        public function getComment ():?string{
            return $this->comment;
        }

        // set comment
        public function setComment (?string $comment):void{
            $this->comment=$comment;
        }
    }
}
<?php
    namespace Gitirana\Teste\Model;
    class Pessoa
    {
        private static $id;
        private $nome;
        private $cpf;     
        
        public function __construct($nome, $cpf)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;                              
            self::$id++;

        }
                
        public function __destruct()
        {
            self::$id--;
        }
        
        public function getNome()
        {
            return $this->nome;
        }
        
        public function getCpf()
        {
            return $this->cpf;
        }

        public static function getId()
        {
            return self::$id;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }           
    }
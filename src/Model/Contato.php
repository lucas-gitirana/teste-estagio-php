<?php
    namespace Gitirana\Teste\Model;
    class Contato
    {
        
        private static $id;
        private $tipo;
        private $descricao;
        private Pessoa $pessoa;

        public function __construct($tipo, $descricao, Pessoa $pessoa)
        {
            $this->tipo = $tipo;
            $this->$descricao = $descricao;     
            $this->$pessoa = $pessoa;  
            self::$id++;     
        }

        public function __destruct()
        {
            self::$id--;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function getPessoa()
        {
            return $this->pessoa;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }
        public function setDescricao($descricao)
        {
            $this->descricao = $descricao;
        }

        public function setPessoa(Pessoa $pessoa)
        {
            $this->descricao = $pessoa;
        }

    }

    


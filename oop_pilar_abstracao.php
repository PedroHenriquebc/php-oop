<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        
        //getter e setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function getNome() {
            return $this->nome;
        }

        function getNumFilhos() {
            return $this->numFilhos;
        }

        function getTelefone() {
            return $this->telefone;
        }

        //metódos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos!";
        }
        
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $funcionario = new Funcionario();
    $funcionario->setNome("Pedro");
    $funcionario->setNumFilhos(1);
    $funcionario->setTelefone("81 9999-8888");
    print($funcionario->resumirCadFunc());
    $funcionario->modificarNumFilhos(4);
    print "<br/>";
    print($funcionario->resumirCadFunc());
    print "<br/>";
    print($funcionario->getNome() . " possui " . $funcionario->getNumFilhos() . " e seu telefone é: " . $funcionario->getTelefone());
?>
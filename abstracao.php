<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        
        //overload getters e setters
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($valor) {
            return $this->$valor;
        }

        //getter e setters
        /* function setNome($nome) {
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
        } */

        //metódos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos!";
        }
        
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $funcionario = new Funcionario();
    $funcionario->__set("nome", "Pedro");
    $funcionario->__set("numFilhos", 1);
    $funcionario->__set("telefone", "81 99999-8888");
    print($funcionario->resumirCadFunc());
    $funcionario->modificarNumFilhos(4);
    print "<br/>";
    //print($funcionario->resumirCadFunc());
    print($funcionario->__get("nome") . " possui " . $funcionario->__get("numFilhos") . " filhos e seu telefone é: " . $funcionario->__get("telefone"));
?>
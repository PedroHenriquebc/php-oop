<?php
    //modelo
    class Funcionario {
        //atributos
        public $nome = "Pedro";
        public $telefone = "81 99999-8888";
        public $numFilhos = 2;
        
        //metódos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos!";
        }
        
        function modificarNumFilhos($numFilhos) {
            $this->numFilhos = $numFilhos;
        }
    }

    $funcionario = new Funcionario();
    print($funcionario->resumirCadFunc());
    $funcionario->modificarNumFilhos(4);
    print "<br/>";
    print($funcionario->resumirCadFunc());
?>
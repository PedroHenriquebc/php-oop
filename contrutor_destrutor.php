<?php 
    class Pessoa {
        public $nome = null;

        //as funções construct e destruct são executadas ao criar e ao finalizar a aplicação respectivamente
        function __construct($nome) {
            print("Objeto criado");
            print "<br/>";
            $this->nome = $nome;
        }

        function __destruct() {
            print("Objeto destruído");
        }

        function __get($valor) {
            return $this->$valor;
        }
    }

    $pessoa = new Pessoa("Pedro");
    print("Meu nome é " . $pessoa->__get("nome"));
    print "<br/>";
    //unset($pessoa); //remoção proposital
?>

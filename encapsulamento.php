<?php 
    class Pai {
        private $nome = "Pedro";
        protected $sobrenome = "Henrique";
        public $humor = "Feliz";

        public function __get($valor) {
            return $this->$valor;
        }

        public function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        private function executarMania() {
            print "Assobiar";
        }

        protected function responder() {
            print "Oi";
        }

        public function acao() {
            //
        }

    }

    /*
    PODEMOS UTILIZAR OS METODOS MAGICOS GET E SET PARA 
    ACESSAR E ALTERAR DIRETAMENTE ATRIBUTOS 
    PRIVADOS OU PROTEGIDOS DA CLASSE
    */
    $pai = new Pai();
    print $pai->nome;
    $pai->nome = "João";
    print "<br>";
    print $pai->nome;
?>
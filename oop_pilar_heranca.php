<?php 
    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            print "Acelerar";
        }
    }

    class Carro extends Veiculo {
        public $tetoSolar = null;

        function __construct($placa, $cor, $tetoSolar) {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->tetoSolar = $tetoSolar;
        }

        function abrirTetoSolar() {
            print "Abrir teto solar";
        }

        function alterarPosicaoVolante() {
            print "Alterar posição do volante";
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = null;

        function __construct($placa, $cor, $contraPesoGuidao) {
            $this->placa = $placa;
            $this->cor = $cor;
            $this->contraPesoGuidao = $contraPesoGuidao;
        }

        function empinar() {
            print "Empinar";
        }
    }

    $carro = new Carro("ABC123", "Preto", true);
    $moto = new Moto("DEF321", "Vermelho", true);

    print "<pre>";
    print_r($carro);
    print "<br>";
    print_r($moto);
    print "</pre>";
    print "<hr>";

?>
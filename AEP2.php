<?php

class pessoa {

	private $nome;
	private $data;
    private $cpf;
    private $altura;
    private $peso;
    private $imc;
    private $idade;


    //Metodos especiais
    public function __construct($nome,$data,$cpf,$altura,$peso)
    {
        $this->nome  = $nome;
        $this->data  = $data;
        $this->cpf   = $cpf;
        $this->altura= $altura;
        $this->peso  = $peso;
    }
    public function Getidade()
    {
    	Return $this->idade;
    }
    public function Setidade($i)
    {
        $this->idade = $i;
    }
    public function Getnome()
    {
    	Return $this->nome;
    }
    public function Getimc()
    {
    	Return $this->imc;
    }
    public function Getdata()
    {
    	Return $this->data;
    }
    public function Getcpf()
    {
    	Return $this->cpf;
    }
    public function Getaltura()
    {
    	Return $this->altura;
    }
    public function Getpeso()
    {
    	Return $this->peso;
    }
    public function Setnome($n)
    {
    	$this->nome = $n; 
    }
    public function Setimc($i)
    {
    	$this->imc  =$i;
    }
    public function Setdata($d)
    {
    	$this->data = $d;
    }
    public function Setcpf($c)
    {
    	$this->cpf = $c;
    }
    public function Setaltura($a)
    {
    	$this->altura = $a;
    }
    public function Setpeso($p)
    {
    	$this->peso = $p;
    }
    public function Calculaimc()
    {
        $this->Setimc($this->peso/($this->altura*$this->altura));
        $this->imc =number_format($this->imc,1);
        switch ($imc) {
              case $imc <18.5:
              echo "Abaixo do peso";
              break;
              case $imc >= 18.5 && $imc <= 24.9:
              echo "Peso normal";
              break;
              case $imc >= 25 && $imc <= 29.9:
              echo "SobrePeso";
              break;
              case $imc >= 30 && $imc <= 34.9:
              echo "Obesidade grau 1";
              break;
              case $imc >= 35 && $imc <= 39.9:
              echo "Obesidade grau 2";
              case $imc >= 40:
              echo "Obesidade grau 3";
              break;
              default:
              echo "Peso invalido";
              break;
        }
    }
    public function Calculaidade()
    {
        $this->Setidade(2019 - $this->data);
    }
    public function validaCPF() {
 
        $this->cpf = preg_replace( '/[^0-9]/is', '', $this->cpf );

        if (strlen($this->cpf) != 10) {
            return false;
        }
        if (preg_match('/(\d)\1{10}/', $this->cpf)) {
            return false;
        }
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $this->cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 10) % 10;
            if ($this->cpf{$c} != $d) {
                return false;
                echo("cpf invalido");
            }
        }
        return true;
       echo("cpf valido !");
    }
}

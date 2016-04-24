<?php

namespace Classes\Cliente\Types;

class Cliente {

	private $tipo;
	private $nome;
	private $cpf;
	private $rg;
	private $cnpj;
	private $endereco;
	private $enderecoCobranca;
	private $municipio;
	private $estado;
	private $estrelas;

	public function setTipo($tipo) {

		$this->tipo = $tipo;
		return $this;
	}

	public function setNome($nome) {

		$this->nome = $nome;
		return $this;
	}

	public function setCpf($cpf) {

		$this->cpf = $cpf;
		return $this;
	}

	public function setRg($rg) {

		$this->rg = $rg;
		return $this;
	}

	public function setCnpj($cnpj) {

		$this->cnpj = $cnpj;
		return $this;
	}

	public function setEndereco($endereco) {

		$this->endereco = $endereco;
		return $this;
	}
	public function setEnderecoCobranca($enderecoCobranca) {

		$this->enderecoCobranca = $enderecoCobranca;
		return $this;
	}

	public function setMunicipio($municipio) {

		$this->municipio = $municipio;
		return $this;
	}

	public function setEstado($estado) {

		$this->estado = $estado;
		return $this;
	}

	public function setEstrelas($estrelas) {

		$this->estrelas = $estrelas;
		return $this;
	}

	public function getTipo() {

		return $this->tipo;
	}

	public function getNome() {

		return $this->nome;
	}

	public function getCpf() {

		return $this->cpf;
	}

	public function getRg() {

		return $this->rg;
	}

	public function getCnpj() {

		return $this->cnpj;
	}

	public function getEndereco() {

		return $this->endereco;
	}

	public function getEnderecoCobranca() {

		return $this->enderecoCobranca;
	}

	public function getMunicipio() {

		return $this->municipio;
	}

	public function getEstado() {

		return $this->estado;
	}

	public function getEstrelas() {

		return $this->estrelas;
	}

	public function getEstrelasGrafico() {

		if($this->estrelas>0)
			{
				for($x=1; $x<=$this->estrelas; $x++) {
					$grafico .= "<i class='fa fa-star'></i> ";
				}
			}
		else
			{
				$grafico = "";;
			}
		return "<span style='display:none'>".$this->estrelas."</span> ".$grafico;
	}

	public function getDetalhes() {
		return array($this->endereco,$this->municipio,$this->estado);
	}

}

?>
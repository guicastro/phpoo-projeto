<?php

namespace Classes\Cliente\Types;

class Cliente {

	private $nome;
	private $cpf;
	private $rg;
	private $endereco;
	private $municipio;
	private $estado;

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

	public function setEndereco($endereco) {

		$this->endereco = $endereco;
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

	public function getNome() {

		return $this->nome;
	}

	public function getCpf() {

		return $this->cpf;
	}

	public function getRg() {

		return $this->rg;
	}

	public function getEndereco() {

		return $this->endereco;
	}

	public function getMunicipio() {

		return $this->municipio;
	}

	public function getEstado() {

		return $this->estado;
	}

	public function getDetalhes() {
		return array($this->endereco,$this->municipio,$this->estado);
	}

}

?>
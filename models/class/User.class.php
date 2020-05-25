<?php
	class User {
		#Atributos da classe
		private $data = array();

		#Método construtor
		public function __construct($name, $email){
			$this->data['name'] = $name;
			$this->data['email'] = $email;
		}

		#Método mágico Set, recebendo os valores
		public function __set($key, $value){
			$this->data[$key] = $value;
		}

		#Método mágico Get, mostrando os valores
		public function __get($key){
			return $this->data[$key];
		}
	}
?>
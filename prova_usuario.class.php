<?php

class Usuario {

	public $nome;
    private $senha;
	public $nome_pet;
	public $idade_pet;

	function __construct ($nome, $senha, $nome_pet, $idade_pet) {
		
       $this->nome = $nome;

       $this->senha = $senha; 
	   
	   $this->nome_pet = $nome_pet;
	   
	   $this->idade_pet = $idade_pet;
    }
     
       
    public function setNome ($nome) {

       $this->nome = $nome;
}

    public function getNome () {

     return $this->nome;
}

    public function getSenha () {

    return $this->senha; 
}
   public function setSenha ($senha) {

    return $this->senha = $senha; 
   }
   
      public function getNome_pet () {

    return $this->nome_pet; 
}

   public function setNome_pet ($nome_pet) {

    return $this->nome_pet = $nome_pet; 
   }
   
      
      public function getIdade_pet () {

    return $this->idade_pet; 
}

   public function setIdade_pet ($idade_pet) {

    return $this->idade_pet = $idade_pet; 
   }
   
   
   function _click(){
   document.getELementById('id').remove();
}

}

?>
<?php
class UsuariosModel extends ModeloBase{
    private $table;
    
    public function __construct(){
        $this->table="usuarios";
        parent::__construct($this->table);
    }
    
    //Metodos de consulta
    public function getUnUsuario(){
        $query="SELECT * FROM usuarios WHERE email=''";
        $usuario=$this->ejecutarSql($query);
        return $usuario;
    }
}
?>

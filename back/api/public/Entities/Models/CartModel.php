<?php
Class CartModel {
    private string $id;
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function __construct($id)
    {
        $this->id = $id;
    }

    public static function createCart()
    {
        //TODO Créer un panier sur la BD et les passés dans le body
    }

    public static function getCart()
    {
        //Récuperer un panier de la BD et le passé dans le body
    }

    public static function editCart()
    {
        //Editer un panier de la BD et le passé dans le body
    }

    public static function deleteCart()
    {
        //TODO Supprimer un panier de la BD
        // (voir dans UserController)
    }
}
?>
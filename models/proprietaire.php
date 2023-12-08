<?php
class Proprietaire{
    private $numproprietaire;
    private $nomproprietaire;
    private $prenomproprietaire;
    private $adresse1proprietaire;
    private $numtel1proprietaire;
    private $emailproprietaire;

    
    public function __construct($numproprietaire,$nomproprietaire,$prenomproprietaire,$adresse1proprietaire,$numtel1proprietaire,$emailproprietaire)
    {
        $this->numproprietaire = $numproprietaire;
        $this->nomproprietaire = $nomproprietaire;
        $this->prenomproprietaire = $prenomproprietaire;
        $this->adresse1proprietaire = $adresse1proprietaire;
        $this->numtel1proprietaire = $numtel1proprietaire;
        $this->emailproprietaire = $emailproprietaire;
    }
    public function enregistrerPropietaire()
    {
        global $db;
        $result = false;

        $numproprietaire = $this->numproprietaire;
        $nomproprietaire = $this->nomproprietaire;
        $prenomproprietaire = $this->prenomproprietaire;
        $adresse1proprietaire = $this->adresse1proprietaire;
        $numtel1proprietaire = $this->numtel1proprietaire;
        $emailproprietaire = $this->emailproprietaire;

        $requete = "INSERT INTO proprietaire (numproprietaire, nomproprietaire, prenomproprietaire, adresse1proprietaire, numtel1proprietaire, emailproprietaire) VALUES (:numproprietaire, :nomproprietaire, :prenomproprietaire, :adresse1proprietaire, :numtel1proprietaire, :emailproprietaire)";

        $statment = $db->prepare($requete);

        $execution = $statment->execute(
            [
                ':numproprietaire' => $numproprietaire,
                ':nomproprietaire' => $nomproprietaire,
                ':prenomproprietaire' => $prenomproprietaire,
                ':adresse1proprietaire' => $adresse1proprietaire,
                ':numtel1proprietaire' => $numtel1proprietaire,
                ':emailproprietaire' => $emailproprietaire
            ]
            );
            
        if ($execution){
            $result = true;
        }
        return $result;
    }
    
    static function getProprietaire(){
        global $db;
        $requete = 'SELECT * FROM proprietaire WHERE 1';
        $statment = $db->prepare($requete);
        $execution = $statment->execute([]);
        $proprietaires = [];
        if ($execution){
            while ($data = $statment -> fetch()){
                $proprietaire = new Proprietaire ($data['numProprietaire'],$data['nomProprietaire'],$data['prenomProprietaire'],$data['adresse1Proprietaire'],$data['numTel1Proprietaire'],$data['emailProprietaire']);
                array_push($proprietaires,$proprietaire);
            }
            return $proprietaires;
        }
        else return [];
    }

   


    /**
     * Get the value of numproprietaire
     */ 
    public function getNumproprietaire()
    {
        return $this->numproprietaire;
    }

    /**
     * Set the value of numproprietaire
     *
     * @return  self
     */ 
    public function setNumproprietaire($numproprietaire)
    {
        $this->numproprietaire = $numproprietaire;

        return $this;
    }

    /**
     * Get the value of nomproprietaire
     */ 
    public function getNomproprietaire()
    {
        return $this->nomproprietaire;
    }

    /**
     * Set the value of nomproprietaire
     *
     * @return  self
     */ 
    public function setNomproprietaire($nomproprietaire)
    {
        $this->nomproprietaire = $nomproprietaire;

        return $this;
    }

    /**
     * Get the value of prenomproprietaire
     */ 
    public function getPrenomproprietaire()
    {
        return $this->prenomproprietaire;
    }

    /**
     * Set the value of prenomproprietaire
     *
     * @return  self
     */ 
    public function setPrenomproprietaire($prenomproprietaire)
    {
        $this->prenomproprietaire = $prenomproprietaire;

        return $this;
    }

    /**
     * Get the value of adresse1proprietaire
     */ 
    public function getAdresse1proprietaire()
    {
        return $this->adresse1proprietaire;
    }

    /**
     * Set the value of adresse1proprietaire
     *
     * @return  self
     */ 
    public function setAdresse1proprietaire($adresse1proprietaire)
    {
        $this->adresse1proprietaire = $adresse1proprietaire;

        return $this;
    }

    
    /**
     * Get the value of numtel1proprietaire
     */ 
    public function getNumtel1proprietaire()
    {
        return $this->numtel1proprietaire;
    }

    /**
     * Set the value of numtel1proprietaire
     *
     * @return  self
     */ 
    public function setNumtel1proprietaire($numtel1proprietaire)
    {
        $this->numtel1proprietaire = $numtel1proprietaire;

        return $this;
    }

    

    /**
     * Get the value of emailproprietaire
     */ 
    public function getEmailproprietaire()
    {
        return $this->emailproprietaire;
    }

    /**
     * Set the value of emailproprietaire
     *
     * @return  self
     */ 
    public function setEmailproprietaire($emailproprietaire)
    {
        $this->emailproprietaire = $emailproprietaire;

        return $this;
    }
}
?>
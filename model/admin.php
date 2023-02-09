<?php 

    class Admin {
        
        //?ATTRIBUTS:

        private $id_admin;
        private $name_admin;
        private $pseudo_admin;
        private $mdp_admin;

        //!GETTERS & SETTERS:

        //Id_admin getters & setters

        public function getIdAdmin() {
            return $this->id_admin;
        }
        public function setIdAdmin($newIdAdmin) {
            $this->id_admin = $newIdAdmin;
        }

        //name_admin getters & setters

        public function getNameAdmin() {
            return $this->name_admin;
        }
        public function setNameAdmin($newNameAdmin) {
            $this->name_admin = $newNameAdmin;
        }

        //Pseudo admin getters & setters

        public function getPseudoAdmin() {
            return $this->pseudo_admin;
        }
        public function setPseudoAdmin($newPseudoAdmin) {
            $this->pseudo_admin = $newPseudoAdmin;
        }

        //MDP getters & setters

        public function getMdpAdmin() {
            return $this->mdp_admin;
        }
        public function setMdpAdmin($newMdpAdmin) {
            $this->mdp_admin = $newMdpAdmin;
        }

        //! METHODES

        //Methode de hashage du mot de passe

        public function hashMdp() {
            $this->setMdpAdmin(password_hash($this->getMdpAdmin()));
        }


    }

?>
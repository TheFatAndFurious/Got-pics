<?php

class Galerie {
        
        //?ATTRIBUTS:

        private $id_galerie;
        private $name_galerie;
        private $description_galerie;

        //!GETTERS & SETTERS:

        //Id_galerie getters & setters

        public function getIdGalerie() {
            return $this->id_galerie;
        }
        public function setIdGalerie($newIdGalerie) {
            $this->id_galerie = $newIdGalerie;
        }

        //name_galerie getters & setters

        public function getNameGalerie() {
            return $this->name_galerie;
        }
        public function setNameGalerie($newNameGalerie) {
            $this->name_galerie = $newNameGalerie;
        }

        //Description galerie getters & setters

        public function getDescriptionGalerie() {
            return $this->description_galerie;
        }
        public function setPseudoAdmin($newDescriptionGalerie) {
            $this->pseudo_admin = $newDescriptionGalerie;
        }

    }

?>
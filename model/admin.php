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

        //creation d'un nouvel admin

        public function createAdmin($bdd, $name_admin, $pseudo_admin, $mdp_admin) {
            try {
                //requete d'ajout d'un admin a la BDD
                $req = $bdd->prepare('INSERT INTO admin(name_admin, pseudo_admin, mdp_admin) VALUES(:name_admin, :pseudo_admin, :pseudo_admin)');
                $req->execute(array(
                    'name_admin' => $name_admin,
                    'pseudo_amin' => $pseudo_admin,
                    'mdp_admin' => $mdp_admin
                ));
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }

        }

        //verification de l'existence d'un utilisateur dans la BDD

        public function showUser($bdd) {
            //recuperation de la valeur de l'objet
            $pseudo_admin = $this->getPseudoAdmin();
            try {
                //requete pour stocker le contenu de toute la table
                $reponse = $bdd->query('SELECT (name_admin, pseudo_admin, mdp_admin) FROM admin WHERE pseudo_admin = "'.$pseudo_admin.'" LIMIT 1');
                //parcours du resultat de la requete:
                while($donnees = $reponse->fetch()) {
                    //retourne $donnees
                    if($pseudo_admin == $donnees['pseudo_admin']) {
                        //retourne true si il existe
                        return true;
                    }
                    else {
                        return false;
                    }
                }
            }
            catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
        }
    }


    

?>
<?php
// Classe représentant les utilisateurs stockés en base de données
class User {

    //Propriétés 

    protected int $id;
    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected string $address;
    protected string $sex;
    protected string $birthDate;

    //Méthodes

    // setter

    
    public function setId(string $id) {
        $this->firstname = $firstname;
        }
    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
        }

    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
        }

    public function setEmail(string $email) {
        $this->email = $email;
        }
    
    public function setAddress(string $address) {
        $this->address = $address;
        }

    public function setSex(int $sex) {
        $this->sex = $sex;
        }

    public function setBirth_date(string $birth_date) {
        $this->birth_date = $birth_date;
        }

    // getter

    public function getId() {
        return $this->id;
        }
    public function getFirstname() {
        return $this->firstname;
        }

    public function getLastname() {
        return $this->lastname;
        }

    public function getEmail() {
        return $this->email;
        }

    public function getAddress() {
        return $this->address;
        }

    public function getSex() {
        return $this->sex;
        }

    public function getBirth_date() {
        return $this->birth_date;
        }
}

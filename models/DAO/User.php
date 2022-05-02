<?php
class User {
    public string $name;
    public string $email;
    public string $cpf;
    public string $password;
    public string $userType;
    public string $createdAt;


    public function __construct(string $name, string $email, string $cpf, string $password, string $userType, string $createdAt){
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->password = $password;
        $this->userType = $userType;
        $this->createdAt = date("Y-m-d");
    }
    
        
    
    
}



?>
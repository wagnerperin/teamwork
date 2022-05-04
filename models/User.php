<?php
class User {
    public string $name;
    public string $email;
    public string $cpf;
    public string $password;
    public int $userType;
    public DateTime $createdAt;


    public function __construct(string $name, string $email, string $cpf, string $password, int $userType){
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
        $this->userType = $userType;
        $this->createdAt = new DateTime ("Y-m-d");
    }
    
        
    
    
}



?>
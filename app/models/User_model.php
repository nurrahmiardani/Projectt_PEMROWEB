<?php


class User_model
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    
    public function getCredential($email)
    {
        $this->db->query("SELECT * FROM {$this->table} WHERE email=:email");
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function add($data)
    {
        $query = "INSERT INTO users (name, password, email, address)
                    VALUES (
                        :name, :password, :email, :address
                    )";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('address', $data['address']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE users SET
                            name = :name,
                            password = :password, 
                            email = :email,
                            address = :address
                        WHERE id = :id
                            ";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('address', $data['address']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}
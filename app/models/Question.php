<?php
// namespace App\Models;
class Question
{
    
    private $db;
    public $lid;

    /**
    * User constructor.
    * @param null $data
    */
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        
        $this->db->query('INSERT INTO question (question_content) VALUES(:question_content)');
        
        $this->db->bind(':question_content', $data['question_content']);
       
        if ($this->db->execute()) {
            $this->lid = $this->db->lastInsertId();
            return true;
        } else {
            return false;
        }
        
    }

}
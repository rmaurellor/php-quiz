<?php
// namespace App\Models;
class Answer
{
    
    private $db;

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
        
        $this->db->query('INSERT INTO answer (answer_content,question_id) VALUES(:answer_content,:question_id)');
        
        $this->db->bind(':answer_content', $data['answer_content']);
        
        $this->db->bind(':question_id', $data['question_id']);
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
    }

    public function getAnswers($question_id)
    {
        $this->db->query('SELECT * FROM answer WHERE question_id=:question_id');
        $this->db->bind(':question_id', $question_id);
        $rows = $this->db->resultSet();
        if ($rows) {
            return $rows;
        } else {
            return false;
        }
    }

}
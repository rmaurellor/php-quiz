<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Quizes extends Controller
{
    public function __construct()
    {
        
    }
    
    public function Create(Type $var = null)
    {
        
        $data = [
            'title' => "quiz/create",
        ];
        $this->view('quiz/create', $data);
    }
}
<?php

/**
 * Every page loads from view folder
 * in order to load a view inside a folder of the view folder
 * the folder/filename must be parsed
 */
class Questions extends Controller
{

    public function __construct()
    {
        $this->questionModel = $this->model('Question');
        $this->answerModel = $this->model('Answer');
    }
    
    public function Create(Type $var = null)
    {
        $data = [
            'title' => "question/create",
            'question_id' => "",
            'question_content' => "",
            'answer_content' => "",
            'answers' => ""
        ];
        $this->view('question/create', $data);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            $data = [
                'title' => trim($_POST['title']),
                'question_id' => trim($_POST['question_id']),
                'question_content' => trim($_POST['question_content']),
                'answer_content' => trim($_POST['answer_content'])
            ];
            
            // validate description
            if (empty($data['question_content'])) {
                $data['question_content_err'] = 'Please enter question';
            }
            if (empty($data['answer_content'])) {
                $data['answer_content_err'] = 'Please enter answer';
            }
            
            //Make sure errors are empty
            if (empty($data['question_content_err']) && empty($data['answer_content_err'])) {
                //validated
                // die('success');
                //Register Question
                if(empty($data['question_id'])){
                    if ($this->questionModel->register($data)){
                        $data["question_id"] = trim(intval($this->questionModel->lid));
                    } else {
                        die('Something went wrong');
                    }
                }
                if($this->answerModel->register($data)){
                    $data["answers"] = $this->answerModel->getAnswers($data["question_id"]);
                    $data["answer_content"] = '';
                    //flash('register_success', 'You are Registered Successfully');
                    //redirect('questions/create');
                    $this->view('question/create', $data);
                } else {
                    die('Something went wrong');
                }
                #..
            } else {
                //load view with errors
                $this->view('question/create', $data);
            }
        } else {
            //Load Form
            $data = [
                'title' => 'questions/create',    
                'description' => ''   
            ];
            $this->view('questions/create', $data);
        }
    }
}
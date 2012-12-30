<?php
if (!defined('BASEPATH'))
	die('No direct script access allowed!');

class Response extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}
	
	/*
	 * Displays all of the blog posts in a table
	 */
	public function index() {
		// load all of our posts
			// load all of our posts
		$data['responses'] = Model\Response::with('question')->with('answer')->all();

		// build our blog table
		//$data['content'] = $this -> load -> view('response/view_responses', $data, TRUE);
		
		
		// show the main template
			$this->load->view('templates/header',$data);
			$this->load->view('response/view_responses', $data);
			$this->load->view('templates/footer');
	}

	public function create() {
		// create a new response object
		$this->load->helper('form');
		$response = new Model\Response();

	// check if we have posted data - i.e. hit save
        if ($_POST)
        {
                // parse the post data
                $response->question_id = $this->input->post('question');
                $response->answer_value = $this ->input->post('answer');

                // try to save the record, running inbuilt validation
                if ($response->save(TRUE))
                {
                        // validation successful
                        $this->session->set_flashdata('success','Successfully saved record');
						 // get the last id
        				$response_id = Model\Response::last_created()->id;
                        echo $response_id;
                }
				else {
					// validation unsuccessful 
        echo 'something went horribly wrong';
				}
        }
		else {
			$this->load->view('templates/header');
			$this->load->view('response/create');
			$this->load->view('templates/footer');
		}

        
	}
	
	public function delete($id)
	{
		$response = Model\Response::find($id);
		$response->delete();
		redirect('response');	
	}
	
	public function answer_counts()
	{
		$results = Model\Poll::with('question')->all();
		
		foreach ($results as $Poll) {
			echo $Poll->name."<br />";
			$questions = $Poll->question();
			foreach($questions as $question){
				echo $question->id . ': ' . $question->text . '<br />';
			
		} 
			
		}
		
	
	}

}

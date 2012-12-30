<?php
if (!defined('BASEPATH'))
	die('No direct script access allowed!');

class Poll extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this -> load -> library('session');
	}

	/*
	 * Displays all of the blog posts in a table
	 */
	public function index() {
		// load all of our posts
		// load all of our posts
		$data['polls'] = Model\Poll::all();

		// build our blog table
		//$data['content'] = $this -> load -> view('response/view_responses', $data, TRUE);

		// show the main template
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('poll/index', $data);
		$this -> load -> view('templates/footer');
	}

	public function create() {
		// create a new poll object
		$poll = new Model\Poll();
		

		/*
		 * Set default poll information.
		 *
		 */

		$poll -> name = 'New Poll';
		$poll -> closed = FALSE;

		// save the blog post to the database
		$poll -> save();

		// get the last id
		$poll_id = Model\Poll::last_created() -> id;

		// redirect to the edit screen
		redirect('poll/edit/' . $poll_id);
	}

	public function edit($id = 0) {
		$this -> load -> helper('form');
		$poll = Model\Poll::find($id);
		// if we couldn't find a post, redirect
		if (is_null($poll)) {
			show_404();
			return;
		}

		// check if we have posted data - i.e. hit save
		if ($_POST) {
			
			// parse the post data
			$poll -> name = $this -> input -> post('name');
			$poll -> start_date = $this -> input -> post('startDate');
			$poll -> end_date = $this -> input -> post('endDate');
			$poll -> closed = 0; // $this -> input -> post('closed'); 
			// TODO: fix this.
			
			// try to save the record, running inbuilt validation
			try {
				if ($poll -> save(TRUE)) {
					// validation successful
					$this -> session -> set_flashdata('success', 'Successfully saved record');
					redirect('poll/edit/'.$poll->id);

				}
			} catch (Exception $e) {
				echo $e -> getMessage();
			}
		}
		$data['poll'] = Model\Poll::find($id);
		$this -> load -> view('templates/header');
		$this -> load -> view('poll/edit',$data);
		$this -> load -> view('templates/footer');
		//	}

	}

	/*
	 public function delete($id) {
	 $response = Model\Response::find($id);
	 $response -> delete();
	 redirect('response');
	 }

	 public function answer_counts() {
	 $results = Model\Poll::with('question') -> all();

	 foreach ($results as $Poll) {
	 echo $Poll -> name . "
	 <br />
	 ";
	 $questions = $Poll -> question();
	 foreach ($questions as $question) {
	 echo $question -> id . ': ' . $question -> text . '
	 <br />';

	 }
	 }
	 }
	 */
}

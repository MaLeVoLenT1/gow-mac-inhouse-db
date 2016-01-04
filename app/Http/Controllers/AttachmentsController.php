<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attachments;

Use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;


class AttachmentsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
//Index
	public function index()
	{
        $attachments = Attachments::all();
        return view('attachments.attachments', compact('attachments'));
        //return $attachments;



	}

//Add
	public function add()
	{

	}
//Get
    public function get($filename){

    }
//Store
	public function store()
	{
		//
	}

//Show
	public function show($id)
	{
		//
	}

//Edit
	public function edit($id)
	{
		//
	}

//Update
	public function update($id)
	{
		//
	}

//Destroy
	public function destroy($id)
	{
		//
	}

	public function upload() {

			// checking file is valid.
			if (Input::file('image')->isValid()) {
				$destinationPath = 'uploads'; // upload path
				$extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
				$fileName = rand(11111,99999).'.'.$extension; // renameing image
				Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
				// sending back with message

				return 'works';
			}
			else {
				// sending back with error message.

				return 'does not';
			}
		}


}

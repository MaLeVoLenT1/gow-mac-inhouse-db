<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Attachments;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Http\Request;


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
		$file = Request::file('filefield');
        $extension = $file ->getClientOriginalExtension();
        Storage::disk('local') -> put($file->getFilename().'.'.$extension, File::get($file));
        $entry = new Attachments();
        $entry -> mime = $file->getClientMimeType();
        $entry ->original_filename = $file ->getClientOriginalName();
        $entry ->filename = $file->getFilename().'.'.$extension;
        $entry->save();
        return redirect('attachments.attachments');
	}
//Get
    public function get($filename){
        $entry = Attachments::where('filename', '=', $filename) -> FirstOrFail();
        $file =Storage::disk('local')->get($entry->filename);
        return (new Response($file, 200))
            ->header('Content-Type', $entry->mime);
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

}

<?php namespace App\Http\Controllers;
use App\Instrument;
use App\Http\Requests;
use App\Http\Requests\InstrumentRequest;
use Request;
use App\Http\Controllers\Controller;





class InstrumentsController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
//Index
	public function index()
	{
        $instruments = Instrument::all();
        return view('instruments.instruments', compact('instruments'));
	}

//Create Record
	public function create()
	{
        return view('instruments.create');
	}

//Store Record
	public function store(InstrumentRequest $request)
	{
        Instrument::create($request ->all());
        return redirect('instruments');
    }

//Show Record
	public function show($id)
	{
        $Instruments = Instrument::findorfail($id);
        return view('instruments.show', compact('Instruments'));
	}

//Edit Record
	public function edit($id)
	{
        $Instruments = Instrument::findorfail($id);
        return view('instruments.edit', compact('Instruments'));
	}

//Update Record
	public function update($id, InstrumentRequest $request)
	{
        $Instruments = Instrument::findorfail($id);
        $Instruments->update($request-> all());
        return redirect('instruments');
	}

//Destroy Record
	public function destroy($id)
	{
		$Instruments = Instrument::find($id);
        $Instruments::destroy($id);
        return redirect('instruments');
	}

}

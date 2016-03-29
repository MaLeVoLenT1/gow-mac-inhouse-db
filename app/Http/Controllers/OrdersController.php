<?php namespace App\Http\Controllers;
use App\General_info;
use App\Http\Requests;
use App\Http\Requests\OrderRequest;
use App\Instrument;
use Illuminate\Support\Facades\Input;
use Request;
use App\Http\Controllers\Controller;




class OrdersController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }

//Index
	public function index()
	{
        $General = General_info::all();
        return view('orders.orders', compact('General'));
	}

//Create Record
	public function create()
	{
        return view('orders.create');
	}

//Store Record
	public function store(OrderRequest $request)
	{
        //General_info::create( $request->all());
       // return redirect('customers');
		return 'Test This is working';
	}

//Show Record
	public function show($id)
	{
        $General = General_info::findorfail($id);
        return view('orders.show', compact('General'));
	}

//Edit Record
	public function edit($id)
	{
        $General = General_info::findorfail($id);
		$General->load('instruments')->get();

        return view('orders.edit', compact('General'));
		//return $General;
	}

//Update Record
	public function update($id, OrderRequest $request)
	{
		$User_Input= Input::all();

        $General = General_info::findorfail($id);
        $General->update($request-> all());
		$instruments = Instrument::where('general_info_id', '=', $id)->get();

		$cycle = 0;
		While ($cycle >= 0){
			if( isset( $User_Input['instrument_name_'.$cycle] ) ){
				foreach($instruments as $instrument){
					if($instrument['id'] == $User_Input['instrument_id_'.$cycle]){
						$instrument['instrument_name'] = $User_Input['instrument_name_'.$cycle];
						$instrument['instrument_serial'] = $User_Input['instrument_serial_'.$cycle];
						$instrument['PN'] = $User_Input['PN_'.$cycle];
						$instrument['series_number'] = $User_Input['series_number_'.$cycle];
						$instrument['power'] = $User_Input['power_'.$cycle];
						$instrument['volts'] = $User_Input['volts_'.$cycle];
						$instrument['frequency'] = $User_Input['frequency_'.$cycle];
						$instrument['approvals'] = $User_Input['approvals_'.$cycle];
						$instrument['flow_system_number'] = $User_Input['flow_system_number_'.$cycle];
						$instrument['special_features'] = $User_Input['special_features_'.$cycle];
						$instrument['design_status'] = $User_Input['design_status_'.$cycle];


						$instrument -> save();
						$cycle ++;

					}
				}
			}else{$cycle = -1;}

		}
		return redirect('customers');


	}

//Delete Record
	public function destroy($id)
	{
        $General = General_info::find($id);
        $General::destroy($id);
        return redirect('customers');

	}

}

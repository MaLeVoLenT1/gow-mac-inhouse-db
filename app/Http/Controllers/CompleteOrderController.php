<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\General_info;
use App\Instrument;
use App\Impurities;
use App\Other_Devices;
use App\Base_Gas_Concentration;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Request;


class CompleteOrderController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index()
	{
        $general_information = General_info::all();

		return view('orders.orders', compact('general_information'));
	}
	public function completed(){
		$input = Request::all();
		//Grab Order Information
		$general = new General_info();
		$general -> customer_name = $input['customer_name'];
		$general -> address = $input['address'];
		$general -> order_number = $input['order_number'];
		$general -> quote_number = $input['quote_number'];
		$general -> date_ordered = $input['date_ordered'];
		$general -> save();
		//Needs error handler

		$instrument_count = count($input['instrument_name']);
		$counter = 0;
		//return $input['instrument_name'][0];
		while($counter + 1 <= $instrument_count){

			$instrument = new Instrument();

			$instrument -> instrument_name= $input['instrument_name'][$counter];
			$instrument -> instrument_serial = $input['instrument_serial'][$counter];
			$instrument -> PN = $input['PN'][$counter];
			$instrument -> series_number = $input['series_number'][$counter];
			$instrument -> power = $input['power'][$counter];
			$instrument -> volts = $input['volts'][$counter];
			$instrument -> frequency = $input['frequency'][$counter];
			$instrument -> approvals = $input['approvals'][$counter];
			$instrument -> flow_system_number = $input['flow_system_number'][$counter];
			$instrument -> special_features = $input['special_features'][$counter];
			$instrument -> design_status = $input['design_status'][$counter];
			//$instrument -> notes = $input['notes'][$counter];

			$instrument -> general_info_id = DB::table('general_info')
					-> where('customer_name',$input['customer_name'])
					-> where('address',$input['address'])
					-> where('order_number',$input['order_number'])
					-> where('quote_number',$input['quote_number'])
					-> where('date_ordered',$input['date_ordered'])
					-> pluck('id');
			$instrument -> save();
			$counter++;
		}





		return redirect('complete_orders');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('customer_orders.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

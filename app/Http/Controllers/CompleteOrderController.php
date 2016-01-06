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
use App\Attachments;

Use Illuminate\Support\Facades\Input;


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
		/*Test*/
		//return dd($input);
		//Grab Order Information
		$general = new General_info();
		$general -> customer_name = $input['customer_name'];
		$general -> address = $input['address'];
		$general -> order_number = $input['order_number'];
		$general -> quote_number = $input['quote_number'];
		$general -> date_ordered = $input['date_ordered'];
		$general -> save();

		$cycle = 1;
		While ($cycle > 0){
			if (isset($input['instrument_name_'.$cycle])) {
				$number = $cycle;
				$cycle ++;
				$instrument = new Instrument();
				$instrument -> instrument_name = $input['instrument_name_'.$number];
				$instrument -> instrument_serial = $input['instrument_serial_'.$number];
				$instrument -> PN = $input['PN_'.$number];
				$instrument -> series_number = $input['series_number_'.$number];;
				$instrument -> power = $input['power_'.$number];
				$instrument -> volts = $input['volts_'.$number];
				$instrument -> frequency = $input['frequency_'.$number];
				$instrument -> approvals = $input['approvals_'.$number];
				$instrument -> flow_system_number = $input['flow_system_number_'.$number];
				$instrument -> special_features = $input['special_features_'.$number];
				$instrument -> design_status = $input['design_status_'.$number];
				// Assigns Customer ID to Instrument.
				$instrument -> general_info_id = DB::table('general_info')
						-> where('customer_name',$input['customer_name'])
						-> where('address',$input['address'])
						-> where('order_number',$input['order_number'])
						-> where('quote_number',$input['quote_number'])
						-> where('date_ordered',$input['date_ordered'])
						-> pluck('id');
				$instrument -> save();

				//Grabs Base Gas
				if (isset($input['name_'.$number])) {
					$gas_count = 0;

					While ($gas_count >= 0){

						if (isset($input['name_'.$number][$gas_count])){
							$BaseGas = new Base_Gas_Concentration();

							$BaseGas -> name = $input['name_'.$number][$gas_count];
							$BaseGas -> concentration = $input['concentration_'.$number][$gas_count];

							$BaseGas -> instrument_id = DB::table('instrument')
									-> where('instrument_name',$input['instrument_name_'.$number])
									-> where('instrument_serial',$input['instrument_serial_'.$number])
									-> where('PN',$input['PN_'.$number])
									-> where('series_number',$input['series_number_'.$number])
									-> where('power',$input['power_'.$number])
									-> where('volts',$input['volts_'.$number])
									-> where('frequency',$input['frequency_'.$number])
									-> where('approvals',$input['approvals_'.$number])
									-> where('flow_system_number',$input['flow_system_number_'.$number])
									-> where('special_features',$input['special_features_'.$number])
									-> where('design_status',$input['design_status_'.$number])
									-> pluck('id');
							$BaseGas -> save();
							$gas_count ++ ;

						}else{
							$gas_count = -1;
						}
					}
				}

				//Grabs Impurities
				if (isset($input['impurity_name_'.$number])){
					$impurity_count = 0;
					while ($impurity_count >= 0){
						if (isset($input['impurity_name_'.$number][$impurity_count])){
							$Impurity = new Impurities();

							$Impurity -> name = $input['impurity_name_'.$number][$impurity_count];
							$Impurity -> percentage = $input['impurity_percent_'.$number][$impurity_count];

							$Impurity -> instrument_id = DB::table('instrument')
									-> where('instrument_name',$input['instrument_name_'.$number])
									-> where('instrument_serial',$input['instrument_serial_'.$number])
									-> where('PN',$input['PN_'.$number])
									-> where('series_number',$input['series_number_'.$number])
									-> where('power',$input['power_'.$number])
									-> where('volts',$input['volts_'.$number])
									-> where('frequency',$input['frequency_'.$number])
									-> where('approvals',$input['approvals_'.$number])
									-> where('flow_system_number',$input['flow_system_number_'.$number])
									-> where('special_features',$input['special_features_'.$number])
									-> where('design_status',$input['design_status_'.$number])
									-> pluck('id');
							$Impurity -> save();
							$impurity_count ++ ;
						}else{
							$impurity_count = -1;
						}
					}
				}

				//Grabs Attachments
				foreach (Input::file('image_'.$number) as $attachment){
					if(isset($attachment)){
						$destinationPath = 'uploads'; // upload path
						$fileName = $attachment -> getClientOriginalName();
						$attachment -> move($destinationPath, $fileName); // uploading file to given path

						$upload = new Attachments();
						$upload -> original_filename = $fileName;
						$upload -> instrument_id =  DB::table('instrument')
								-> where('instrument_name',$input['instrument_name_'.$number])
								-> where('instrument_serial',$input['instrument_serial_'.$number])
								-> where('PN',$input['PN_'.$number])
								-> where('series_number',$input['series_number_'.$number])
								-> where('power',$input['power_'.$number])
								-> where('volts',$input['volts_'.$number])
								-> where('frequency',$input['frequency_'.$number])
								-> where('approvals',$input['approvals_'.$number])
								-> where('flow_system_number',$input['flow_system_number_'.$number])
								-> where('special_features',$input['special_features_'.$number])
								-> where('design_status',$input['design_status_'.$number])
								-> pluck('id');

						$upload -> save();
					}
				}




			}else{
				$cycle = -1;
			}
		}

		$General = General_info::all();
		return view('orders.orders', compact('General'));
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

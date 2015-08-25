<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class InstrumentRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'instrument_type' => 'required',
            'instrument_serial' => 'required|min:3',
            'PN' => 'min:3',
            'series_number' => 'min:3',
            'power' => 'min:3',
            'volts' => 'min:3',
            'frequency' => 'min:3',
            'approvals' => 'min:3',
            'flow_system_number' => 'min:3',
            'special_features' => 'min:3',
            'design_status' => 'min:3',
            'notes' => 'min:3',

		];
	}

}

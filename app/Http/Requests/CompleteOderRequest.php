<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CompleteOderRequest extends Request {

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
        $rules =[
            'customer_name' => 'required|min:3',
            'quote_number' => 'required|min:3',
            'order_number' => 'required|min:3',
            'address' => 'required|min:5',

        ];
        foreach( $this -> request -> get('items') as $key => $val){
            $rules['items.'.$key] = 'required|max:10';
        }

		return $rules;
	}

}

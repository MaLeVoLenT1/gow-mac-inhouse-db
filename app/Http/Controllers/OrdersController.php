<?php namespace App\Http\Controllers;
use App\General_info;
use App\Http\Requests;
use App\Http\Requests\OrderRequest;
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
        General_info::create( $request->all());
        return redirect('orders');
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
        return view('orders.edit', compact('General'));
	}

//Update Record
	public function update($id, OrderRequest $request)
	{
        $General = General_info::findorfail($id);
        $General->update($request-> all());
        return redirect('orders');
	}

//Delete Record
	public function destroy($id)
	{
        $General = General_info::find($id);
        $General::destroy($id);
        return redirect('orders');

	}

}

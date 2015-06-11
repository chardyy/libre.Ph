<?php

class PostController extends \BaseController {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$product = Product::orderBy('created_at', 'DESC')->take(5)->get();

		return Response::json($product, 200);
	}



	public function create()
	{
	    Post::create(Input::all());
		return Response::json(['status' => 'saved']);
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(!Input::has('promo')){
			return Response::make('Bad Request', 400);
		}

		$product = Product::create([

				'product_name' => Input::get('promo'),
				'product_details'	=> Input::get('desc'),
				'user_id'	=> 1,
				'category_id'	=> Input::get('category') 
			]);

		return Response::json($product, 200);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::findOrFail($id);
		return Response::json($product, 200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	

}

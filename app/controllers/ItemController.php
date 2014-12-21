<?php

class ItemController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	// public function __construct() {


	public function index()
	{

    	return Redirect::to('/');

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	

	public function store()
	{
		$name=Input::get('name');
		$amount=Input::get('amount');
		$id=Input::get('id');
		$category_id=Input::get('category_id');
		$pantry_list_id=Input::get('pantry_id');
	

		$item=New Item();
		$item->name=$name;
		$item->category_id=$category_id;
		$item->default=TRUE;
		$item->save();

		$content=New ListContent();
		$content->item_id=$item->id;
		$content->pantry_list_id= $pantry_list_id;
		$content->amount= $amount;
		$content->active= TRUE;
		$content->save();


		// $item = new Item();
		// $item->name = $name;
		// $item->category_id= $id;
		// $item->save();

		return Redirect::action('ListController@getIndex')->with('flash_message','Your Item has been succesfully added.');
	
	}


	public function getCreate($id) 
	{
		 $category = Category::with('item')->find($id);
		 $list = PantryList::where('user_id','=',Auth::id())
		 		->first();

  
			return View::make('item_add')
				 ->with('id',$id)
				 ->with('category',$category)
				 ->with('list',$list);
	}


	public function postDelete() 
	{
		$item_id=Input::get('item_id');
		$content_id=Input::get('content_id');

		ListContent::destroy(Input::get('content_id'));
		Item::destroy(Input::get('item_id'));


		return Redirect::action('ListController@getIndex')->with('flash_message','Your Item has been succesfully deleted.');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id)
	{
			$list = PantryList::where('user_id','=',Auth::id())
				->first();
			
			$content = ListContent::where('item_id','=',$id)
				->where('pantry_list_id','=',$list->id)
				->first();



    		$categories = Category::All();
    		$item = Item::with('category')->find($id);

    		return View::make('item_edit')
    			->with('list', $list)
    			->with('categories', $categories)
    			->with('item', $item)
    			->with('content',$content);

	}

		public function postEdit()
	{

		$name=Input::get('name');
		$amount=Input::get('amount');
		$category_id=Input::get('category_id');
		$item_id=Input::get('item_id');
		$user_id=Input::get('user_id');
		$pantry_list_id=Input::get('pantry_id');
		$content_id=Input::get('content_id');

		$item=Item::find($item_id);
		$item->name=$name;
		$item->save();

		$content=ListContent::find($content_id);
		$content->amount= $amount;
		$content->active= TRUE;
		$content->save();

    	return Redirect::action('ListController@getIndex')->with('flash_message','Your Item has been succesfully saved.');

	}

}

<?php

class PostsController extends \BaseController {

	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$perPage = 5;
		$posts = Post::with('user')->paginate($perPage);
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		return $this->savePost($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
		$post = Post::findOrFail($id);
	} catch(Exception $e) {
		App::abort(404);
	}
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		try {
		$post = Post::findOrFail($id);
	} catch(Exception $e) {
		App::abort(404);
	}
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->savePost($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();

		Session::flash('successMessage', "Post Deleted");
		
		return Redirect::action('PostsController@index');
	}

	public function savePost(Post $post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		
		if ($validator->fails()) {
			Log::error('Failed to save post!', Input::all());
			Session::flash('errorMessage', "Post not saved");
			return Redirect::back()->withInput()->withErrors($validator);
		}
		
		$post->title = Input::get('title');
		$post->body  = Input::get('body');
		$post->user_id = Auth::id();
		$post->save();

		Session::flash('successMessage', "Post saved successfully");
		return Redirect::action('PostsController@show', $post->id);
	}

	public function search() 
	{
	    $q = Input::get('search');

	    $searchTerms = explode(' ', $q);

	    $query = DB::table('posts');

	    foreach($searchTerms as $term)
	    {
	        $query->where('body', 'LIKE', '%'. $term .'%');
	        $query->orWhere('title', 'LIKE', '%'. $term . '%');
	    }

	    $results = $query->get();
	    return Redirect::action('PostsController@show', $results->id);
	}

}

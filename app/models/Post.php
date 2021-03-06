<?php


class Post extends BaseModel
{
	public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:100000'
	);


    protected $table = 'posts';

	public function user()
	{
	    return $this->belongsTo('User');
	}


}
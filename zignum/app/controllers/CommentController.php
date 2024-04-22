<?php

class CommentController extends \BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function vine(){
		//Doc::description("Vine");
		return View::make('vine');
		//return Response::json(array("video"=>"https://vines.s3.amazonaws.com/videos/08C49094-DFB4-46DF-8110-EEEC7D4D6115-1133-000000B8AD9BE72C_1.0.1.mp4?versionId=TQGtC5O7G7H34TleFA2LF0Er9tI8VZUe"));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function index(){
		//return View::make('index');
		return Response::json(array("video"=>"https://vines.s3.amazonaws.com/videos/08C49094-DFB4-46DF-8110-EEEC7D4D6115-1133-000000B8AD9BE72C_1.0.1.mp4?versionId=TQGtC5O7G7H34TleFA2LF0Er9tI8VZUe"));
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

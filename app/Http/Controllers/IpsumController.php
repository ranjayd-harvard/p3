<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IpsumController extends Controller
{

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('ipsum.create')->with('paragraphs',1);
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      # Validate
      $this->validate($request, [
          'num_paragraphs' => 'required|integer',
      ]);
      # If there were errors, Laravel will redirect the
      # user back to the page that submitted this request
      # If there were NO errors, the script will continue...
      # Get the data from the form
      #$title = $_POST['title']; # Option 1) Old way, don't do this.
      $num1 = $request->input('num_paragraphs');

      #dd($num1);

      #return \Redirect::to('/ipsum/create')->withInput()->with(['paragraphs',$num1]);

      return view('ipsum.show')->with('paragraphs',$num1);

  }


  public function show($paragraphs)
  {
      return view('ipsum.show')->with('paragraphs', $paragraphs);
  }


}

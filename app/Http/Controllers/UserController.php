<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Input;
use Session;

class UserController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $array = array();

      for ($k = 0 ; $k < 1; $k++){
          $tmp = array( 'name' => 'FirstName LastName',
                        'dob' => '2016-11-10',
                        'profile' => 'Profile desc',
                        'profile_pic' => 'profile_picture');
          array_push( $array, $tmp);
      }

      //$request = \App::make('request');
      //$request->session()->put('users', 1);
      //$request->session()->put('data', $array);

      //$request->session()->flash('users', 1);
      //request->session()->flash('data', $array);


      //session(['users' => '1']);
      //session(['data' => $array]);

      #dd(session('data'));
        return view('users.create')->with('users', 1)->with('data',$array);
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
            'num_users' => 'required|integer|min:0|max:99',
        ]);
        # If there were errors, Laravel will redirect the
        # user back to the page that submitted this request
        # If there were NO errors, the script will continue...
        # Get the data from the form
        #$title = $_POST['title']; # Option 1) Old way, don't do this.
        $num1 = $request->input('num_users');




        #$array = array_add(['name' => 'Ranjay'] , 'DOB',  "11-11-2016");


        //$newCollection = collect([1, 2, 3, 4, 5]);
        $array = array();

        for ($k = 0 ; $k < $num1; $k++){
          $int= rand(1242055681,1262055681);
          $string = date("Y-m-d",$int);
            $tmp = array( 'name' => str_random(6).' '.str_random(10),
                          'dob' => $string,
                          'profile' => 1,
                          'profile_pic' => 'profile_picture');
            array_push( $array, $tmp);
        }

        #dd($array);

        #return \Redirect::to('/ipsum/create')->withInput()->with(['paragraphs',$num1]);



        return redirect('/users/create')->with('users', $num1)->with('data',$array);
        //return view('users.create')->with('users',$num1)->with('data', $array);

    }


}

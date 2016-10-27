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

        $display_array = array('name');

        if ( $request->has('dob') ) {
          array_push($display_array, 'dob');
        }
        if ( $request->has('profile') ) {
          array_push($display_array, 'profile');
        }
        if ( $request->has('profile_pic') ) {
          array_push($display_array, 'profile_pic');
        }

        #dd($request->input());

        #dd($display_array);

        $num1 = $request->input('num_users');

        $array = array();

        for ($k = 0 ; $k < $num1; $k++){
          $int= rand(1242055681,1262055681);
          $string = date("Y-m-d",$int);
            $tmp = array( 'name' => str_random(6).' '.str_random(10),
                          'dob' => $string,
                          'profile' => 1,
                          'profile_pic' => 'profile_picture');


              #$tmp = array_only( $tmp, [ 'name', 'profile', 'profile_pic']);

              $tmp = array_only( $tmp, $display_array);

            array_push( $array, $tmp);
        }




        //return redirect('/users/create')->with('users', $num1)->with('data',$array);

        return redirect()->back()->with('users', $num1)->with('data',$array)->withInput();
        //return view('users.create')->with('users',$num1)->with('data', $array);

    }


}

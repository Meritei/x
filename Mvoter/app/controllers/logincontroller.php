<?php

class logincontroller extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return View::make('login.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('login.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{


		$user = new User;

		$user->firstname = Input::get('firstname');
		$user->medianname = Input::get('medianname');
		$user->lastname = Input::get('lastname');
		$user->admission = Input::get('admission');
		$user->nationalid = Input::get('nationalid');
		$user->year = Input::get('year');
		$user->email = Input::get('email');
		$user->mobile = Input::get('mobile');
		$user->email = Input::get('email');
		$password1 = Hashmake::make(Input::get('password1'));
		$password2 = Hashmake::make(Input::get('password2'));


         if ($password1==$password2) 
              {
         	$password = $password2 ;

         	$user->password = $password2;

               }

               else

               {

              echo "Your passwords do not match .Please check your password.";

              return Redirect :: route ('login.index');
                    
               }

             $user->save();

             echo "You've successfully sing up to Mvote.Please log in to  view more and vote.";

             return Redirect::route('login.index');
/**
*list of all form inputs in just the exact way
*firstname
*medianname
*lastname
*admission
*nationalid
*year
*email
*mobile
*password1
*password2
*/


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($admission)
	{
		
		
		if ($user = user::whereadmission($admission)->first())
		        {
			      


			       $admissionnumb = $user->admission;
		           $mypassword = $user->password;
		           $mymail = $user->email;
     			   $to = $mymail ;
	               $subject= ' Your requested password.' ;
	               $body='This is your requested password '.''. $mypassword ;
	               $headers='From:admin@mvoter.com' ;


		           if (mail($to, $subject, $body,$headers )) 
		                 
		                  {

		    	         return View::make('login.show');

		                   }

		                  else

		                      {
               
                              echo  "Unable to send mail.Please retry again ";
                              return Redirect :: route ('login.index');
		                       
		                      }
		   		



		        }
		        else

		        {


                    echo 'Our platform can not retrieve your password. \n Please check if your <b>admission number</b> is correct. \n Incase there is a technical problem please notify us via our email or helpline.Thank you.';
	            
	                 return Redirect :: route ('login.index');

		        }


	        
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($admission)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($admission)
	{
		//





	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($admission)
	{
		$passwordtemp = Input :: get('password');
		$useradmission = Input :: get('admission');

        if ($user = user::whereadmission($admission)->first()) 
           {
        	 $spirit = $user->admission;
		     $mortal = $user->password;

		     if ($passwordtemp == $mortal ) 
                  {
         	    
                 return Redirect :: route ('vote.index');

                   }
            }
            else
            {


                 echo "Your admission number does not existe.\n Please check whether your admission number is correct. \n Otherwise first sign up with us to log in.";
                 
                 return Redirect :: route ('login.index');

            }
	}

}


@extends('master.login')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Sign Up</title>





<div id="headcover">

           <div id="logo">
               <img src="{{URL::asset('image/mvote.png')}}"width="420px" height="50px" > 


           </div>

       
            

           <div id="login">

                 {{Form::open(['route'=>'login.index'])}}
             
                     <table id="logtable">
                
                        <tr>
                            <td>
                                 
                                 {{Form::label('admission','Admission')}}</br>{{Form::input('text','admission')}}

                            </td>

                            <td>

                                 {{Form::label('password','Passsword')}}</br>{{Form::input('password','password')}}

                            </td>

                            <td>
                                  </br> {{Form::submit('login')}}

                             </td>

                         </tr>

                         <tr>
                    
                             <td>

                                   <a href="forgot"><input type="submit" value="Forgot password?" />
                     
                             </td>
                    
                             <td>
                      
                                    <a href="signup"><input type="submit" value="Sign up" />
                    
                             </td>

                         </tr>

                     </table>
      
                 {{Form::close()}}

            </div>
           
</div>

@stop

</br>
</br>

@section('content')
</br>
</br>
</br>

<div>
	{{Form::open(['route'=>'login.show'])}}
	     <table>


		        <tr>
                       <center><td id="fonty">Please fill in your admission number and click the <b> Request </b> button below</td></center>
                </tr>
                <tr>
                      <center> <td>{{Form::label('admission','Admission')}}</br>{{Form::input('text','admission')}}</td></center>
	            </tr>
	            <tr>
                      <center> <td> </br> {{Form::submit('Request')}}</td></center>
	            </tr>
                <tr>
                <center>
                	<td>

                         <p id="fonty">We are sending your  recovered password to your  email address.However ensure you have filled your admission number on the login page.</p></br>
                         <p id="fonty">Please check your email address and incase it has not reached you, click on <b>Forgot password?</b> button on the header after 10 seconds to resend your password mail.</p></br>
                         <p id="fonty">All measures are taken to ensure your account remains safe at all times.</p>
                         <p id="fonty">Incase of any persistant problem, an account hack or enquiries , Please call or send an email to  <strong>Mvote</strong> helpline number or mail address provided on the footer.</p>
                                                                   
                   </td>
               </center>
                 </tr>

       
        </table>

   {{Form::close()}}                     
</div>

@stop

@section('footer')
<hr>
<center><p><b>C</b>An<b>MVoter</b> production . All rights reserved to <b>Mvoter</b>. Helpline Number<b> (+254701998579) </b>Email address : help@mvote.com</p></center> 
@stop
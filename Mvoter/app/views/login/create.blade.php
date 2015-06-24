
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

                <center>
                        {{Form::open(['route'=>'login.store'])}}
                                                           
                                                            <table>
                                                                   <tr>
                                                                      <td> {{Form::label('fname','First Name:')}}</br>{{Form::input('text','firstname')}}     </td>
                                                                      <td> {{Form::label('mname','Median Name:')}}</br>{{Form::input('text','medianname')}}      </td>
                                                                      <td> {{Form::label('lname','Last Name:')}}</br>{{Form::input('text','lastname')}}     </td>
                                                                   </tr>
                                                                   </br>
                                                                   </br>
                                                                   <tr>
                                                                       <td>{{Form::label('admission','Admission:')}}</br>{{Form::input('text','admission')}}</td>
                                                                       <td>{{Form::label('nationalid','National ID Number:')}}</br>{{Form::input('text','nationalid')}}</td>
                                                                       <td>{{Form::label('year','Year of study:')}}</br>{{Form::input('text','year')}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                        <td>{{Form::label('email','Email Address')}}</br>{{Form::input('text','email')}}</td>
                                                                        <td>{{Form::label('mobile','Mobile Number:')}}</br>{{Form::input('text','mobile')}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                        <td>{{Form::label('password1','Password')}}</br>{{Form::input('password','password1')}}</td>
                                                                        <td>{{Form::label('password2','Verify Your Password Please:')}}</br>{{Form::input('password','password2')}}</td>
                                                                   </tr>
                                                                   <tr>
                                                                       </br> <td>{{Form::submit('sign up')}}</td>
                                                                   </tr>

                                                             </table>
                        
                </center>


                        {{Form::close()}}
</div>

@stop

@section('footer')
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<hr>
<center><p><b>C </b>An <b>MVoter </b> production . All rights reserved to <b>Mvoter</b>. Helpline Number<b> (+254701998579) </b>Email address : help@mvote.com</p></center> 
@stop
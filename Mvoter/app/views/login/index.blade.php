
@extends('master.login')

@section('header')

{{ HTML::style('css/main.css') }}

<title>Login</title>





<div id="headcover">

           <div id="logo">
               <img src="{{URL::asset('image/mvote.png')}}"width="420px" height="50px" > 


           </div>

       
            

           <div id="login">

                 {{Form::open(['route'=>'login.destroy'])}}
             
                     <table id="logtable">
                
                        <tr>
                            <td>
                                 
                                 {{Form::label('admission','Admission')}}</br>{{Form::input('text','admission')}}

                            </td>

                            <td>

                                 {{Form::label('password','Password')}}</br>{{Form::input('password','password')}}

                            </td>

                            <td>
                                  </br> {{Form::submit('login')}}

                             </td>

                         </tr>

                         <tr>
                    
                             <td>

                                   <a href="login.edit"><input type="submit" value="Forgot password?" />
                     
                             </td>
                    
                             <td>
                      
                                    <a href="login.create"><input type="submit" value="Sign up" />
                    
                             </td>

                         </tr>

                     </table>
      
                 {{Form::close()}}

            </div>
           
</div>
@stop
</br></br>
@section('content')
</br></br></br>
<center>
<div id= "pictureframe">


<img src="{{URL::asset('image/empty.jpg')}}"width="1050px" height="400px" > 



</div>

</center>
<div>

     <table id="aftertext">
     <tr>
    <td>
         <img src="{{URL::asset('image/down.png')}}"width="267px" height="104px" > 

     </td>
     <td>
          <img src="{{URL::asset('image/dummy.png')}}"width="267px" height="104px" >
     </td>
     <td>
          <img src="{{URL::asset('image/saver.png')}}"width="231px" height="110px" >
     </td>
     </tr>
     
     </table>








</div>

@stop

@section('footer')
<hr>
<center><p><b>C</b> An <b>MVoter</b> production . All rights reserved to <b>Mvoter</b>. Helpline Number<b> (+254701998579) </b>Email address : help@mvote.com</p></center> 

@stop
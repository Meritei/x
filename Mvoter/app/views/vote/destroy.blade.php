@extends('defaults.masterpage')

@section('header')

{{ HTML::style('css/main.css') }}
<title>Delete File</title>

@stop

@section('content')

<center>
	<div id="covera">

{{Form::open(['route'=>'file.destroy'])}}

  <table id="tabler">
  	<tr>
         <th $colspan = "2"><b>FILL  THESE FORM TO DELETE A  FILL</b></th>
  	</tr>
  	   <tr>
          <td><p><i>Please ensure you have filled the file number section</br>The name  section is not compulsory  </i></p></td>
  	   </tr> 
     <tr>
          <td> {{Form::label('file_number','File Number:')}}</td>
          <td>{{Form::input('text','file_number')}}{{ $errors->first('name', '<span class=error>:message></span>') }}</td>
     </tr>
     <tr>
         <td>{{Form::label('name','Name:')}} </td>
         <td>{{Form::input('text','name')}} </td>
     </tr>
     <tr>
        <td>{{Form::submit('DELETE')}}</td>
     </tr>
</table>

{{Form::close()}}

</div>

</center>

@stop
@section('footer')
<center><p>A luke Dennis production . dennisluke44@gmail.com</p></center> 
@stop 
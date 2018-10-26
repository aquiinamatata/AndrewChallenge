@extends('layouts.app')

@section('content')
<br><br>
<p style="font-size:45px">-  -  -  -  -  -  -  -  -  -  -  - -  -  -  -  -  -  -  -  -  -  -  -  -  -  -   </p><br><br>

{!! Form::open(['url' => 'contact/submit']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
        </div>



        <div class="form-group">
            {{Form::label('email', 'E-Mail Address:')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email Addresss'])}}
        </div>

        <!-- Associative array siya -->

        <div class="form-group">
            {{Form::label('message', 'Message:')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
        </div>

        <div>

            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            
        {!! Form::close() !!}

        <p style="font-size:45px">-  -  -  -  -  -  -  -  -  -  -  - -  -  -  -  -  -  -  -  -  -  -  -  -  -  -   </p><br><br>

@endsection

@extends('layout.app')

@section('title','Add Member')

@section('body')
Add Member
@endsection

@section('main')

<div class="row">
    <div class="col-md-4 col-md-offset-4">

      {!! Form::open(array('route' => 'pages.store')) !!}
      {{ Form::label('member_id', 'Member ID:')}}
      {{ Form::text('member_id', null, array('class' => 'form-control'))}}

      {{ Form::label('first_name', 'First Name:')}}
      {{ Form::text('first_name', null, array('class' => 'form-control'))}}

      {{ Form::label('last_name', 'First Name:')}}
      {{ Form::text('last_name', null, array('class' => 'form-control'))}}

      {{ Form::label('dob', 'Date of birth:')}}
      {{ Form::text('dob', '19/04/1994', array('class' => 'form-control'))}}

      {{ Form::label('email', 'Email:')}}
      {{ Form::text('email', null, array('class' => 'form-control'))}}
      {{ Form::Submit('Create member', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;'))}}
{!! Form::close() !!}
</div>
</div>
@endsection

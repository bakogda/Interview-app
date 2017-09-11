@extends('layout.app')

@section('title','Add Member')

@section('body')
Add Member
@endsection

@section('main')

<div class="row-form">
    <div class="col-md-4 col-md-offset-4">

      {!! Form::open(array('route' => 'pages.store')) !!}
      {{ Form::label('member_id', 'Member ID:')}}
      {{ Form::text('member_id', null, array('class' => 'form-control'))}}

      {{ Form::label('first_name', 'First Name:')}}
      {{ Form::text('first_name', null, array('class' => 'form-control'))}}

      {{ Form::label('last_name', 'Last Name:')}}
      {{ Form::text('last_name', null, array('class' => 'form-control'))}}

      {{ Form::label('dob', 'Date of birth:')}}
      {{ Form::text('dob', 'eg. 1994/04/19', array('class' => 'form-control'))}}

      {{ Form::label('email', 'Email:')}}
      {{ Form::text('email', null, array('class' => 'form-control'))}}

      {{ Form::label('membership_date', 'Membership until:')}}
      {{ Form::text('membership_date', null, array('class' => 'form-control'))}}
      {{ Form::Submit('Create member', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;'))}}
{!! Form::close() !!}

@if ($errors->any())
  <ul class="alert alert danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
  </ul>
  @endif
</div>
</div>
@endsection

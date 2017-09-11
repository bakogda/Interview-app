@extends('layout.app')

@section('title','Memberships')

@section('body')
Memberships
@endsection

@section('main')
<div class="col-md-8 col-md-offset-2">
<div class="table-past">
  <h2> Members with valid membership</h2>
<table id="members-table" class="table">
  <thead>
  <tr>
        <td>Members ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Membership until</td>
  </tr>
</thead>

</table>

</div>

<script type="text/javascript">
$('#members-table').DataTable({
 processing: true,
 serverSide: true,
 ajax: 'http://127.0.0.1:8000/memberships/get_datatables',
 columns: [
     {data: 'member_id', name: 'membership_id'},
     {data: 'first_name', name: 'members.first_name'},
     {data: 'last_name', name: 'members.last_name'},
     {data: 'membership_date', name: 'membership_date'}
 ],
 initComplete: function () {
     this.api().columns().every(function () {
         var column = this;
         var input = document.createElement("input");
         $(input).appendTo($(column.footer()).empty())
         .on('change', function () {
             column.search($(this).val(), false, false, true).draw();
         });
     });
 }
});
</script>



<h2> Members with invalid membership</h2>
<table id="members-past" class="table">
  <thead>
  <tr>
        <td>Members ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Membership until</td>
  </tr>
</thead>

</table>

</div>


<script type="text/javascript">
$('#members-past').DataTable({
 processing: true,
 serverSide: true,
 ajax: 'http://127.0.0.1:8000/memberships/get_pastdata',
 columns: [
   {data: 'member_id', name: 'membership_id'},
   {data: 'first_name', name: 'members.first_name'},
   {data: 'last_name', name: 'members.last_name'},
   {data: 'membership_date', name: 'membership_date'}
],
 initComplete: function () {
     this.api().columns().every(function () {
         var column = this;
         var input = document.createElement("input");
         $(input).appendTo($(column.footer()).empty())
         .on('change', function () {
             column.search($(this).val(), false, false, true).draw();
         });
     });
 }
});
</script>

<div class="row-form">
    <div class="col-md-4 col-md-offset-4">
      <h2>Update membership</h2>

      {!! Form::open(array('route' => 'mpages.store')) !!}
      {{ Form::label('member_id', 'Member ID:')}}
      {{ Form::text('member_id', null, array('class' => 'form-control'))}}
      {{ Form::label('type', 'Membership type') }}<br>
      {{ Form::radio('visible', '2', true) }} Monthly<br>
      {{ Form::radio('visible', '1') }} Weekly<br>
      {{ Form::radio('visible', '0') }} Day<br>
      {{ Form::radio('visible', '3')}} Choose Date<br>
      {{ Form::label('membership_date', 'Choose Date:')}}
      {{ Form::text('membership_date', null, array('class' => 'form-control'))}}

      {{ Form::Submit('Update membership', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top:20px;'))}}
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

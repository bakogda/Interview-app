@extends('layout.app')

@section('title','Memberships')

@section('body')
Memberships
@endsection

@section('main')
<div class="col-md-8 col-md-offset-2">
<div class="table-past">
  <h2> Members with valid membership</h2>
<table id="members-table" class="table-current">
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
     {data: 'member_id', name: 'member_id'},
     {data: 'first_name', name: 'first_name'},
     {data: 'last_name', name: 'last_name'},
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
     {data: 'member_id', name: 'member_id'},
     {data: 'first_name', name: 'first_name'},
     {data: 'last_name', name: 'last_name'},
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

@endsection

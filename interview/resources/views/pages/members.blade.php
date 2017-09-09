@extends('layout.app')

@section('title','Members')

@section('body')
Members
@endsection

@section('main')

<table id="members-table" class="table">
  <thead>
  <tr>
        <td>ID</td>
        <td>Members ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Date of birth</td>
        <td>Email </td>
        <td>Created At</td>
        <td>Updated At</td>
  </tr>
</thead>

</table>

<script type="text/javascript">
$('#members-table').DataTable({
 processing: true,
 serverSide: true,
 ajax: 'http://127.0.0.1:8000/members/get_datatable',
 columns: [
     {data: 'id', name: 'id'},
     {data: 'member_id', name: 'member_id'},
     {data: 'first_name', name: 'first_name'},
     {data: 'last_name', name: 'last_name'},
     {data: 'dob', name: 'dob'},
     {data: 'email', name: 'email'},
     {data: 'created_at', name: 'created_at'},
     {data: 'updated_at', name: 'updated_at'}
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

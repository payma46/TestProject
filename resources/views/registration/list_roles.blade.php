<!DOCTYPE html>
<html>
<head>
  <title>HTML Table with Borders</title>
  <style>
    table {
      border-collapse: collapse;
    }
    
    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>
<body>
    <button type="button"><a href="/create_role_index">Create New</a></button>
    <button type="button"><a href="/get_role_list/status/NA/Active">List Active Role</a></button>
    <button type="button"><a href="/get_role_list/status/NA/Inactive">List Inactive Role</a></button>
    <button type="button"><a href="/get_role_list/ALL/NA/ALL">List All Role</a></button>
<table>
  <thead>
    <tr>
      <th>SL No:</th>
      <th>Role Name:</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($response_data as $i=>$data)
    <tr>
      <td>{{$i+1}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->status}}</td>
      <td>
        <button type="button">
            <a href="/edit_role/{{$data->id}}">Edit</a></button>
        <button type="button">
            <a href="/delete_role/{{$data->id}}">Delete</a></button>
    </tr>
    @endforeach
  </tbody>
</table>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/css/contacts.css">
    <title>Brands</title>
    <meta charset="UTF-8"/>
</head>
    <body>
    <table>
<tr>
<td>Id</td>
<td>Slug</td>
<td>Name</td>
</tr>
@foreach ($data as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->slug }}</td>
<td>{{ $user->name }}</td>
</tr>
@endforeach
</table>
    </body>
</html> 
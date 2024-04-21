<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
</head>

<body>
    <h1 class="text-3xl font-bold underline">Hello I am Suhail</h1>
    <form action="{{ route('add') }}" method="POST">
        @csrf
        name: <input type="text" name="name">
        <br>
        email : <input type="email" name="email" id="email"><br>
        <input type="submit" value="add">
    </form>
    <br>
    
        <p></p><br>
        <p></p><br>
        <p></p><br>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action1</th>
            <th>Action2</th>
        </tr>
        @foreach ($data as $item)
        <tr>
          <td>{{ $item->id }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->email }}</td>
          <td><a href="{{ route('delete',$item->id) }}">Delete</a></td>
          {{-- <td><a href="delete/{{$item->id}}">Delete</a></td> --}}
          <td><a href="{{ route('edit',$item->id) }}">Edit</a></td>
          {{-- <td><a href={{"edit/".$item['id']}}>Edit</a></td> --}}
          {{-- <td><a href="/">Update</a></td> --}}
        </tr>
        @endforeach
    </table>

</body>

</html>

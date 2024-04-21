    <h1>Update form</h1>
    {{-- <form action="{{ route('update') }}" method="POST"> --}}
        <form action="{{ route('update',$data->id) }}" method="POST">
        @csrf
        name: <input type="text" name="name" value={{ $data->name }}>
        <br>
        email : <input type="email" name="email" id="email" value={{ $data->email }}><br>
        <input type="submit" value="update">
    </form>
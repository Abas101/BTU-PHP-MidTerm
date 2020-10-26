@extends('welcome')
@section('content')
    <br/>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Position</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($employees as $employee)
        <td>{{$employee -> id}}</td>
        <td>{{$employee -> name}}</td>
        <td>{{$employee -> surname}}</td>
        <td>{{$employee -> position}}</td>
        <td>{{$employee -> phone}}</td>
        @if ($employee -> is_hired == 1)
        <td>Hired</td>
            @else
            <td>Not Hired</td>
            @endif
    </tr>
    <form>
        <button formaction="http://127.0.0.1:8000/employeelist/{{$employee -> id}}/edit">Edit employee below</button>
    </form>
    @endforeach
    </tbody>
</table>
@endsection

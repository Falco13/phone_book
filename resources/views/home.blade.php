@extends('layout')

@section('content')
<br>
<div class="container-fluid">
    <form method="GET" action="{{ route('search') }}" class="d-flex">
        <input class="form-control me-2" id="s" name="s" type="search" placeholder="Search by name">
        <button class="btn btn-warning" type="submit">Search</button>
    </form>
</div>
<br>

@if(count($users))
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{-- {{ $users->links() }} --}}
{{ $users->appends(['s'=>request()->s])->links() }}
<br>
@else
    <h3>There are no entries...</h3>
@endif
@endsection

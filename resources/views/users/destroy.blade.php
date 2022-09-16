@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('user.destroy', $user->id) }}">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-outline-danger">
<i class="bi bi-trash3-fill"></i>
</button>
</form>
@endsection

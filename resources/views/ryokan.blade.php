@extends('app')

@section('content')
<form action="/ryokan" method="post">
    @csrf
    <x-auto-complete-input name="ryokan" type="ryokan" placeholder="旅館名を入力" />
    <button type="submit">next</button>
</form>
@endsection

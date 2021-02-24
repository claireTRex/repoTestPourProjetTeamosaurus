@extends("layouts.body")
@section('content')

    @include('composant/flash')
<form action="{{route('storeUser')}}" method="post">
    <label for="">nom</label>
    <input type="text" name="name">

    <label>email</label>
    <input type="email" name="email">

    <label>pwd</label>
    <input type="password" name="password">

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('logeUser')}}">ce connecter</a>
@endsection

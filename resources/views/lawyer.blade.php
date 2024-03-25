<h1>Lawyer Details</h1>

@foreach ($abc as $id =>$user)

<h3>Name : {{ $user->name }}</h3>
<h3>Last name : {{ $user->lastname }}</h3>
<h3>City : {{ $user->city }}</h3>
<h3>phone number : {{ $user->phone }}</h3>
<h3>Created at : {{ $user->created_at }}</h3>
<h3>updated at : {{ $user->updated_at }}</h3>

@endforeach
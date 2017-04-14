<h1>{{$user->username}} 's Profile</h1>
    <p>
        <strong>Country:</strong> {{$user->address->country}}
    </p>

    <p>
        <strong>Roles:</strong>
        <ul>
        @foreach($user->role as $roles)
            <li>
            {{$roles->name}}
            </li>
        @endforeach
        </ul>
    </p>
@foreach($user->post as $posts)
    <h1>{{$posts->title}}</h1>
    <p>{{$posts->body}}</p>
@endforeach
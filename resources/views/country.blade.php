<h3>Post Made In : {{$country->name}}</h3>

@foreach($country->post as $posts)
    <h4>{{$posts->title}} Post By: {{$posts->user->username}}</h4>
    <p>{{$posts->body}}</p>
@endforeach
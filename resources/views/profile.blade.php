<h1>{{$user->username}} 's Profile</h1>

<p>Lorem ipsum dolor sit amet, consectetur
    adipisicing elit. Ad adipisci animi aperiam consequuntur ducimus
    ea facilis, iste itaque maiores, molestiae
    molestias pariatur perspiciatis quas qui reiciendis sequi sint tempore ullam.</p>

@foreach($user->post as $posts)
    <h1>{{$posts->title}}</h1>
    <p>{{$posts->body}}</p>
@endforeach
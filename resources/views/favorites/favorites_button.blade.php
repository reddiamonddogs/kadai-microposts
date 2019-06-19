@if (Auth::user()->is_favoriting($micropost->id))
    {!! Form::open(['class' => "d-inline-block", 'route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['class' => "d-inline-block", 'route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif





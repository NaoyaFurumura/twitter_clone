@if(Auth::id() != $micropost->user_id)
    @if(Auth::user()->is_favorite($micropost->id))
    
        {!!  Form::open(['route'=>['favorites.unfavorite',$micropost->id],'method'=>'delete']) !!}
            {!! Form::submit('Unfavotire',['class'=>'btn btn-danger']) !!}
        {!! Form::close() !!}
    @else
        
        {!! Form::open(['route'=>['favorites.favorite',$micropost->id]]) !!}
            {!! Form::submit('Favorite',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    @endif
@endif

    
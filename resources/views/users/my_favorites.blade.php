@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @forelse ($myFavorites as $myFavorite)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $myFavorite->title }}
                    </div>

                    <div class="panel-body">
                        {{ $myFavorite->body }}
                    </div>
                    @if (Auth::check())
                        <div class="panel-footer">
                            <form action="{{ url('favorite/'. $myFavorite->id) }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit">
                                    <i class="fa fa-{{ ($favoritePosts->contains($myFavorite->id)) ? 'heart' : 'heart-o' }}"></i>
                                </button>
                            </form>
                            {{-- <favorite></favorite>
                            <span>23</span> --}}
                        </div>
                    @endif
                </div>
            @empty
                <p>You have no favorite posts.</p>
            @endforelse
         </div>
    </div>
</div>
@endsection
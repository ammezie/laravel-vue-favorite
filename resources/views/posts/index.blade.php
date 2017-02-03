@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @forelse ($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }}
                    </div>

                    <div class="panel-body">
                        {{ $post->body }}
                    </div>
                    <div class="panel-footer">
                        <span>
                            <i class="fa fa-heart-o"></i> 23
                        </span>
                    </div>
                </div>
            @empty
                <p>No post created.</p>
            @endforelse

           {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection

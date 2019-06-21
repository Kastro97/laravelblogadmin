@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <div class="float-right">
                    <a href="{{route('posts.create')}}" class="btn btn-primary">Crear Nuevo Post</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                @forelse($posts as $post)
                    <div class="card">
                        <div class="card-header">{{ $post->title }}</div>
                        <div class="card-body">
                            <img src="{{ asset('img/posts') }}/{{ $post->image }}" alt="{{ $post->title }}" class="img-responsive" width="600">
                            <hr>
                            <strong>{{ $post->description }}</strong>
                        </div>
                        <div class="card-footer">
                            <bold>{{ $post->created_at->diffForHumans() }}</bold>
                        </div>
                    </div>
                    <br>
                @empty
                    <div class="alert alert-danger">No hay posts todavia</div>
                @endforelse
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-2">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
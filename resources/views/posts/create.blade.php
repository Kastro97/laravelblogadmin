@extends("layouts.app")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Titulo: </label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Imagen: </label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion: `</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="submit" value="Agregar Post" class="btn btn-block btn-outline-primary">
                </form>
            </div>
        </div>
    </div>
@endsection

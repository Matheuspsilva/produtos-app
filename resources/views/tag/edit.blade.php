@extends('layouts.app')


@section('title') Editar Tag -  @endsection

@section('content')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Editar Tag</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <form action="{{route('tags.update', ['tag' => $tag->id])}}" method="post" >
                @method('PUT')
                @csrf

                <div class="form-group">

                    <label>Nome da Tag</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$tag->name}}">

                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>


                <button type="submit" class="btn btn-success my-4">Atualizar Tag</button>

            </form>

        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title')Criar Tag - @endsection

@section('content')

<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center my-5">
        <h2>Criar Tag</h2>
    </div>
</div>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif --}}



<div class="row">
    <div class="col-12">

        <form action="{{ route('tags.store')}}" method="post">

            @csrf
            <div class="form-group">
                <label for="">Nome da Tag</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror

            </div>

            <button type="submit" class="btn btn-success my-4">Criar Tag</button>

        </form>

    </div>
</div>


@endsection


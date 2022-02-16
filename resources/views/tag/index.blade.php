@extends('layouts.app')

@section('title')Meus Eventos @endsection

@section('content')

<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center my-5">
        <h2>Tags</h2>
        <a href="{{ route('tags.create') }}" class="btn btn-success">Criar Tag</a>
    </div>
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tag</th>
                    <th>Criado Em</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tags as $tag)

                <tr>
                    <td>{{$tag->id}}</td>

                    <td>{{$tag->name}}</td>

                    <td>{{$tag->created_at->format('d/m/Y H:i:s')}}</td>

                    <td>
                        <div class="col-12 d-flex">

                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning mx-2">Editar</a>

                            <form action="{{ route('tags.destroy', $tag->id)}}" method="post">
                                @csrf
                                @method("DELETE")

                                <button type="submit" class="btn btn-danger ml-2 ">Remover</button>

                            </form>

                        </div>

                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="4"> Nenhuma tag encontrada</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

        {{-- {{$tags->links()}} --}}

    </div>
</div>



@endsection

@extends('admin.layouts.default')


@section('content')
    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Cidade</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->name}}</td>
                        <td class="right-align">

                            <a href="{{route("cidade.edit", $cidade->id)}}">
                                <span>
                                    <i class="material-icons blue-text accent-2">edit</i>
                                </span>
                            </a>

                            <form action="{{route("cidade.destroy", $cidade->id)}}" method="POST" style="display: inline;">
                                @csrf
                                @method("DELETE")

                                <button style="border:none; background:transparent;" type="submit">
                                    <span style="cursor: pointer;">
                                        <i class="material-icons red-text accent-3">delete_forever</i>
                                    </span>

                                </button>

                            </form>
                            
                        </td>
                    </tr>
                @empty
                    <tr colspan="2">Não existem cidades cadastradas.</tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn btn-large waves-effect waves-light" href="{{route("cidade.create")}}">
                Adicionar
            </a>
        </div>


    </section>
@endsection
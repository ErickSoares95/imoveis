{{-- @extends('admin.layouts.default')


@section('content')
    <section class="section">
        <table class="highlight">
            <thead>
                <tr>
                    <th>Imovel</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($imoveis as $imovel)
                    <tr>
                        <td>{{$imovel->titulo}}</td>
                        <td>{{$imovel->terreno}}</td>
                        <td>{{$imovel->salas}}</td>
                        <td>{{$imovel->banheiros}}</td>
                        <td>{{$imovel->dormitorios}}</td>
                        <td>{{$imovel->garagens}}</td>
                        <td>{{$imovel->descricao}}</td>
                        <td>{{$imovel->preco}}</td>
                        <td>{{$imovel->cidade->name}}</td>
                        <td>{{$imovel->tipo->name}}</td>
                        <td>{{$imovel->finalidade->name}}</td>
                        <td class="right-align">

                            <a href="{{route("imovel.edit", $imovel->id)}}">
                                <span>
                                    <i class="material-icons blue-text accent-2">edit</i>
                                </span>
                            </a>

                            <form action="{{route("imovel.destroy", $imovel->id)}}" method="POST" style="display: inline;">
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
                    <tr colspan="2">Não existem imoveis cadastradas.</tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn btn-large waves-effect waves-light" href="{{route("imovel.create")}}">
                Adicionar
            </a>
        </div>


    </section>
@endsection --}}
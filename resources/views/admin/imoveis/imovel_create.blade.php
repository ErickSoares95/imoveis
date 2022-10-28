@extends('admin.layouts.default')

@section('content')
    

    <section class="section">
        <form action="{{route("imovel.store")}}" method="POST">
            @csrf            
            
                <div class="input-field">
                    <input type="text" name="titulo" id="titulo" value="{{old("titulo")}}" />
                    <label for="titulo">Titulo</label>
                    @error('titulo')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="terreno" id="terreno" value="{{old("terreno")}}" />
                    <label for="terreno">Terreno</label>
                    @error('terreno')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="salas" id="salas" value="{{old("salas")}}" />
                    <label for="salas">Salas</label>
                    @error('salas')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="banheiros" id="banheiros" value="{{old("banheiros")}}" />
                    <label for="banheiros">Banheiros</label>
                    @error('banheiros')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="dormitorios" id="dormitorios" value="{{old("dormitorios")}}" />
                    <label for="dormitorios">Dormitorios</label>
                    @error('dormitorios')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="garagens" id="garagens" value="{{old("garagens")}}" />
                    <label for="garagens">Garagens</label>
                    @error('garagens')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="descricao" id="descricao" value="{{old("descricao")}}" />
                    <label for="descricao">Descricao</label>
                    @error('descricao')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="preco" id="preco" value="{{old("preco")}}" />
                    <label for="preco">Preco</label>
                    @error('preco   ')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <select name="cidade_id" id="cidade_id">
                        <option value="" disabled selected> selecione uma cidade</option>
                        @foreach ($cidades as $cidade)
                            <option value="{{$cidade->id}}">{{$cidade->name}}</option>
                        @endforeach
                    </select>
                    <label for="cidade_id">Cidade</label>
                    @error('cidade_id')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="tipo_id" id="tipo_id" value="{{old("tipo_id")}}" />
                    <label for="tipo_id">Tipo_id</label>
                    @error('tipo_id')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>

                <div class="input-field">
                    <input type="text" name="finalidade_id" id="finalidade_id" value="{{old("finalidade_id")}}" />
                    <label for="finalidade_id">Finalidade_id</label>
                    @error('finalidade_id')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>
            

            <div class="right-align">
                <a href="{{route("imovel.index")}}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection


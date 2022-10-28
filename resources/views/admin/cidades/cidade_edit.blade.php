@extends('admin.layouts.default')

@section('content')
    

    <section class="section">
        <form action="{{route("cidade.update", $cidade->id)}}" method="POST">
            @csrf
            @method("PUT")
            
                <div class="input-field">
                    <input type="text" name="name" id="name" value="{{old("name", $cidade->name)}}" />
                    <label for="name">Nome</label>
                    @error('name')
                        <div class="red-text text-accent-3"><small>{{$message}}</small></div>
                    @enderror
                </div>
            

            <div class="right-align">
                <a href="{{route("cidade.index")}}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection
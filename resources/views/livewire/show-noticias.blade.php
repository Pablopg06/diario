<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Noticias') }}
        </h2>
    </x-slot>
    {{$search}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="card">
            <div class="card-body">
                <div class="px-6 py-4">
                    <x-jet-input class="w-full" type="text" wire:model="search" placeholder="Busque noticia"/>

                    
                </div>
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th class="text-center">Titulo</th>
                            {{--<th class="text-center">Acciones</th>--}}
                            <th class="text-center">Publicar noticia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($noticias as $noticia)
                            <tr>
                                <td>{{$noticia->titulo}}</td>
                                {{--<td style="display: flex;">
                                    <a class="btn btn-xs btn-default text-success mx-1 shadow" href="{{route('noticias.show', compact('noticia'))}}" title="Ver noticia">
                                        <i class="fa fa-lg fa-fw fa-eye"></i>
                                    </a>

                                    <a class="btn btn-xs btn-default text-primary mx-1 shadow" href="{{route('noticias.edit',compact('noticia'))}}" title="Editar">
                                        <i class="fa fa-lg fa-fw fa-pen"></i>
                                    </a>

                                    <form action="{{route('noticias.destroy',$noticia)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-xs btn-default text-danger mx-1 shadow" type="submit">
                                            <i class="fa fa-lg fa-fw fa-trash"></i>
                                        </button>
                                    </form>   
                                </td>--}}
                                <td>
                                    <div class="form-check form-switch">
                                        <input data-id="{{$noticia->id}}" class="form-check-input" type="checkbox" role="switch" 
                                        {{$noticia->publicar ? 'checked' : ''}}>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

</div>

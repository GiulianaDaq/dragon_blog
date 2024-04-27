
<x-layout>
    <div class="top-su-header">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h2>{{$adventure->title}}</h2>
                    @if ($adventure->tags)
                    @foreach ($adventure->tags as $tag)
                        <span>{{$tag->name}}</span>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
        <div class="container my-5 shadow">
            <div class="row">
                <div class="col-12 col-md-6 p-3">
                    <img src="{{Storage::url($adventure->image)}}" alt="{{$adventure->title}}" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 p-3">
                    <h4>Descrizione</h4>
                    <p>{{$adventure->description}}</p>
                    <h4>Difficoltà livello</h4>
                    <p>{{$adventure->difficulty_level}}</p>
                    <h4>Categoria drago</h4>
                    @if ($adventure->category)
                        <p >
                            <a href="{{ route('adventure.index-category', $adventure->category) }}" class="text-dark">{{$adventure->category->name}}</a>
                        </p>
                        @else 
                        <p>Categoria non specificata</p>
                    @endif

            {{-- <small> {{$adventure->category->name ?? 'Categoria non specificata'}}</small> --}}
                    <h4>Inserita il:</h4>
                    <p> {{$adventure->created_at->format('d/m/Y')}} </p>
                    <h4>da</h4>
                    <p> {{$adventure->user->name}}</p>
                    {{-- @if ($adventure->tags)
                        @foreach ($adventure->tags as $tag)
                            <span>{{$tag->name}}</span>
                        @endforeach
                    @endif --}}
                </div>
            </div>
            <dov class="row">
                <div class="col-12 col-md-12">
                    <a href="{{route('user.profile')}}"><h2>Torna al profilo</h2></a>
                </div>
            </dov>
    </div>
</div>
</x-layout>
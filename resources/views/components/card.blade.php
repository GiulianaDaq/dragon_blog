<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($adventure->image)}}" class="card-img-top" alt="{{$adventure->title}}">
    <div class="card-body">
        <h5 class="card-title">{{$adventure->title}}</h5>
        {{-- <small> {{$adventure->category->name ?? 'Categoria non specificata'}}</small> --}}
        @if ($adventure->category)
            <h6 class="card-title">
                <a href="{{ route('adventure.index-category', $adventure->category) }}" class="text-dark">
                    {{$adventure->category->name }}
                </a>
            </h6>
        @else
        <h6>
       
            Nessuna categoria
        
        </h6>
        @endif
        <a href="{{route('adventure.show', $adventure)}}" class="btn btn-custom">Dettaglio</a>
    </div>
    <div class="card-footer">
        <small class="text-body-secondary">Inserita: {{$adventure->created_at->diffForHumans()}}</small>
    </div>
</div>
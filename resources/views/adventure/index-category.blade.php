<x-layout>
    <div class="container my-5 top-su-header">
        <div class="row">
            <div class="col-12">
                <h2>{{$category->name}}</h2>
            </div>
        </div>
    </div>

    <div class="container my-5 top-su-header">
        <div class="row">
            @forelse ($category->adventures as $adventure)
                <div class="col-12 col-md-3">
                    <x-card :adventure="$adventure" />
                </div>
            @empty
                <p>Non ci sono avventure. <a href="{{route('adventure.create')}}">Inseriscine una</a></p>
            @endforelse
        </div>
    </div>
</x-layout>
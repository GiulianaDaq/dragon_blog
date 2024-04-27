<div>
  
    {{-- scegliamo la visualizzazione non a card ma a griglia a tabella e qui inseriamo la gestione delle avventure ovvero dettaglio, modifica e cancellazione --}}
    <div class=" position-relative top-su-header ">
        <h2>List adventure</h2>

         @if (session('adventureDeleted'))
            <div class="alert alert-success">
              {{ session('adventureDeleted') }}
            </div>
          @endif

          @if (session('adventureCreated'))
            <div class="alert alert-success">
              {{ session('adventureCreated') }}
            </div>
        @endif
        <div class="row ">
          <div class="col-12 col-md-12 text-center">
           <a href="{{route('adventure.create')}}" class="btn btn-custom m-5">Inserisci un avventura </a>
          </div>
        </div>

          <table class="table bg-grigio-light">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Creato il</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach (Auth::user()->adventures as $adventure)
                <tr>
                  <th scope="row">{{$adventure->id}}</th>
                  <td>{{$adventure->title}}</td>
                  <td>{{ $adventure->created_at->format('d/m/Y, H:m') }}</td>
                  <td>
                     <a href="{{route('adventure.show', $adventure)}}" class="btn btn-success">Dettaglio</a> 
                    <a href="{{route('adventure.edit', $adventure)}}" class="btn btn-warning">Modifica</a> 
                    <a wire:click="destroy({{$adventure}})" class="btn btn-danger">Elimina</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
         </table>
        </div>
        </div>
        {{-- div chiusura component --}}
        </div>
       
    
    

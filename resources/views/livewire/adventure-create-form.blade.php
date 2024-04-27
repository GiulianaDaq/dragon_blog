
<div>
  {{-- Stop trying to control. --}}
  
  {{-- form inserimento dati: usando livewire al posto di name inseriremi wire:model --}}
  <div class=" top-su-header p-5">
    <h2>Insert adventure</h2>
    <form class="shadow p-5 bg-grigio-light" wire:submit="store">
      
      @if (session('adventureCreated'))
      <div class="alert alert-success">
        {{ session('adventureCreated') }}
      </div>
      @endif
      
      {{-- action sostituito da wire:submit="store" --}}
      {{-- il @csrf token non serve più --}}
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" wire:model.live="title">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" wire:model.live="description">
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      
      <div class="mb-3 ">
        <label for="difficulty_level" class="form-label">Difficulty level</label>
        <input type="number" class="form-control" id="difficulty_level" wire:model.live="difficulty_level">
        @error('difficulty_level')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      {{-- categoria drago --}}
      <div class="mb-3">
        <label class="form-label">Category dragon</label>
        <select class="form-select" wire:model="category_id">
            <option selected hidden >Seleziona una categoria</option>
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{ $category->name }}</option>
              @endforeach
        </select>
        @error('category_id')
                <span class="text-danger">{{$message}}</span>
        @enderror
       </div>
    {{-- inserimento tags --}}
    <div class="mb-3">
      <label for="title" class="form-label">Tags</label>
      @foreach ($tags as $tag )
        <div class="form-check">
          <input class="form-check-input"  type="checkbox" value="{{$tag->id}}" id="{{$tag->id}}" wire:model="name_tag" >
            <label class="form-check-label" for="{{$tag->id}}">
            {{$tag->name}}
            </label>
          </input>
        </div>
      @endforeach
    
    </div>

      {{-- casella inserimento immagini --}}
      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input type="file" class="form-control" id="image" wire:model="image">
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror
       </div>
       @if ($image)
    <div class="mb-3">
        <label class="form-label">Preview immagine</label>
        <img src="{{$image->temporaryUrl()}}" class="img-fluid" alt="">
    </div>
   
    @endif
        <button type="submit" class="btn btn-custom">Insert</button>
  </form>
    </div>
    {{-- chiusura div component --}}
  </div>
  
  
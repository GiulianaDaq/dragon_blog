<x-layout>
<x-slot name='title'>Profilo utente </x-slot>

<div class="container ">
    <div class="row top-su-header">
        <div class="col-12 col-md-12">
            <h2>User Profile</h2>
        </div>
    </div>
    <div class="row top-su-header">
        <div class="col-12 col-md-12">
                {{-- username --}}
                <h3>Username:&nbsp   {{ Auth::user()->name }}</h3>
                
                {{-- indirizzo mail  --}}
                <h3>mail:&nbsp  {{ Auth::user()->email }}</h3>

            

        </div>
    </div>
    <hr>
    <div class="row ">
        <div class="col-12 col-md-12">
                {{-- mostra le avventure inserite da lui --}}
                <h2>Adventure profile - avventure inserite da {{Auth::user()->name}}</h2>
              
              <livewire:adventure-list />
        </div>
    </div>
</div>





</x-layout>
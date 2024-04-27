<x-layout>
    {{-- registrazione quindi nome utente, mail e password --}}
    <div class="container-fluid vh-100 ">
        <div class="row  align-content-center">
            <div class="col-12 d-flex justify-content-center ">
                
                <div class="top-su-header p-5">
                    <h2>Register</h2>
                    <form class="p-5 shadow bg-grigio-light" action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name_user" class="form-label">Username</label>
                            <input type="email" name="name" class="form-control" id="name_user">
                            @error('name')
                            <p>{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email utente</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                            @error('email')
                            <span class="text-danger alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            @error('password')
                            <span class="text-danger alert-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                            {{-- se la password non coincide l'errore viene visualizzato sotto alla password quindi il controllo seguente risulta inutile --}}
                            {{-- @error('password_confirmation')
                            <span class="text-danger alert-danger">{{$message}}</span>
                            @enderror --}}
                        </div>
                        <button type="submit" class="btn btn-custom">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
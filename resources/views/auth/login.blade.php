<x-layout>
    {{-- <div class="row h-100 align-content-center">
                        <div class="col-12 d-flex justify-content-center  ">
                                <h1>Bootstrap Component</h1>
                        </div>
                </div> --}}
    {{-- form di login quindi mail e password --}}
    <div class="container-fluid vh-100 ">
    <div class="row  align-content-center">
        <div class="col-12 d-flex justify-content-center ">
            <div class="top-su-header p-5">
                <h2>Login</h2>
                <form class="p-5 shadow  bg-grigio-light "  action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email utente</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                        @error('email')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        @error('password')
                        <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-custom">Accedi</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title ?? "Dragons Adventures"}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="body-custom ">
    <x-navbar/>
{{-- nel caso l'utente voglia accedere a qualcosa non creato da lui --}}
    @if(session('denied'))
    <div class="alert alert-danger">
        {{ session('denied') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <x-header/>
    <div class="vh-stacco-sfondi">
        
        {{ $slot }}
    </div>  
    
    <div class=" min-vh-100 position-relative secondary-pattern"> 
        {{-- solo immagine di sfondo --}}
    </div>
    
    
    
    {{-- non lo posso mettere generico nel layout perchè nel component non posso inserire x-layout perchè il component deve essere racchiuso da un unico tag es un div, e se si mettono cose dopo il tag non vengono "viste". Anche se si mette al posto del tag div, il tag x-layout non viene preso --}}
    {{-- messaggio di avvenuto inserimento dell'articolo --}}
    {{-- @if (session('adventureCreated'))
    <div class="alert alert-success">
        {{ session('adventureCreated') }}
    </div>
    @endif --}}
    
    
    
</body>
<x-footer />


</html>
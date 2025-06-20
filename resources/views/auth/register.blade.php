<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- style --}}
    <link rel="stylesheet" href={{asset('css/app.css')}}>
    <title>Registrati</title>
</head>
<body>
    <div class="container-fluid text-center" style="min-height: 75vh">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h1 class="pt-5">{{ __('ui.Registrati')}}</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3 mt-3">
                        <label for="exampleInputEmail1" class="form-label"><h5>{{ __('ui.Inserisci il tuo nome')}}</h5></label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"><h5>{{ __('ui.Inserisci la tua email')}}</h5></label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="mypassword" class="form-label"><h5>{{ __('ui.Inserisci una password')}}</h5></label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-5">
                        <label for="mypassword2" class="form-label"><h5>{{ __('ui.Conferma password')}}</h5></label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    {{-- <div class="mb-5">
                        <label for="is_revisor" class="form-label"><h5>{{ __('ui.Account revisore')}}</h5></label>
                        <input type="checkbox" name="is_revisor">
                    </div> --}}
                    <div class="mb-4 d-flex justify-content-around">
                        <button type="submit" class="btn mybtn mb-5">{{ __('ui.Registrati')}}</button>
                        <a href="{{route('homepage')}}" class="primary" style="height: 38px"><i class="fas fa-home" style="position: relative; font-size:38px"></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<x-footer>
</x-footer>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
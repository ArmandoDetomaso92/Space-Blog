<x-layout>
    <div class="container mt-5 my-5">
        <h3 class=" display-1 ms-5 text-mix">Registrati qui</h3>
        <div class="row justidy-content-center ">
            <div class="col-12 mt-5 ">
                <form class="p-5 shadow" method="POST" action="{{route('register')}}">
                    {{-- @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div> 
                        @endif          --}}

                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fs-3 text-white">Nome utente</label>
                            <input type="text" name="name" class="form-control  @error('name', 'post') is-invalid @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label fontor fs-3 text-white">Indirizzo email</label>
                            <input type="email" name="email" class="form-control @error('email', 'post') is-invalid @enderror"" id="email" value="{{old('email')}}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="password" class="form-label  fs-3 text-white">Password</label>
                            <input  type="password" name="password" id="password" class="form-control @error('password', 'post') is-invalid @enderror">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label  fs-3 text-white">Conferma password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation', 'post') is-invalid @enderror">
                            @error('password_confirmation')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btnor bviola text-white fs-5">Registrati</button>
                        <button href="{{route('homepage')}}" class="btn btn-outline-dark text-white fs-5">Torna alla homepage</button>
                    </form>                
                </div>
            </div>
        </div>
    </x-layout>
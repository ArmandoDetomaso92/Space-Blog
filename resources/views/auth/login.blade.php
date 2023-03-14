<x-layout>
    <div class="container mt-5 my-5">
        <h3 class=" display-1 ms-5 text-center text-mix">Registrati</h3>
        <div class="row justidy-content-center ">
            <div class="col-12 mt-5 ">
                <form class="p-5 shadow" method="POST" action="{{route('login')}}">
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
                            <label for="email" class="form-label fontor fs-3 text-white">Indirizzo email</label>
                            <input type="email" name="email" class="form-control @error('email', 'post') is-invalid @enderror" id="email" value="{{old('email')}}">
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

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label text-white" for="remember">Ricordami</label>
                        </div>


                        <button type="submit" class="btn btnor  bviola text-white fs-5">Accedi</button>
                        <a href="{{route('homepage')}}" class="btn btn-outline-dark text-white fs-1">Torna alla homepage</a>

                    </form>                
                </div>
            </div>
        </div>
    </x-layout>
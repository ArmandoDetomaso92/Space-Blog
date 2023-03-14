<x-layout>
    <div class="container mt-5 my-5">
        <h3 class=" display-1 ms-5 text-center text-white font2">Space Blog</h3>
        <h5 class="ms-5 text-center text-white mt-5 display-5 text-mix">Inserisci qui il tuo articolo</h5>
        <div class="row justidy-content-center ">
            <div class="col-12 mt-5 ">
                <form class="p-5 shadow" method="POST" action="{{route('sell.store')}}" enctype="multipart/form-data">
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
                            <label for="name" class="form-label fontor fs-3 text-white"> Titolo</label>
                            <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="price" class="form-label fontor fs-3"> Prezzo</label>
                            <input type="double" name="price" class="form-control @error('price', 'post') is-invalid @enderror" id="price" value="{{old('price')}}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="cover" class="form-label fontor fs-3 text-white"> Immagini</label>
                            <input type="file" name="cover" class="form-control @error('cover', 'post') is-invalid @enderror" id="cover" value="{{old('cover')}}">
                            @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label fontor fs-3 text-white"> Testo articolo</label>
                            <textarea type="text" name="description" rows="20" cols="50" class="form-control @error('description', 'post') is-invalid @enderror" id="description" value="{{old('description')}}"></textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btnor bviola text-white ">Inserisci articolo</button>
                        
                    </form> 
                    <div class="d-flex flex-row-reverse me-5">
                        <form action="{{route('sell.index')}}">
                            <button href="{{route('sell.index')}}" class="btn btn-outline-dark text-white fs-5 ">Torna al blog</button>
                        </form>  
                    </div>             
                </div>
            </div>
        </div>
    </x-layout>
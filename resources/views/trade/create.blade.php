<x-layout>
    <div class="container mt-5 my-5">
        <h3 class=" display-1 ms-5 text-center text-mix">Inserisci una nuova asta</h3>
        <div class="row justidy-content-center ">
            <div class="col-12 mt-5 ">
                <form class="p-5 shadow" method="POST" action="{{route('trade.store')}}" enctype="multipart/form-data">
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
                        {{-- <div class="mb-3">
                            <label for="name" class="form-label fontor fs-3"> Nome asta</label>
                            <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" id="name" value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
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
                        {{-- <div class="mb-3">
                            <label for="description" class="form-label fontor fs-3"> Descrizione</label>
                            <textarea type="text" name="description" class="form-control @error('description', 'post') is-invalid @enderror" id="description" value="{{old('description')}}"></textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <button type="submit" class="btn btnor bviola text-white ">Inserisci immagine</button>
                        
                </form>  
                    <div class="d-flex flex-row-reverse me-5">
                            <form action="{{route('trade.index')}}">
                                <button href="{{route('trade.index')}}" class="btn btn-outline-dark text-white fs-5">Torna alla galleria</button>
                            </form> 
                    </div>                               
                </div>
            </div>
        </div>
    </x-layout>
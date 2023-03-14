<x-layout>
    <div class="container mt-5 my-5">
        <h3 class=" display-1 ms-5 text-center">Modifica articolo</h3>
        <div class="row justidy-content-center ">
            <div class="col-12 mt-5 ">
                <form class="p-5 shadow" method="POST" action="{{route('sell.update', compact('sell'))}}" enctype="multipart/form-data">
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
                        @method('put')
                        <div class="mb-3">
                            <label for="name" class="form-label fontor fs-3 text-white"> Titolo</label>
                            <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" id="name" value="{{$sell->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="price" class="form-label fontor fs-3"> Prezzo</label>
                            <input type="double" name="price" class="form-control @error('price', 'post') is-invalid @enderror" id="price" value="{{$sell->price}}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label for="existingCover" class="form-label fontor fs-3 text-white"> Immagine attuale</label>
                            <img src="{{Storage::url($sell->cover)}}" class="img-fluid" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label fontor fs-3 text-white"> Immagini</label>
                            <input type="file" name="cover"  class="form-control @error('cover', 'post') is-invalid @enderror" id="cover">
                            @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label fontor fs-3 text-white"> Descrizione</label>
                            <textarea type="text" name="description" class="form-control @error('description', 'post') is-invalid @enderror" rows="20" cols="50" id="description" >{{$sell->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn bviola text-white fs-5 font1 ">Modifica annuncio</button>
                        
                    </form>  
                    <a href="{{route('sell.index')}}" class="btn btn-outline-dark text-white fs-5 font1">Indietro</a>              
                </div>
            </div>
        </div>
    </x-layout>
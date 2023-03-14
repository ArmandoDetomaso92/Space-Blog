<x-layout>
    <div class="container mt-5 my-5">
        <h3 class=" display-1 ms-5 text-center">Modifica immagine</h3>
        <div class="row justidy-content-center ">
            <div class="col-12 mt-5 ">
                <form class="p-5 shadow" method="POST" action="{{route('trade.update', compact('trade'))}}" enctype="multipart/form-data">
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
                        {{-- <div class="mb-3">
                            <label for="name" class="form-label fontor fs-3"> Nome casa</label>
                            <input type="text" name="name" class="form-control @error('name', 'post') is-invalid @enderror" id="name" value="{{$trade->name}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        {{-- <div class="mb-3">
                            <label for="price" class="form-label fontor fs-3"> Prezzo</label>
                            <input type="double" name="price" class="form-control @error('price', 'post') is-invalid @enderror" id="price" value="{{$trade->price}}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
{{-- 
                        <div class="mb-3">
                            <label for="existingCover" class="form-label fontor fs-3"> Immagine attuale</label>
                            <img src="{{Storage::url($trade->cover)}}" alt="">
                        </div> --}}
                        <div class="mb-3">
                            <label for="cover" class="form-label fontor  text-white fs-3"> Immagini</label>
                            <input type="file" name="cover" class="form-control @error('cover', 'post') is-invalid @enderror" id="cover">
                            @error('cover')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label for="description" class="form-label fontor fs-3"> Descrizione</label>
                            <textarea type="text" name="description" class="form-control @error('description', 'post') is-invalid @enderror" rows="3" id="description" >{{$trade->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}
                        <button type="submit" class="btn bviola text-white fs-5 font1 ">Modifica</button>
                        <button href="{{route('trade.index')}}" class="btn btn-outline-dark text-white fs-5 font1">Indietro</button>
                    </form>                
                </div>
            </div>
        </div>
    </x-layout>
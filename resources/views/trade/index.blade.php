<x-layout>

    <li class="nav-item">
        <a class="nav-link active fs-4 mx-2 text-white "  href="{{route('trade.create')}}">Inserisci immagine <i class="bi bi-plus white fs-3"></i></a>
    </li>

    @if(session('tradeCreated'))
    <div class="alert alert-success">
        {{session('tradeCreated')}}
    </div>
    @endif
    @if(session('tradeUpdated'))
    <div class="alert alert-success">
        {{session('tradeUpdated')}}
    </div>
    @endif

    <div class="container my-5 ">
        <div class="row justify-content-center">
    
        @if(count($trades))
                @foreach ($trades as $trade)
                    <div class="col-12 col-md-3 image-container">
                        <div class="card h-100 ">
                            <img src="{{Storage::url($trade->cover)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            {{-- <h5 class="card-title">{{$trade->name}}</h5>
                            <p class="card-text">{{$trade->price}}</p>
                            <p class="card-text">{{$trade->description}}</p> --}}
                            {{-- <a href="{{route('trade.show', compact('trade'))}}" class="btn btn-primary">Scopri di più</a> --}}
                            <a href="{{route('trade.edit', compact('trade'))}}" class="btn text-white ">Modifica immagine</a>
                            <form action="{{route('trade.destroy',compact('trade'))}}" method="POST">
                            @csrf
                            @method('delete') 
                            <button type="submit" class="btn text-danger text-start">Elimina </button>
                            </form>
                            </div>
                        </div> 
                    </div>  
                @endforeach
                @else
        <div class="col-12">
            <h2>Non sono stati ancora inserite immagini</h2>
            </div> 
        @endif           
        </div>
    </div>


</x-layout>
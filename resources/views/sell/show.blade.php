<x-layout>   
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 ">
                <img src="{{Storage::url($sell->cover)}}" class="card-img-top2 w-100">               
            </div>
            <div class="col-12 col-md-6 m-5">
                <h5 class="card-title text-white fs-1 mb-3 font1 fw-bold mb-5 text-mix">{{$sell->name}}</h5>
                    {{-- <p class="card-text">{{$sell->price}}</p> --}}
                    <p class="card-text text-white fs-3 font1">{{$sell->description}}</p>  
                    <div class="card-footer">
                        <a href="{{(route('sell.index'))}}" class="btn bviola text-white fs-5 font1 font1">Torna indietro</a>
                        <a href="{{route('sell.edit', compact('sell'))}}" class="btn btn-light fs-5 font1">Modifica articolo</a>
                        <form action="{{route('sell.destroy',compact('sell'))}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger fs-5 font1">Elimina articolo</button>          
                        </form>
                    </div>                                   
            </div>
        </div>
    </div> 
    </x-layout>
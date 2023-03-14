<x-layout>   
    @if(session('sellCreated'))
    <div class="alert alert-success">
        {{session('sellCreated')}}
    </div>
    @endif
    @if(session('sellUpdated'))
    <div class="alert alert-success">
        {{session('sellUpdated')}}
    </div>
    @endif
        <div class="container my-5">
            <div class="row justify-content-center">      
            @if(count($sells))
                    @foreach ($sells as $sell)
                        <div class="col-12 col-md-3 mt-5">
                            <div class="card h-100 ">
                                <img src="{{Storage::url($sell->cover)}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-white font1">{{$sell->name}}</h5>
                                    {{-- <p class="card-text">{{$sell->price}}</p> --}}
                                    <p class="card-text text-white font1">{{ Str::limit($sell->description, 200) }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('sell.show', compact('sell'))}}" class="btn bviola text-white fs-5 font1">Continua a leggere</a>
                                    {{-- <a href="{{route('sell.edit', compact('sell'))}}" class="btn btn-warning fs-5">Modifica articolo</a>
                                    <form action="{{route('sell.destroy',compact('sell'))}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger fs-5">Elimina articolo</button>           --}}
                                    </form>
                                </div>
                            </div> 
                        </div>  
                    @endforeach
                    @else
            <div class="col-12">
                <h2>Non sono stati ancora inseriti annunci</h2>
                </div> 
            @endif           
            </div>
        </div>
</x-layout>
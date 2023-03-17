<x-layout>
    <div class="container-fluid pt-5 sfondocontattaci min-vh-100">
        <h3 class="fontuno fontor display-1 ms-5 text-white text-center pt-5 ">Contattaci</h3>
        <div class="row justify-content-center nero ">
            <div class="col-8 mt-5 ">

                @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif



                    <form class="p-5 shadow" method="POST" action="{{route('contact_us_submit')}}">
                @csrf
                    <div class="mb-3">
                        <label for="nome" class="form-label text-white fs-2 ">Nome</label>
                        <input type="text" name="name" class="form-control " id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fontor fs-2 text-white">Indirizzo email</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fs-2 text-white">Richiedi qui le tue info</label>
                        <textarea name="message" id="message" cols="20" rows="8" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn bviola text-white ">Contattaci</button>
                    <button href="{{route('homepage')}}" class="btn btn-outline-dark text-white ">Torna alla homepage</button>
                    </form>               
            </div>
        </div>
    </div>
</x-layout>

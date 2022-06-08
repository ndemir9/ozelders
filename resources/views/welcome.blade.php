<x-guest-layout>
    <div class="col-md-8 mx-auto my-5">
        <div class="row">
            <h1 class="my-5">Eğitimler</h1>
                @foreach($dersler as $ders)
                <div class="col-md-4 mb-3">
                    <div class="col-md-12">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ Storage::url($ders->image) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ders->dersadi }}</h5>
                                <p class="card-text">{{ $ders->derskonusu }}</p>
                                <a href="{{ route('dersler.show', $ders->id) }}" class="btn btn-primary">Detaylı bilgi</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</x-guest-layout>

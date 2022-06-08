<x-guest-layout>
    <div class="container my-5">
        <div class="row">
            <div>
                <img src="{{ Storage::url($dersler->image) }}" class="img-fluid  rounded-lg" style="height: 400px;">
            </div>
            <h1>{{ $dersler->dersadi }}</h1>
            <div>Eğitmen adı: {{ $dersler->ogretmenadi }}</div>
            <div>İletişim numarası: {{ $dersler->telefonnumarasi }}</div>
            <p>
            Ders konusu: {{ $dersler->derskonusu }}
            </p>
        </div>
    </div>
</x-guest-layout>

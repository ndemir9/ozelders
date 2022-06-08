<x-app-layout>
    <x-slot name="header">
        <h2>yeni ders ekle</h2>
    </x-slot>

    <div class="container my-5">
        <form method="POST" action="{{ route('ders.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Ders adı</label>
                <input type="text" id="dersadi" name="dersadi" class="form-control">
            </div>
            <div class="mb-3">
                <label>Ders Konusu</label>
                <input type="text" id="derskonusu" name="derskonusu" class="form-control">
            </div>
{{--            <div class="mb-3">--}}
{{--                <label>Ders görseli</label>--}}
{{--                <input type="file" class="form-control">--}}
{{--            </div>--}}
            <div class="mb-3">
                <label>ögretmen adı</label>
                <input type="text" id="ogretmenadi" name="ogretmenadi" class="form-control">
            </div>
            <div class="mb-3">
                <label>Telefon numarası</label>
                <input type="text" id="telefonnumarasi" name="telefonnumarasi" class="form-control">
            </div>

            <div class="mb-3">
                <label>Ders görseli</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">dersi ekle</button>
        </form>
    </div>
</x-app-layout>

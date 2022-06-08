<x-app-layout>
    <x-slot name="header">
        <h2 class="my-3">Ders ekle</h2>
    </x-slot>

    <div class="container my-5">
        <div class="my-4"><a href="{{ route('ders.create') }}" class="btn btn-primary text-right">Ders ekle</a></div>


        <div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Ders adı</th>
                    <th scope="col">Ders konusu</th>
                    <th scope="col">Ögretmen adı</th>
                    <th scope="col">Telefon numarası</th>
                    <th scope="col">Resim</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($dersler as $ders)
                <tr>
                    <th scope="row">{{ $ders->dersadi }}</th>
                    <td>{{ $ders->derskonusu }}</td>
                    <td>{{ $ders->ogretmenadi }}</td>
                    <td>{{ $ders->telefonnumarasi }}</td>
                    <td>
                        <img src="{{ Storage::url($ders->image) }}"
                             class="img-fluid" style="height: 100px">
                    </td>
                    <td>
                        <form
                            method="POST"
                            action="{{ route('ders.destroy', $ders->id) }}"
                            onsubmit="return confirm('Silmek istediğinize emin misiniz ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">sil</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>

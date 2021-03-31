<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>
<body>
    <h5 class="card-title">Jadwal</h5>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Mahasiswa ID</th>
                <th scope="col">Dosen ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Awal</th>
                <th scope="col">Akhir</th>
                <th scope="col">Tombol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwal as $j)
            <tr>
                <td>{{ $j->id }}</td>
                <td>{{ $j->mahasiswa_id }}</td>
                <td>{{ $j->dosen_id }}</td>
                <td><a href="{{ route('jadwal.find', $j->id) }}"> {{ $j->judul }}</a></td>
                <td>{{ $j->deskripsi }}</td>
                <td>{{ $j->awal }}</td>
                <td>{{ $j->akhir }}</td>
                <td>
                    <a href="{{ route('jadwal.edit', $j->id) }}" class="btn btn-warning btn-sm">ubah</a>
                    <form method="POST" action="{{ route('jadwal.delete',$j->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger btn-sm">delete</button>
                    </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('jadwal.create') }}" class="btn btn-primary">Input Jadwal Baru</a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
</head>
<body>
    <form method="post" action="{{ route('jadwal.store') }}">
      {{ csrf_field() }}
        <div class="form-group">
          <label>Mahasiswa ID</label>
          <select class="form-control" name="mahasiswa_id">
            @foreach($mahasiswa as $m)
            <option>{{ $m->id }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
            <label>Dosen ID</label>
            <select class="form-control" name="dosen_id">
              @foreach($dosen as $d)
              <option>{{ $d->id }}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>judul</label>
            <input type="text" class="form-control" name="judul" placeholder="masukan judul">
        </div>
        <div class="form-group">
          <label>deskripsi</label>
          <textarea class="form-control" name="deskripsi" rows="3"></textarea>
        </div>
        <label>Jadwal Awal</label><br>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label>tahun</label>
            <select name="tahunAwal" class="form-control">
              <option selected>2020</option>
              <option>2021</option>
              <option>2022</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Bulan</label>
            <select name="bulanAwal" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<13;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Tanggal</label>
            <select name="tanggalAwal" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<31;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Jam</label>
            <select name="jamAwal" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<25;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Menit</label>
            <select name="menitAwal" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<61;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
        </div><br>
        <label>Jadwal Akhir</label><br>
        <div class="form-row">
          <div class="form-group col-md-2">
            <label>tahun</label>
            <select name="tahunAkhir" class="form-control">
              <option selected>2020</option>
              <option>2021</option>
              <option>2022</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Bulan</label>
            <select name="bulanAkhir" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<13;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Tanggal</label>
            <select name="tanggalAkhir" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<31;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Jam</label>
            <select name="jamAkhir" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<25;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div class="form-group col-md-2">
            <label>Menit</label>
            <select name="menitAkhir" class="form-control">
              <option selected>01</option>
              @for ($i=2;$i<61;$i++)
              <option>{{ $i }}</option>
              @endfor
            </select>
          </div>
        </div>  
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
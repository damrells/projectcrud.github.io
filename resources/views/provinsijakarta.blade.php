<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data | Pegawai</title>
  </head>
  <body>
    <h2 class="text-center mb-3">Data Pegawai</h2>

    <div class="container">
    <a href="/tambahpegawai" class="btn btn-success mb-3">Tambah Data</a>
    
    <div class="row g-3 justify-content-top col-auto">
    <a href="{!! route('data.export-filter') !!}" class="btn btn-success">
    <i class="la la-download"></i>
    Export Filter
    </a>

    </div>

    <div class="row g-3 align-items-center mt-2 mb-3">
      <div class="col-auto">
        <form action="/provinsijakarta" method="GET">

          <div class="input-group mb-3">
          <input type="search" class="form-control" placeholder="Search.." name="search" value="{{ request('$search') }}">
          <button class="btn btn-danger" type="submit">Search</button>  


        <div class="dropdown show col-md-3">
          <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pilih Kota
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/provinsijakarta?search=kalideres{{ request('$search')}}">Kalideres</a>
            <a class="dropdown-item" href="/provinsijakarta?search=kebayoran{{ request('$search')}}">Kebayoran</a>
          </div>
        </div>

        
                  
        </div>
        </form>
      </div>    
    </div>


    <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{ $message }}
            </div>
            @endif

    <table>
    <thead>
    <tr>
        <th scope="col">Nama</th>
        <th scope="col">Foto</th>
        <th scope="col">NIP</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Kota</th>
        <th scope="col">Telepon</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    @php
        $no = 1;
      @endphp
        @foreach ($data as $index => $row)
        <tr>
            <td>{{ $row->nama }}</td>
            <td><a href="/fotopegawai/{{ $row->foto }}"><img src="{{ asset('fotopegawai/'.$row->foto) }}" alt="" style="width: 40px;"></a></td>
            <td>0000{{ $row->nip }}</td>
            <td>{{ $row->provinsi }}</td>
            <td>{{ $row->kota }}</td>
            <td>0{{ $row->telepon }}</td>
            <td>
            <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
            <a href="/lihatdata/{{ $row->id   }}"  class="btn btn-success">View</a>
            </td>
        </tr>
        </tr>
    @endforeach
    </tbody>
</table>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
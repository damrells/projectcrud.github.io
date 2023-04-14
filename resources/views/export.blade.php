

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data | Pegawai</title>
  </head>
  <body>



  <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{ $message }}
            </div>
            @endif
        <table class="table">
    <thead>
    <tr>
      <th scope="col">NO</th>
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
            <th scope="row">{{ $index + $data->firstItem() }}</th>
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
        @endforeach
    </tbody>
    </table>
      {{ $data->links() }}
    </div>
    </div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</div>
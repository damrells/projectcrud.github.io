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
    <h2 class="text-center mb-3">Edit Data Pegawai</h2>

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-8">
        <div class="card"> 
          <div class="card-body">
          <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NIP</label>
              <input type="number" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nip }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Provinsi</label>
                </br>
              <select class="form-select" name="provinsi" aria-label="Default select example">
                <option selected>{{ $data->provinsi }}"</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Papua">Papua</option>
                <option value="Sumatra Barat">Sumatra Barat</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kota</label>
              <input type="text" name="kota" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kota }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Telepon</label>
              <input type="number" name="telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->telepon }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> 
          </div>
        </div>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
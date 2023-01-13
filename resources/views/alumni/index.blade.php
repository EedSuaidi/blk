<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto mt-5">
              <div class="card border-0 shadow rounded">
                <div class="card-body">
                  <table class="table" id="myTable">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col">Jurusan</th>
                          <th scope="col">Tahun Lulus</th>
                          <th scope="col">Status</th>
                        </tr>
                      </thead>    
                      <tbody>
                          @foreach ($alumnis as $alumni)
                          <tr>
                              <td scope="col">{{ $loop->iteration }}</td>
                              <td scope="col">{{ $alumni->nama }}</td>
                              <td scope="col">{{ $alumni->jenis_kelamin }}</td>
                              <td scope="col">{{ $alumni->jurusan }}</td>
                              <td scope="col">{{ $alumni->tahun_lulus }}</td>
                              <td scope="col">{{ $alumni->status }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  {{ $alumnis->links() }}
                </div>
              </div>
            </div>
        </div>
    </div>

    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
  </body>
</html>
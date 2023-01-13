<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Edit Data Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/dashboard/alumni/{{ $alumni->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror mt-1" name="nama" value="{{ old('nama', $alumni->nama) }}" placeholder="Masukkan Nama Lengkap">

                                @error('nama')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">NIK</label>
                                <input type="number" class="form-control @error('nik') is-invalid @enderror mt-1" name="nik" value="{{ old('nik', $alumni->nik) }}" placeholder="Masukkan Nomor Induk Kependudukan">
                                
                                @error('nik')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror mt-1" name="alamat" placeholder="Masukkan Alamat Lengkap" rows="3">{{ old('alamat', $alumni->alamat) }}</textarea>
                                
                                @error('alamat')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Jenis Kelamin</label>
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror mt-1" name="jenis_kelamin" aria-label="Default select example">
                                    <option disabled selected>- Pilih Jenis Kelamin -</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                
                                @error('jenis_kelamin')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Jurusan</label>
                                <select class="form-select @error('jurusan') is-invalid @enderror mt-1" name="jurusan" aria-label="Default select example">
                                    <option disabled selected>- Pilih Jurusan -</option>
                                    <option value="Teknik Jaringan Komputer dan Telekomunikasi">Teknik Jaringan Komputer dan Telekomunikasi</option>
                                    <option value="Pengembangan Perangkat Lunak dan Gim">Pengembangan Perangkat Lunak dan Gim</option>
                                    <option value="Busana">Busana</option>
                                    <option value="Otomotif">Otomotif</option>
                                </select>
                                
                                @error('jurusan')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Tahun Lulus</label>
                                <select class="form-select @error('tahun_lulus') is-invalid @enderror mt-1" name="tahun_lulus" aria-label="Default select example">
                                    <option disabled selected>- Pilih Tahun Lulus -</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                </select>
                                
                                @error('tahun_lulus')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">No. Telp</label>
                                <input type="number" class="form-control @error('no_telp') is-invalid @enderror mt-1" name="no_telp" value="{{ old('no_telp') }}" placeholder="Masukkan Nomor Telepon">
                                
                                @error('no_telp')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Sosmed</label>
                                <input type="text" class="form-control @error('sosmed') is-invalid @enderror mt-1" name="sosmed" value="{{ old('sosmed') }}" placeholder="Masukkan Username Facebook/Instagram">
                                
                                @error('sosmed')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Staus</label>
                                <select class="form-select @error('status') is-invalid @enderror mt-1" name="status" aria-label="Default select example">
                                    <option disabled selected>- Kegiatan Setelah Lulus -</option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Kuliah">Kuliah</option>
                                    <option value="Belum Bekerja">Belum Bekerja</option>
                                </select>
                                
                                @error('status')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Nama Tempat Kerja/Kuliah</label>
                                <input type="text" class="form-control @error('nama_industri') is-invalid @enderror mt-1" name="nama_industri" value="{{ old('nama_industri') }}" placeholder="Masukkan Nama Tempat Kerja/Kuliah">
                                
                                @error('nama_industri')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Foto</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                <input type="hidden" value="{{ $alumni->foto }}">
                            
                                @error('foto')
                                    <div class="alert alert-danger mt-2 mb-1">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Rating SMK SA</label>
                                <select class="form-select @error('rating') is-invalid @enderror mt-1" name="rating" aria-label="Default select example">
                                    <option disabled selected>- Pilih Rating untuk SMK SA -</option>
                                    <option value="Sangat Baik">Sangat Baik</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Kurang Baik">Kurang Baik</option>
                                    <option value="Sangat Tidak Baik">Sangat Tidak Baik</option>
                                </select>
                                
                                @error('rating')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold mt-3">Saran untuk SMK SA</label>
                                <input type="text" class="form-control @error('saran') is-invalid @enderror mt-1" name="saran" value="{{ old('saran') }}" placeholder="Berikan Saran untuk SMK SA">
                                
                                @error('saran')
                                <div class="alert alert-danger mt-2 mb-1">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary mt-3">Submit</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
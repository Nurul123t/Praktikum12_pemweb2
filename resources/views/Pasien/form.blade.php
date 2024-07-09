@include('admin.header')
@include('admin.sidebar')

<div class="container-fluid px-4">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New Pasien</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create New Pasien</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Pasien</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('pasien.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="kode">Kode Pasien</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="{{ $pasien->kode }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pasien</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pasien->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $pasien->tmp_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" id="gender1" value="L" {{ $pasien->gender=='L' ? 'checked' : ''}}>
                            <label for="inlineRadio1" class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="gender" id="gender2" value="P" {{ $pasien->gender=='P' ? 'checked' : ''}}>
                            <label for="inlineRadio2" class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" name="alamat" required>
                                {{ $pasien->alamat }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select name="kelurahan_id" class="form-select form-select-lg mb-3" >
                                <option value="">-- Pilih --</option>
                                @foreach($list_kelurahan as $kelurahan)
                                <option value="{{ $kelurahan->id }}">
                                    {{ $pasien->kelurahan_id==$kelurahan->id ? 'selected' : ''}}>{{ $kelurahan->nama }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="id" value="{{ $pasien->id }}" >
                        <a href="{{ route('pasien.index') }}" class="btn btn-success mr-2">Batal</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

@include('admin.footer')
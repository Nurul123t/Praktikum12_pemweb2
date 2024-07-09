@include('admin.header')
@include('admin.sidebar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
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
          <h3 class="card-title">Title</h3>
          <div class="card-body">
                    <h1 class="my-4">Daftar Pasien</h1>
                        <a href="{{ route('pasien.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>Create</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pasien as $pasien)
                                <tr>
                                    <td>{{ $pasien->id }}</td>
                                    <td>{{ $pasien->kode }}</td>
                                    <td>{{ $pasien->nama }}</td>
                                    <td>{{ $pasien->tmp_lahir }}</td>
                                    <td>{{ $pasien->tgl_lahir }}</td>
                                    <td>{{ $pasien->gender }}</td>
                                    <td>{{ $pasien->email }}</td>
                                    <td>{{ $pasien->alamat }}</td>
                                    <td>{{ $pasien->kelurahan->nama }}</td>
                                    <td>
                                    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST">
                                        <a href="{{ route('pasien.view', $pasien->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning">Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
          Start creating your amazing application!
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

  @include('admin.footer')
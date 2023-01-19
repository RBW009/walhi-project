@extends('admin.layouts.main_admin')


@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Proyek Strategis Nasional (PSN)</h1>
                          @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                    <a href="/admin/datapeta/psn/create" class="btn btn-primary">Tambah Data Proyek Strategis Nasional (PSN) </a>
                             <div class="card-body">
                            <div class="table-responsive col-8">
                                <table class="table table-bordered"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Proyek</th>
                                            <th>Lokasi</th>
                                            <th>Ancaman</th>
                                            <th>Deskripsi</th>
                                            <th>Luas Terdampak</th>
                                            <th>Jiwa Terdampak</th>
                                            <th>Aktor</th>
                                            <th>Sumber Dana Proyek</th>
                                            <th>Action</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ( $psn as $p )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->nama_proyek }}</td>
                                            <td>{{  $p->lokasi }}</td>
                                            <td>{{  $p->ancaman }}</td>
                                            <td>{{  $p->deskripsi }}</td>
                                            <td>{{  $p->luas_terdampak }}</td>
                                            <td>{{  $p->jiwa_terdampak }}</td>
                                            <td>{{  $p->aktor }}</td>
                                            <td>{{  $p->sumber_dana }}</td>
                                            <td>
                                           <a href="/admin/datapeta/psn/{{ $p->id }}/edit" class="btn btn-warning "><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="/admin/datapeta/psn/{{ $p->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger" onclick="return confirm('Apakah Kamu Yakin ? ')" ><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>  Copyright &copy; 2022 Pantau Lingkungan</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
@endsection


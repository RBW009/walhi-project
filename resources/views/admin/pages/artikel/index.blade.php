@extends('admin.layouts.main_admin')


@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Artikel</h1>
                      @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show col-8" role="alert">
                                        {{ $message }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endif
                    <a href="/admin/artikel/create" class="btn btn-primary">Tambah Data Artikel </a>
                             <div class="card-body">
                            <div class="table-responsive col-8">
                                <table class="table table-bordered"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Judul</th>
                                            <th>Body</th>
                                            <th>Penulis</th>
                                            <th>Action</th>
                                            </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ( $artikels as $artikel )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $artikel->judul }}</td>
                                            <td>{!!  $artikel->deskripsi !!}</td>
                                            <td>{{ $artikel->penulis }}</td>
                                            <td>
                                           <a href="/admin/artikel/{{ $artikel->id }}/edit" class="btn btn-warning mb-3"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <form action="/admin/artikel/{{ $artikel->id }}" method="post" class="d-inline">
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


@extends('admin.layouts.main_admin')


@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Lapor</h1>
                             <div class="card-body">
                            <div class="table-responsive col-8">
                                <table class="table table-bordered"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Lokasi</th>
                                            <th>Peristiwa</th>
                                            <th>Organisasi</th>
                                            <th>Media</th>
                                            <th>Kontak</th>
                                            <th>Action</th>
                                            </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach ( $lapor as $l )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $l->lokasi }}</td>
                                            <td>{{ $l->peristiwa }}</td>
                                            <td>{{ $l->organisasi }}</td>
                                            <td>{{ $l->media }}</td>
                                            <td>{{ $l->kontak }}</td>
                                            <td>
                                           <a href="#" class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                            <form action="/admin/lapor/{{ $l->id }}" method="post" class="d-inline">
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


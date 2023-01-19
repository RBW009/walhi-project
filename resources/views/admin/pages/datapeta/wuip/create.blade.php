@extends('admin.layouts.main_admin')


@section('container')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Data Wilayah Izin Usaha Pertambangan (WIUP)</h1>
                    <div class="card-body">
                            <div class="lg-8">
                                 <form action="/admin/datapeta/wuip/" method="post" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                         <label for="nama_perusahaan">Nama Perusahaan</label>
                                        <input type="text" name="nama_perusahaan" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" placeholder="Nama Perusahaan" autofocus value="{{ old('nama_perusahaan') }}">
                                        <div class="invalid-feedback">
                                            @error('nama_perusahaan')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                   
                                    <div class="form-group">
                                         <label for="luas_sk">Luas SK</label>
                                        <input type="text" name="luas_sk" class="form-control @error('luas_sk') is-invalid @enderror" id="luas_sk" placeholder="Luas SK" autofocus value="{{ old('luas_sk') }}">
                                        <div class="invalid-feedback">
                                            @error('luas_sk')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="komoditas">Komoditas</label>
                                        <input type="text" name="komoditas" class="form-control @error('komoditas') is-invalid @enderror" id="komoditas" placeholder="Komoditas" autofocus value="{{ old('komoditas') }}">
                                        <div class="invalid-feedback">
                                            @error('komoditas')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                   
                                         
                                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                                  <a href="/admin/datapeta/wuip" class="btn btn-success">Back</a>
                                            </form>
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


@extends('admin.layouts.main_admin')


@section('container')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Data Proyek Strategis Nasional</h1>
                    <div class="card-body">
                            <div class="lg-8">
                                 <form action="/admin/datapeta/psn/" method="post" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                         <label for="nama_proyek">Nama Proyek</label>
                                        <input type="text" name="nama_proyek" class="form-control @error('nama_proyek') is-invalid @enderror" id="nama_proyek" placeholder="Nama Proyek" autofocus value="{{ old('nama_proyek') }}">
                                        <div class="invalid-feedback">
                                            @error('nama_proyek')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                     <div class="form-row">
                                    <div class="form-group col-lg-6">
                                         <label for="lokasi">Lokasi</label>
                                        <input type="text" name="lokasi" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" placeholder="Lokasi" autofocus value="{{ old('lokasi') }}">
                                        <div class="invalid-feedback">
                                            @error('lokasi')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                    <div class="form-group col-lg-6">
                                         <label for="Ancaman">Ancaman</label>
                                        <input type="text" name="ancaman" class="form-control @error('ancaman') is-invalid @enderror" id="Ancaman" placeholder="Ancaman" autofocus value="{{ old('ancaman') }}">
                                        <div class="invalid-feedback">
                                            @error('ancaman')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="deskripsi">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi" autofocus value="{{ old('deskripsi') }}">
                                        <div class="invalid-feedback">
                                            @error('deskripsi')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="form-row">
                                    <div class="form-group col-lg-6">
                                         <label for="luas_terdampak">Luas Terdampak</label>
                                        <input type="text" name="luas_terdampak" class="form-control @error('luas_terdampak') is-invalid @enderror" id="luas_terdampak" placeholder="Luas Terdampak" autofocus value="{{ old('luas_terdampak') }}">
                                        <div class="invalid-feedback">
                                            @error('luas_terdampak')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                       
                                                                           <div class="form-group col-lg-6">
                                         <label for="jiwa_terdampak">Jiwa Terdampak</label>
                                        <input type="text" name="jiwa_terdampak" class="form-control @error('jiwa_terdampak') is-invalid @enderror" id="jiwa_terdampak" placeholder="Jiwa Terdampak" autofocus value="{{ old('jiwa_terdampak') }}">
                                        <div class="invalid-feedback">
                                            @error('jiwa_terdampak')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="aktor">Aktor</label>
                                        <input type="text" name="aktor" class="form-control @error('aktor') is-invalid @enderror" id="aktor" placeholder="Aktor" autofocus value="{{ old('aktor') }}">
                                        <div class="invalid-feedback">
                                            @error('aktor')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="sumber_dana">Sumber Dana Proyek</label>
                                        <input type="text" name="sumber_dana" class="form-control @error('sumber_dana') is-invalid @enderror" id="sumber_dana" placeholder="Sumber Dana Proyek" autofocus value="{{ old('sumber_dana') }}">
                                        <div class="invalid-feedback">
                                            @error('sumber_dana')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                   
                                   
                                         
                                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                                  <a href="/admin/datapeta/psn" class="btn btn-success">Back</a>
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


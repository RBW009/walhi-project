@extends('admin.layouts.main_admin')


@section('container')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit Data Bencana</h1>
                    <div class="card-body">
                            <div class="lg-8">
                                 <form action="/admin/datapeta/bencana/{{ $bencana->id }}" method="post" enctype="multipart/form-data">
                                 @method('put')
                                 @csrf
                                    <div class="form-group">
                                         <label for="wilayah">Wilayah</label>
                                        <input type="text" name="wilayah" class="form-control @error('wilayah') is-invalid @enderror" id="wilayah" placeholder="wilayah" autofocus value="{{ old('wilayah', $bencana->wilayah) }}">
                                        <div class="invalid-feedback">
                                            @error('wilayah')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="bencana">bencana</label>
                                        <input type="text" name="bencana" class="form-control @error('bencana') is-invalid @enderror" id="bencana" placeholder="bencana" autofocus value="{{ old('bencana', $bencana->bencana) }}">
                                        <div class="invalid-feedback">
                                            @error('bencana')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                     
                                     
                                                  <button type="submit" class="btn btn-primary">Update Bencana</button>
                                                  <a href="/admin/datapeta/bencana" class="btn btn-success">Back</a>
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


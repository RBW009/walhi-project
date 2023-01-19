@extends('admin.layouts.main_admin')


@section('container')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Data Artikel</h1>
                    <div class="card-body">
                            <div class="lg-8">
                                 <form action="/admin/artikel/" method="post" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                         <label for="judul">Judul</label>
                                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul" autofocus value="{{ old('judul') }}">
                                        <div class="invalid-feedback">
                                            @error('judul')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                     <div class="form-group">
                                          <label for="penulis">Penulis</label>
                                             <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Penulis" value="{{ old('penulis') }}">
                                               <div class="invalid-feedback">
                                            @error('penulis')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                             </div>
                                               <div class="form-group">
                                                 <label for="image">Image</label>
                                                <img class="img-preview img-fluid mb-3 col-sm-4">
                                                    <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image" onchange="previewImage()">
                                                     <div class="invalid-feedback">
                                                          @error('image')
                                                            {{ $message }}
                                                                @enderror
                                                         </div>
                                                         </div>
                                     <div class="form-group">
                                          <label for="deskripsi">Deskripsi</label>   
                                          <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                                            <trix-editor class="trix-content" input="deskripsi"></trix-editor>
                                                @error('deskripsi')
                                               <p class="text-danger">{{ $message }}</p> 
                                            @enderror
                                             </div>
                                         
                                                  <button type="submit" class="btn btn-primary">Tambah</button>
                                                  <a href="/admin/artikel" class="btn btn-success">Back</a>
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
    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventdefault();
        })

    function previewImage(){

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }

    }

    </script>
@endsection


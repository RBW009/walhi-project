@extends('admin.layouts.main_admin')


@section('container')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Tambah Data Bencana</h1>
                    <div class="card-body">
                            <div class="lg-8">
                                 <form action="/admin/datapeta/bencana" method="post" enctype="multipart/form-data">
                                 @csrf
                                    <div class="form-group">
                                         <label for="latitude">Latitude</label>
                                        <input type="text" name="latitude" class="form-control @error('latitude') is-invalid @enderror" id="latitude" placeholder="latitude" autofocus value="{{ old('latitude') }}">
                                        <div class="invalid-feedback">
                                            @error('latitude')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                   
                                    <div class="form-group">
                                         <label for="longitude">Longitude</label>
                                        <input type="text" name="longitude" class="form-control @error('longitude') is-invalid @enderror" id="longitude" placeholder="longitude" autofocus value="{{ old('longitude') }}">
                                        <div class="invalid-feedback">
                                            @error('longitude')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="banjir">banjir</label>
                                           <input type="text" name="banjir" class="form-control @error('banjir') is-invalid @enderror" id="banjir" placeholder="banjir" autofocus value="{{ old('banjir') }}">
                                           <div class="invalid-feedback">
                                               @error('banjir')
                                                   {{ $message }}
                                               @enderror
                                           </div>
                                           </div>

                                           <div class="form-group">
                                            <label for="gempa">gempa</label>
                                           <input type="text" name="gempa" class="form-control @error('gempa') is-invalid @enderror" id="gempa" placeholder="gempa" autofocus value="{{ old('gempa') }}">
                                           <div class="invalid-feedback">
                                               @error('gempa')
                                                   {{ $message }}
                                               @enderror
                                           </div>
                                           </div>

                                           <div class="form-group">
                                            <label for="kebakaran">kebakaran</label>
                                           <input type="text" name="kebakaran" class="form-control @error('kebakaran') is-invalid @enderror" id="kebakaran" placeholder="kebakaran" autofocus value="{{ old('kebakaran') }}">
                                           <div class="invalid-feedback">
                                               @error('kebakaran')
                                                   {{ $message }}
                                               @enderror
                                           </div>
                                           </div>

                                           <div class="form-group">
                                            <label for="puting_beliung">Puting Beliung</label>
                                           <input type="text" name="puting_beliung" class="form-control @error('puting_beliung') is-invalid @enderror" id="puting_beliung" placeholder="puting_beliung" autofocus value="{{ old('puting_beliung') }}">
                                           <div class="invalid-feedback">
                                               @error('puting_beliung')
                                                   {{ $message }}
                                               @enderror
                                           </div>
                                           </div>

                                           <div class="form-group">
                                            <label for="longsor">Puting Beliung</label>
                                           <input type="text" name="longsor" class="form-control @error('longsor') is-invalid @enderror" id="longsor" placeholder="longsor" autofocus value="{{ old('longsor') }}">
                                           <div class="invalid-feedback">
                                               @error('longsor')
                                                   {{ $message }}
                                               @enderror
                                           </div>
                                           </div>
                                   
                                         
                                                  <button type="submit" class="btn btn-primary">Tambah</button>
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


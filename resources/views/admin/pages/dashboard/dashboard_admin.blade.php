@extends('admin.layouts.main_admin')


@section('container')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                 
                    <div class="row">

                        <!-- Artikel Reports -->
                        <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Jumlah Artikel</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $artikel }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas  fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Data Peta Reports --}}
                         <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Data Peta</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $datapeta }}</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-2x fa-map-location-dot text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- data peta --}}
                         <div class="col-xl-4 col-md-4 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Lapor</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $lapor }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bug fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
@endsection


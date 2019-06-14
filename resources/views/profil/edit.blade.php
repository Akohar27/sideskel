@extends('template')
@section('main-dashboard')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="alert alert-danger" role="alert">
                          <h5 class="alert-heading">SIDESKEL</h5>
                          <p class="text-dark">1 Batas Berhasil ditambahkan</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PROFIL</strong>
                                <a href="{{ url('profil') }}" class="btn btn-info btn-sm float-right"> KEMBALI </a>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <!-- <div id="pay-invoice"> -->
                                    <div class="card-body" style="padding-top: 0">
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <label class="control-label">Nama</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Desa ABC atau Kelurahan DEF">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Alamat</label>
                                                <input type="text" class="form-control" placeholder="Jl. Kenangan No. 007, Kec. ABC, Kota atau Kabupaten DEF, Provinsi GHI">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Telepon</label>
                                                <input type="text" class="form-control"
                                                    placeholder="082293427693">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Email</label>
                                                <input type="text" class="form-control"
                                                    placeholder="adnankasim8@gmail.com">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Deskripsi</label>
                                                <textarea class="form-control" rows="8"></textarea>
                                            </div>
                                            <div class="form-group has-success">
                                                <label>Logo</label>
                                                <div class="input-group mb-3">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input">
                                                        <label class="custom-file-label">Cari Logo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-primary" >SUBMIT</button>
                                                <input type="reset" class="btn btn-danger" value="RESET">
                                            </div>
                                        </form>
                                    </div>
                                <!-- </div> -->
                    
                            </div>
                        </div> <!-- .card -->
                    
                    </div>
                    <!--/.col-->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-4">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Desa Kayu Bulan, Gorontalo
                    </div>
                    <div class="col-sm-4 text-center">
                        SIDESKEL Development by. <strong> <a href="#">Adnan Kasim</a></strong>
                    </div>
                    <div class="col-sm-4 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
@stop
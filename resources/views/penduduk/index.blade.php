@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('pesan.pesan_info')
                    
                    @include('penduduk.cari')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PENDUDUK</strong>
                                <a href="{{ url('penduduk/create') }}" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <span> TOTAL DATA :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_penduduk->total() }}  </strong>
                                </span>
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <tr>
                                        <th>NO</th>
                                        <th>NIK</th>
                                        <th>NAMA</th>
                                        <th>PEKERJAAN</th>
                                        <th>DARAH</th>
                                        <th>AGAMA</th>
                                        <th>GENDER</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php $i=1 ?>
                                    @foreach($daftar_penduduk as $penduduk)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $penduduk->nik }}</td>
                                        <td>{{ $penduduk->nama_penduduk }}</td>
                                        <td class="text-capitalize">{{ $penduduk->pekerjaan }}</td>
                                        <td class="text-uppercase">{{ $penduduk->golongan_darah }}</td>
                                        <td class="text-capitalize">{{ $penduduk->agama }}</td>
                                        <td class="text-capitalize">{{ $penduduk->jenis_kelamin }}</td>
                                        <td>
                                            <a href="{{ url('penduduk/'. $penduduk->id .'/edit') }}" class="btn btn-info btn-sm d-block my-1">EDIT</a>
                                            <a href="{{ url('penduduk/'. $penduduk->id) }}" class="btn btn-primary btn-sm d-block my-1">DETAIL</a>                                <a href="#" class="btn btn-danger btn-sm d-block my-1" data-toggle="modal" data-target="#confirm-delete-{{ $i }}">HAPUS</a>

<div class="modal fade text-danger" id="confirm-delete-{{ $i++ }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <i class="fa fa-exclamation-circle fa-lg"></i> PERINGATAN!
            </div>
            <div class="modal-body">
                APAKAH YAKIN AKAN MENGHAPUS DATA INI ? 
                <br><br><br>
                *) Data yang sudah dihapus tidak bisa dikembalikan lagi
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">BATAL</button>
                {!! Form::open(['url' => 'penduduk/'.$penduduk->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            {{ $daftar_penduduk->links() }}
                        </nav>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop
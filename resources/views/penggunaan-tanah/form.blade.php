{{ csrf_field() }}
@if(isset($penggunaanTanah))
    {!! Form::hidden('id', $penggunaanTanah->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_penggunaan_tanah', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Sawah Irigasi Teknis']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_penggunaan_tanah', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2 HA']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>
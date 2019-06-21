{{ csrf_field() }}
@if(isset($iklim))
    {!! Form::hidden('id', $iklim->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_iklim', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Curah Hujan']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_iklim', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Sedang']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>
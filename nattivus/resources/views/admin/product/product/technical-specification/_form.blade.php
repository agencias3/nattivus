<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('technical_id', 'Especificação Técnica *') !!}
            <select class="form-control" required="required" id="technical_id" name="technical_id">
                <option value="">Selecione</option>
                @foreach($technical as $row)
                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    {!! Form::hidden('product_id', $id, ['required' => 'required']) !!}
</div>
<br />
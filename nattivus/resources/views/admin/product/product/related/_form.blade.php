<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('category_id', ' Categoria *') !!}
            <select class="form-control changeSelected" data-route="{{ route('admin.product.product.related.productSelect', ['id' => 0]) }}" data-classe="productRelateds" required="required" id="group_id" name="group_id">
                <option value="">Selecione</option>
                @foreach($categories as $row)
                    <option value="{{ $row->id }}">
                        @if(isset($row->category->name))
                            {{ $row->category->name.' > ' }}
                        @endif
                        {{ $row->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('product_related_id', 'Produto *') !!}
            <select class="form-control productRelateds" required="required" id="product_related_id" name="product_related_id">
                <option value="">Selecione</option>
            </select>
        </div>
    </div>
    {!! Form::hidden('product_id', $id, ['required' => 'required']) !!}
</div>
<br />
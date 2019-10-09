<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('name', 'Nome *') !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'required' => 'required', 'maxlength' => 255]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('code', 'Código') !!}
            {!! Form::text('code', null, ['class'=>'form-control', 'maxlength' => 255]) !!}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria *') !!}
            <select name="category_id" class="form-control" required>
                <option value="">Selecione</option>
                @if(!$categories->isEmpty())
                    @foreach($categories as $row)
                        <?php
                        $selected = "";
                        if($row->id == $dados->category_id){
                            $selected = "selected";
                        }
                        ?>
                        <option value="{{ $row->id }}" {{ $selected }}>
                            <?php
                            if(isset($row->category_id)){
                                echo $row->category->name.' > '.$row->name;
                            }else{
                                echo $row->name;
                            }
                            ?>
                        </option>
                    @endforeach
                @endif
            </select>
        </div>
    </div>
</div>
@include('admin.layouts.forms._active_order')
@include('admin.layouts.forms._seo_keywords_description')
@include('admin.layouts.forms._seo_link')
@include('admin.layouts.forms._description')
<div class="row">
    {!! Form::hidden('product_id', $id, ['required' => 'required']) !!}
    @if(!$categories->isEmpty())
        @foreach($categories as $category)
            <div class="col-md-4">
                <div class="form-group">
                    <div class="checkbox-custom checkbox-default">
                        <?php
                        $checked = '';
                        if(!$dados->isEmpty()){
                            foreach ($dados as $row){
                                if($row->category_id == $category->id){
                                    $checked = 'checked';
                                }
                            }
                        }
                        ?>

                        <input type="checkbox" name="category[]" {{ $checked }} value="{{ $category->id }}" id="{{ $category->id }}">
                        <?php
                        if(!empty($category->category_id)){
                            $label = $category->category->name.' > '.$category->name;
                        }else{
                            $label = $category->name;
                        }
                        ?>
                        {!! Form::label($category->id, $label) !!}
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
<br />
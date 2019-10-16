@include('admin.layouts.forms._name')
@include('admin.layouts.forms._input_text_6_6', [
     'i_0' => [
        'label' => 'Cargo',
        'name' => 'office',
        'required' => false
    ],
    'i_1' => [
        'label' => 'E-mail',
        'name' => 'email',
        'required' => false
    ]
])
@include('admin.layouts.forms._image',[
    'label' => 'Imagem',
    'size' => '410px X 390px, conteúdo principal centralizado',
    'name' => 'image',
    'path' => 'team',
    'route_destroy' => route('admin.team.destroyFile', ['id' => isset($dados->id) ? $dados->id : null, 'name' => 'image'])
])
@include('admin.layouts.forms._active_order')
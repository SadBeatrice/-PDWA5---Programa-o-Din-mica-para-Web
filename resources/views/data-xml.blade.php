<data>
@foreach($registros as $item)
    <item>
        <cor>{{ $item->cor }}</cor>
        <tipo_de_tinta>{{ $item->tipo_de_tinta }}</tipo_de_tinta>
        <marca>{{ $item->marca }}</marca>
        <ponta>{{ $item->ponta }}</ponta>
        <material_do_corpo>{{ $item->material_do_corpo }}</material_do_corpo>
    </item>
@endforeach
</data>
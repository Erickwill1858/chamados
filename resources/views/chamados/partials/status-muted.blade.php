@if ($chamado->status == 'Fechado')
<span class="badge badge-light text-secondary"> {{ $chamado->status }} </span>
@elseif ($chamado->status == 'Aguardando Peças')
<span class="badge badge-light text-secondary"> {{ $chamado->status }} </span>
@elseif ($chamado->status == 'Aguardando Solicitante')
<span class="badge badge-light text-secondary"> {{ $chamado->status }} </span>
@elseif ($chamado->status == 'Triagem')
<span class="badge badge-light text-secondary"> {{ $chamado->fila->config->triagem ? 'Triagem': 'Novo' }} </span>
@else
{{-- atribuido é default --}}
<span class="badge badge-light text-secondary"> {{ $chamado->status }} </span>
@endif

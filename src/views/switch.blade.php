@php
$column = $column ?? 'status';
$id = $id ?? $data->id;
@endphp

<label class="switcher_switch"><input onclick="changeSwitch('{{$table}}', '{{$id}}', '{{$column}}')" type="checkbox" checked><span class="switcher_slider switcher_round"></span></label>

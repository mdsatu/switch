@php
$column = $column ?? config('switcher.default_column');
$id = $id ?? $data->id;
$status = $data[$column];
@endphp

<label class="switcher_switch"><input data-table="{{$table}}" data-column="{{$column}}" data-id="{{$id}}" type="checkbox" {{$status ? 'checked' : ''}}><span class="switcher_slider switcher_round"></span></label>

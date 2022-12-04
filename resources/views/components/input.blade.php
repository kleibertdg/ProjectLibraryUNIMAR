@props(['holder', 'label', 'type', 'value'])

<div>
  <div class="x-input_label">{{ $label }}</div>
  <input class="x-input" 
    type="{{ $type }}"
    placeholder="Ingrese {{ $holder }}"
    value="{{$value}}" />
</div>
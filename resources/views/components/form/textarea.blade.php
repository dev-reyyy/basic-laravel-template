@props([
    'name',
    'label' => '',
    'placeholder' => '',
    'value' => '',
])

<div class="input-group">
    @if ($label)
        <label for="{{ $name }}" class="field-label">
            {{ $label }}
        </label>
    @endif

    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'input-field']) }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
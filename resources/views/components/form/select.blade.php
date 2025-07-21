@props([
    'name',
    'label' => '',
    'options' => [],
    'value' => '',
])

<div class="input-group">
    @if ($label)
        <label for="{{ $name }}" class="field-label">
            {{ $label }}
        </label>
    @endif

    <select
        name="{{ $name }}"
        id="{{ $name }}"
        {{ $attributes->merge(['class' => 'input-field']) }}
    >
        <option value="" disabled {{ old($name, $value) ? '' : 'selected' }}>Select an option</option>
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}"
                {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
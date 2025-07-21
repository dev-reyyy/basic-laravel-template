@props([
    'name',
    'label' => 'Upload file',
    'help' => null,
])

<div class="input-group">
    @if ($label)
        <label for="{{ $name }}" class="field-label">
            {{ $label }}
        </label>
    @endif

    <input
        type="file"
        name="{{ $name }}"
        id="{{ $name }}"
        aria-describedby="{{ $name }}_help"
        {{ $attributes->merge(['class' => 'file-field']) }}
    />

    @if ($help)
        <p id="{{ $name }}_help" class="mt-1 text-sm text-gray-500 dark:text-gray-300">
            {{ $help }}
        </p>
    @endif

    @error($name)
        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
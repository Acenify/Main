<form wire:submit.prevent="setTableRecordProperty('{{ $getName() }}', $event.target.value)">
    <select wire:change="$dispatch('submit')" class="border-gray-300 rounded-md shadow-sm" style="padding: 2px 6px;">
        @foreach ($getSelectOptions() as $value => $label)
            <option value="{{ $value }}" @selected($getState() == $value)>
                {{ $label }}
            </option>
        @endforeach
    </select>
</form>

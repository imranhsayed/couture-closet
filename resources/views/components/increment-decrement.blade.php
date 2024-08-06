@props( [
	'name'      => '',
	'value'     => 1,
	'min_value' => 0,
	'max_value' => 0,
	'id'        => '',
	'label'     => '',
] )

@php
	if ( empty( $name ) || empty( $id ) || empty( $label ) ) {
		return;
	}
@endphp

<lb-increment-decrement-controls
		class="search-filters__selection-controls"
		min-value="{{ $min_value }}"
		max-value="{{ $max_value }}"
		selected-value="{{ $min_value }}"
>
	<label for="{{ $id }}" style="display: none;">
		{{$label}}
	</label>
	<div class="search-filters__selection-control-buttons">
		<button
				class="search-filters__decrement-btn"
				type="button"
		>
			-
		</button>
		<input
				class="search-filters__selection-control"
				type="number"
				min="{{ $min_value }}"
				name="{{ $name }}"
				value="{{ $value }}" readonly
		/>
		<button
				class="search-filters__increment-btn"
				type="button"
		>
			+
		</button>
	</div>
</lb-increment-decrement-controls>

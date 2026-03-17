@props([
    'ideaid' => 0
])
<div {{ $attributes->merge(['class' => 'card bg-neutral text-neutral-content w-96'])}}>
    <div class="card-body items-center text-center">
    <h2 class="card-title">Idea ID: {{ $ideaid }}</h2>
    <p>{{ $slot }}</p>
    <div class="card-actions justify-end">
        <a href="/ideas/{{ $ideaid }}" class="btn btn-primary">View</a>
        <a href="/ideas/{{ $ideaid }}/edit" class="btn btn-warning">Edit</a>
    </div>
    </div>
</div>

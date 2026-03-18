<x-layout title='Your Ideas'>
    <h2 class="font-bold">Your Ideas</h2>
    <div class="card bg-neutral p-6">
        <h2 class="card-title">{{ $idea->heading }}</h2>
        <p class="card-body">{{ $idea->description }}</p>
    </div>
    <div class="mt-6">
        <a href="/ideas/{{ $idea->id }}/edit"
            class="btn btn-primary">
            edit
        </a>
    </div>
</x-layout>

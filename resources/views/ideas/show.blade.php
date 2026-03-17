<x-layout title='Your Ideas'>
    <h2 class="font-bold">Your Ideas</h2>
    <div class="card bg-neutral p-6">
        <div>
            {{ $idea->description }}
        </div>
    </div>
    <div class="mt-6">
        <a href="/ideas/{{ $idea->id }}/edit"
            class="btn btn-primary">
            edit
        </a>
    </div>
</x-layout>

<x-layout title='Your Ideas'>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold items-center text-center">Your Ideas</h2>
            <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
            @foreach ($ideas as $idea )
                <x-ideacard ideaid="{{ $idea->id }}" heading="{{ $idea->heading }}">
                    {{ $idea->description }}
                </x-ideacard>
            @endforeach
            </ul>
        </div>
    @else
    <p>No ideas yet, <a href="/ideas/create">Create new one<a></p>
    @endif
</x-layout>

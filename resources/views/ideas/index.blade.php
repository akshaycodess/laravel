<x-layout title='Your Ideas'>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your Ideas</h2>
            <ul>
            @foreach ($ideas as $idea )
                <li class="text-sm"><a href="/ideas/{{ $idea->id }}/edit">{{ $idea->description }}</a></li>
            @endforeach
            </ul>
        </div>
    @else
    <p>No ideas yet, <a href="/ideas/create">Create new one<a></p>
    @endif
</x-layout>

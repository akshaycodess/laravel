<x-layout>
    {{-- dd kills execution after that staement and dump dont --}}
    {{-- @dump($tasks) --}}

    <h1>Home</h1>
    {{-- {!! $person !!} --}}
    {{-- when we are sure that the value is safe --}}
    <p>{{ $message }}, {{ $person }}!</p>

    {{-- Blade Directives --}}
    @forelse ( $tasks as $task )
        <li>{{ $task }}</li>
    @empty
        <p>No tasks right now.</p>
    @endforelse

</x-layout>

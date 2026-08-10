<x-layout title="Home Page">
    <h1>Welcome Home!</h1>

    {{--
    
    @dump($tasks)


    @if (count($tasks))
        <p>We have some tasks. {{ count($tasks) }} tasks, in fact!</p>
    @else
        <p> We don't have task yet.</p>
    @endif


    @foreach ($tasks as $task)
        <li> {{ $task }} </li>
    @endforeach

    --}}

    @forelse ($tasks as $task)
        <li> {{ $task }} </li>
    @empty
        <p> We don't have task yet.</p>
    @endforelse

</x-layout>

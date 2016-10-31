@extends('layouts.index')

@section('content')
    <section>

        <br>
        <p>This is Default content!</p>
        <br>

        @foreach($tasks as $task)
            <div>
                {{ $task->description }}
            </div>
        @endforeach

    </section>
@endsection
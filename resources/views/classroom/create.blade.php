@extends('partials.index')
@section('content')


<x-messages />
<main class="bg-white-300 max-w-lg mx-auto p-8 my-52 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center mb-8"> Add Classroom</h3>

        <section class="mt-42">
            <form action="{{ url('classroom/create') }}" method="POST" class="flex flex-col">
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="grade" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Grade</label>
                    <input type="number" name="grade"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('grade')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="section" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Section</label>
                    <input type="text" name="section"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('section')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="section" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Adviser</label>
                    <select name="adviser_id"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">

                        @foreach ($advisers as $adviser)
                        <option value="{{$adviser->id}}">{{$adviser->adviser }}</option>
                            @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-gray-400 hover:bg-gray-500 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Add</button>

            </form>

        </section>

    </section>

@endsection

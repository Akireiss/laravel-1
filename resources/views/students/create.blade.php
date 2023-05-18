@extends('partials.index')
@section('content')
<x-messages />
<main class="bg-white-300 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl mt-22 ">
    <section>

        <h3 class="font-bold text-2xl text-center">{{ $title }} Student</h3>

        <section class="mt-10">
            <form action="/add/student" method="POST" class="flex flex-col">
                @csrf

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="first_name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">First Name</label>
                    <input type="text" name="first_name"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('first_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="last_name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                    <input type="text" name="last_name"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('last_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="age" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Age</label>
                    <input type="number" name="age"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('age')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="gender" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Gender</label>
                    <select name="gender" class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>



                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3"
                        placeholder="example@gmail.com">
                        @error('email')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="subject_id" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Subject</label>
                    <select name="subject_id" class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @foreach ($subject as $sub)
                    <option value="{{$sub->id}}">{{$sub->subject }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="subject_id" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Classroom</label>
                    <select name="classroom_id" class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @foreach ($classroom as $class)
                    <option value="{{$class->id}}">{{$class->grade }}</option>
                        @endforeach
                    </select>
                </div>



                <button type="submit" class="bg-gray-600 hover:bg-gray-500 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Add</button>

            </form>

        </section>

    </section>

@endsection

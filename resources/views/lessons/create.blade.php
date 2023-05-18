@include('partials.header', ['$title'])

<x-nav />


<x-messages />
<main class="bg-white-300 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center"> Add Lessons To Subject</h3>

        <section class="mt-10">
            <form action="{{ url('lessons/create') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
                @csrf


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="lesson" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Lessons</label>
                    <input type="text" name="lessons"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('first_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="file" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Files</label>
                    <input type="file" name="files"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('first_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>
{{--
                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="activities" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Activities</label>
                    <input type="file" name="activities"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('first_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div> --}}

                <div class="mb-6 pt-3 rounded bg-gray-200">
                    <label for="subject_id" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Subject</label>
                    <select name="subject_id" class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @foreach ($subject as $sub)
                    <option value="{{$sub->id}}">{{$sub->subject }}</option>
                        @endforeach
                    </select>

                </div>

                <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Add</button>

            </form>

        </section>

    </section>


    @include('partials.footer')

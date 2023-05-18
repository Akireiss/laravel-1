@include('partials.header', ['$title'])

<x-nav />


<x-messages />
<main class="bg-white-300 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center"> Add Subject</h3>

        <section class="mt-10">
            <form action="{{ url('subject/create') }}" method="POST" class="flex flex-col">
                @csrf


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="first_name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Subject</label>
                    <input type="text" name="subject"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('first_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="last_name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Code</label>
                    <input type="text" name="code"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('last_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>



                <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Add</button>

            </form>

        </section>

    </section>


    @include('partials.footer')

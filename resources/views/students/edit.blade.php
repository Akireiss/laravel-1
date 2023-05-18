@include('partials.header', ['$title'])

<x-nav />


<x-messages />
<main class="bg-white-100 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl mt-16">
    <section>
        <h3 class="font-bold text-2xl text-center">Edit  {{$student->last_name}} {{$student->first_name}}</h3>

        <section class="mt-10">
            <form action="/student/{{$student->id}}" method="POST" class="flex flex-col">
              {{-- override the method POST for Put(which is for update method) --}}
                @method('PUT')
                @csrf
                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="first_name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">First Name</label>
                    <input type="text" name="first_name"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3"
                      value="{{$student->first_name}} ">
                        @error('first_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="last_name" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                    <input type="text" name="last_name"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3"
               value="{{$student->last_name}}">
                        @error('last_name')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="age" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Age</label>
                    <input type="number" name="age"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3"  value="{{$student->age}}">
                        @error('age')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="gender" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Gender</label>
                    <select name="gender" class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        <option value="">{{$student->gender}} </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>



                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" value="{{$student->email}}"
                        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-4 border-gray-400 px-3">
                        @error('email')
                        <p class="text-red-500 text-xsp-1">{{ $message}}</p>
                            @enderror
                </div>

                <button type="submit" class="bg-purple-500 hover:bg-purple-700 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Update</button>

            </form>


            <form action="/student/{{$student->id}}" method="POST" class="flex flex-col">
                {{-- override the method POST for Put(which is for update method) --}}
                  @method('delete')
                  @csrf
                  <button type="submit" class="bg-red-500 hover:bg-red-700 mt-2 text-white py-1.5 font-bold shadow-sm w-full"
                  type="submit">Delete</button>
            </form>
        </section>

    </section>


    @include('partials.footer')

@include('partials.header')
<x-nav />

<header class="max-w-lg mx-auto text-center mt-5">
    <a href="#">
        <h1 class="text-2xl ">Admin Login</h1>
    </a>
</header>

<x-messages />
<main class="bg-white-400 max-w-sm mx-auto p-4 my-52 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center mb-10 mt-6">Login</h3>
        {{-- <p class="text-gray-600 pt-2 text-center">Welcome Please Input Your Cread</p> --}}
        <section class="mt-10">
            <form action="{{ url('login/process') }}" method="POST" class="flex flex-col">
                @csrf
                @error('email')
                    <p class="text-red-500 text-xsp-1">{{ $message }}</p>
                @enderror


                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email"
    class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3"
    placeholder="example@gmail.com">
                </div>

                <div class="mb-6 pt-3 rounded bg-gray-200">

                    <label for="email" class="block text-grey-700 text-sm font-bold mb-2 ml-3">Password</label>
    <input type="password" name="password"
        class="bg-gray-200 rounded w-full text-gray-500 focus:outline-none border-b-2 border-gray-400 px-3">
                </div>

                <button type="submit" class="bg-gren-400 hover:bg-gray-700 text-white py-1.5 font-bold shadow-sm"
                    type="submit">Login</button>

            </form>

        </section>

    </section>




    @include('partials.footer')

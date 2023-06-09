
<nav x-data="{open : false}"
class="bg-gray-300 fixed w-full z-20 top-0 left-0 border-gray-200 px-2 sm:px4 py-2.5">

    <div class="container flex flex-wrap justify-between items-center mx-auto">
<a href="/">
<span class="self-centered text-xl font-semibold whitespaces-nowrap ">
Student System
</span>
</a>
<button @click="open = !open" class="md:hidden mx-5" data-collapse-toggle="navbar-main">
    <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
</button>

<div x-show="open" class=" w-full md:block md:w-auto md:hidden" id="navbar-main">
<x-items />
</div>

<div class="hidden w-full md:block md:w-auto" id="navbar-main">
<x-items />
</div>

</div>
</nav>

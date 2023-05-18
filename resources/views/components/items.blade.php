<ul class="flex flex-col px-4 md:flex-row">
    @auth
    <li>
    <a href ="/add/student" class="block py-2 pr-4 pl-3  hover:bg-sky-500">Add New</a>
    </li>

    <li>
            <form action="/logout" method="POST">
                @csrf
            <button class="block py-2 pr-4 pl-3">Log Out</button>
          </form>  </li>


    <li>
        @else
    <a href ="/login" class="block py-2 pr-4 pl-3">Sign In</a>
    </li>
    <li>
        <a href ="/register" class="block py-2 pr-4 pl-3">Register</a>
        </li>
@endauth
    </ul>

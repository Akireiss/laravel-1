{{-- @dd(auth()->user()->name) --}}
@include('partials.header', ['title' => 'Student Table'])

<x-nav />

<body class="bg-black-500">

<x-messages />
    <header class="max-w-lg mx-auto text-center">
        <a href="#">
        <h1 class="text-2xl mt-5">   <i class="bx bxs-home-alt-2"></i>  Student List</h1>
        </a>
        </header>

        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 px-7">
          <div class="py-5 inline-block min-w-full sm:px-6 lg:px-8">


            <div class="overflow-hidden">
              <table class="min-w-full width-96 mx-auto ">

                <thead class="bg-white border-black ">
                  <tr>
                    <th scope="col" class="text-sm font-medium text-black-500 px-6 py-4 text-left">
                  First Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-black-500 px-6 py-4 text-left">
                      Last Name
                    </th>
                    <th scope="col" class="text-sm font-medium text-black-500 px-6 py-4 text-left">
                        Email
                      </th>
                    <th scope="col" class="text-sm font-medium text-black-500 px-6 py-4 text-left">
                      Age
                    </th>
                    <th scope="col" class="text-sm font-medium text-black-500 px-6 py-4 text-left">
                       Classroom
                      </th>
                    <th scope="col">Manage</th>
                  </tr>
                </thead>
 @foreach ($students as $student)
                <tbody>

                    <tr class="bg-dark border-b transition duration-300 ease-in-out hover:bg-blue-400">

                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-black-500">
                     {{ $student->first_name }}</td>

                    <td class="text-sm  text-black-500 font-light px-6 py-4 whitespace-nowrap">
                        {{  $student->last_name  }}</td>


                    <td class="text-sm  text-black-500 font-light px-6 py-4 whitespace-nowrap">
                        {{  $student->email  }}</td>

                    <td class="text-sm  text-black-500 font-light px-6 py-4 whitespace-nowrap">
                        {{ $student->age }}</td>

                        <td class="text-sm  text-black-500 font-light px-6 py-4 whitespace-nowrap">
                            {{ $student->subject->subject }}
                        </td>

                        <td class="text-sm  text-center text-blac k-500 font-light bg-slate-400 py-1 px-4 rounded">
                            <a href="/student/{{$student->id}}">View</a></td>

    @endforeach

                    </tr>

                </tbody>
              </table>

{{-- {{ $students->links() }} --}}




    @include('partials.footer')

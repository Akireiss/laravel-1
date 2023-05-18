@extends('partials.index')
@section('content')

<div class="w-full p-4">
    <div class="flex justify-end">
    <a href="{{ url('classroom/create') }}" class=" bg-gray-700 p-3 border hover:bg-grey-500 text-white py-1.5 font-bold shadow-sm" type="submit">Add</a>
</div>

<div class="w-48  shadow flex items-center justify-start font-sans overflow-hidden">
    <div class="w-48 lg-w-full">
        <div class="bg-white shadow-md rounded p-3 uppercase text-center">
    Students Data
        </div>
    </div>
</div>
    <div class="overflow-x-auto">
        <div class="max-w-screen max-h-screen flex items-center justify-center font-sans overflow-hidden">
            <div class="w-full lg-w-full">
                <div class="bg-white shadow-md rounded my-7 ">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Classroom</th>
                                <th class="py-3 px-6 text-left">Section</th>
                                <th class="py-3 px-6 text-left">Adviser</th>
                                <th class="py-3 px-6 text-left">Manage</th>

                            </tr>
                        </thead>
                    @forelse ($classroom as $class )

                        <tbody class="text-gray text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $class->grade }}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $class->section }}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $class->teacher->adviser }}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <a href="classroom/{{ $class->id }}">Edit</a>
                                </td>


                            </tr>
                            @empty
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                No classroom data found
                            </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

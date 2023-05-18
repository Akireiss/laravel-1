@extends('partials.index')
@section('content')

@include('subject.modals.modal')

<div class="w-full p-4">
    <div class="flex justify-end">
        <button data-modal-target="auth-modal" data-modal-toggle="auth-modal"
        class="block text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg
         text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button">
        Add
    </button>

</div>

<div class="w-48  shadow flex items-center justify-start font-sans overflow-hidden">
    <div class="w-48 lg-w-full">
        <div class="bg-white shadow-md rounded p-3 uppercase text-center">
    Subject Data
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
                                <th class="py-3 px-6 text-left">Subject</th>
                                <th class="py-3 px-6 text-left">Subject ID</th>

                            </tr>
                        </thead>
                        @forelse ($subject as $sub )

                        <tbody class="text-gray text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $sub->subject }}
                                </td>
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    {{ $sub->id }}
                                </td>


                            </tr>
                            @empty
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                No Subject Found
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

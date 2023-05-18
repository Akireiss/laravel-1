@extends('partials.index')
@section('content')

            <div class="flex flex-col">
                <div class="mt-10 grid grid-col-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">

                    <div class="flex item-start rounded-xl p-4 bg-white shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                            {{-- svg hereeeee --}}
                        </div>
                        <div class="ml-4">
                            <h2 class="font-semibold">43 Messages</h2>
                            <p class="mt-2 text-sm text-gray-500">Last Opened 2 days ago</p>
                        </div>
                    </div>


                    <div class="flex item-start rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                            {{-- svg hereeeee --}}
                        </div>
                        <div class="ml-4">
                            <h2 class="font-semibold">43 Messages</h2>
                            <p class="mt-2 text-sm text-gray-500">Last Opened 2 days ago</p>
                        </div>
                    </div>



                    <div class="flex item-start rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                            {{-- svg hereeeee --}}
                        </div>
                        <div class="ml-4">
                            <h2 class="font-semibold">43 Messages</h2>
                            <p class="mt-2 text-sm text-gray-500">Last Opened 2 days ago</p>
                        </div>
                    </div>

                    <div class="flex item-start rounded-xl bg-white p-4 shadow-lg">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full border border-blue-100 bg-blue-50">
                            {{-- svg hereeeee --}}
                        </div>
                        <div class="ml-4">
                            <h2 class="font-semibold">43 Messages</h2>
                            <p class="mt-2 text-sm text-gray-500">Last Opened 2 days ago</p>
                        </div>
                    </div>
                </div>


            <div class="overflow-x-auto">
                <div class="max-w-screen max-h-screen flex items-center justify-center font-sans overflow-hidden">
                    <div class="w-full lg-w-full">
                        <div class="bg-white shadow-md rounded my-6">
                            <table class="min-w-max w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">wedsda</th>
                                        <th class="py-3 px-6 text-left">dasad</th>
                                        <th class="py-3 px-6 text-left">dsada</th>
                                        <th class="py-3 px-6 text-left">sada</th>
                                        <th class="py-3 px-6 text-left">dad</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray text-sm font-light">
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            fsdfs
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            fsdfs
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            fsdfs
                                        </td>
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            fsdfs
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>



@push('script')
<script>
    document.addEventListener("alpine:init", () => {
Alpine.data("layout", () => ({
    profileOpen: false,
    asideOpen: true,
}));
});
</script>

@endpush






@endsection
@include('partials.footer')

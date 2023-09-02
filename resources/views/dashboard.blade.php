<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  py-8 px-4 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg justify-center">


                <a href="{{ route("posts.create") }}"
                    class="relative inline-flex items-center justify-center p-1 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        créer un article
                    </span>
                </a>
                <a href="{{ route("coupon.create")}}"
                    class="relative inline-flex items-center justify-center ml-4 p-1 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Créer un coupon
                    </span>
                </a>
                <a href="{{ route("video.create")}}"
                class="relative inline-flex items-center justify-center ml-4 p-1 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-100 to-green-500 group-hover:from-yellow-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                <span
                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Ajouter une video
                </span>
            </a>

            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 h1 font-bold text-2xl uppercase first-letter:ring-offset-2 text-gray-900 dark:text-gray-100">
                    {{ __('Coupons recents!') }}
                </div>


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    N°
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    titre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($coupons as $key => $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">{{ $key+1 }}</td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $item->title }}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="{{ route("coupon.delete",["id" => $item->id]) }}" class=" bg-red-500 text-white mr-3 p-2 rounded">effacer</a>
                                    <a href="" class=" bg-green-700 text-white mr-3 p-2 rounded">mettre à jour</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 h1 font-bold text-2xl uppercase text-gray-900 dark:text-gray-100">
                    {{ __('Articles recents!') }}
                </div>


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    N°
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    titre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $item)

                            <tr class="bg-white dark:bg-gray-800">

                                <td class="px-6 py-4">
                                    {{ $key+1 }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$item->title}}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="{{ route("post.delete",["id" => $item->id]) }}" class=" bg-red-500 text-white mr-3 p-2 rounded">effacer</a>
                                    <a href="" class=" bg-green-700 text-white mr-3 p-2 rounded">mettre à jour</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 h1 font-bold text-2xl uppercase text-gray-900 dark:text-gray-100">
                    {{ __('Articles recents!') }}
                </div>


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    N°
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    titre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                   Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $key => $item)

                            <tr class="bg-white dark:bg-gray-800">

                                <td class="px-6 py-4">
                                    {{ $key+1 }}
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$item->title}}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="{{ route("video.delete",["id" => $item->id]) }}" class=" bg-red-500 text-white mr-3 p-2 rounded">effacer</a>
                                    <a href="" class=" bg-green-700 text-white mr-3 p-2 rounded">mettre à jour</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

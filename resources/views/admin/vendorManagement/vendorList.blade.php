<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Vendor List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table-auto bg-white dark:bg-gray-800">
                    <thead>
                    <tr>
                        <th>Vendor</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vendors as $vendor)
                        <tr>
                            <td>{{$vendor->company_name}} dba: {{$vendor->dba_name}}</td>
                            <td><a href="/vendor/edit/{{$vendor->id}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <a href="/vendor/create">
                <button class="btn btn-blue">Create New Vendor</button>
            </a>
        </div>
    </div>
</x-app-layout>

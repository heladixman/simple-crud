@extends('layouts/afterLogin')
@section('contentContainer')
@auth
<div class="rounded-lg w-full border">
    <a href="/user/create"></a>
    <table class="rounded-lg w-full p-20">
        <thead class="bg-white">
            <tr>
                <th class="py-2 px-8">Username</th>
                <th class="py-2 px-8">Email</th>
                <th class="py-2 px-8">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$value)
            <tr class="border-b dark:border-neutral-500 text-center">
                <td class="py-2 w-2/4">{{ $value->username}}</td>
                <td class="py-2 w-2/4">{{ $value->email}}</td>
                <td class="py-2 pr-4 flex justify-between text-sm w-2/4">
                    <a href="/user/{{ $value->id }}/edit">
                        <div class="bg-green-400 rounded-lg p-2 text-white mr-2">
                            <button class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg></button>
                        </div>
                    </a>
                    <div class="bg-red-500 rounded-lg p-2 text-white text-sm mr-2">
                        <form action="/user/{{ $value->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Apakah yaking ingin menghapus ?')" class="flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" /></svg></button>
                        </form>
                    </div>
                    <a href="/user/{{ $value->id }}/show">
                        <div class="bg-green-400 rounded-lg p-2 text-white">
                            <button class="flex items-center">Details</span></button>
                        </div>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex content-center items-center justify-between bg-white p-2">
        <div class="w-6/12">Showing {{ $data->firstItem() }} of {{ $data->lastItem() }} </div>
        <div class="w-6/12 lg:w-2/12">{{ $data->links() }}</div>
    </div>
</div>
@endauth
@endsection
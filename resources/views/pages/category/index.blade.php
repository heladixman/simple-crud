@extends('layouts/afterLogin')
@section('contentContainer')
@auth
<div class="rounded-lg w-full border">
    <table class="rounded-lg w-full p-20">
        <thead class="bg-white">
            <tr>
                <th class="py-2 px-8">Kategori</th>
                <th class="py-2 px-8">Parent</th>
                <th class="py-2 px-8"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key=>$value)
            <tr class="border-b dark:border-neutral-500">
                <td class="py-2 pl-8">{{ $value->categoryName}}</td>
                <td class="py-2">{{ $value->categoryParent}}</td>
                <td class="py-2 pr-8 text-right flex justify-end">
                    <div><button>Edit</button></div>
                    <div><button>Delete</button></div>
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
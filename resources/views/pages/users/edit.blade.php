@extends('layouts/afterLogin')
@section('contentContainer')
@auth
<div class="w-full p-4 md:p-0">
    <form class="space-y-4 md:space-y-6" action="/user/{{ $user->id }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-500 @enderror" placeholder="John" required="" value="{{ old('name', $user->name)}}">
            @error('name')
            <label for="name" class="block text-sm font-medium text-red-600 dark:text-white">{{ $message }}</label>
            @enderror
        </div>
        <div>
            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('username') border-red-500 @enderror" placeholder="Jhon222" required="" value="{{ old('username', $user->username)}}">
            @error('username')
            <label for="username" class="block text-sm font-medium text-red-600 dark:text-white">{{ $message }}</label>
            @enderror
        </div>
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') border-red-500 @enderror" placeholder="name@company.com" required="" value="{{ old('email', $user->email)}}">
            @error('email')
            <label for="email" class="block text-sm font-medium text-red-600 dark:text-white">{{ $message }}</label>
            @enderror
        </div>
        <div>
            <label for="is_admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apakah Admin</label>
            <select id="is_admin" name="is_admin" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option value="1">Admin</option>
                <option value="0">User</option>
            </select>
            @error('is_admin')
            <label for="is_admin" class="block text-sm font-medium text-red-600 dark:text-white">{{ $message }}</label>
            @enderror
        </div>
        <button type="submit" class="w-full text-white bg-sky-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update</button>
    </form>
</div>
@endauth
@endsection

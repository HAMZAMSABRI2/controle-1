@extends('layouts.app')


@section('contenu')

<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto">
    <form class="space-y-6" action="{{ route('route-update-task'    , $category->id) }}"  method="POST">
        @method('PUT')
        @csrf
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">EDIT </h5>
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">YOUR NAME</label>
            <input type="text" value="{{$category->name}}" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="VESTE" >
            @error('name')
                <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">YOUR quantity</label>
            <input type="number" value="{{$category->quantity}}" name="quantity" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="VESTE" >
            @error('quantity')
                <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>


        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>

    </form>
</div>

@endsection
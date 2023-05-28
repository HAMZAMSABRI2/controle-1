@extends('layouts.app')


@section('contenu')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    quantity
                </th>
                <th scope="col" class="px-6 py-3">
                    date de création 
                </th>

                <th scope="col" class="px-6 py-3">
                    date de modification 
                </th>
            </tr>

            @foreach ($category as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->created_at->diffforhumans()}}</td>
                    <td>{{$item->updated_at->diffforhumans()}}</td>

                    <td>
                        <a href="{{ route('route-edit-task' , $item->id) }}">Modifier</a>
                    </td>

                    <td>
                        <a href="">supprimer</a>
                    </td>
                </tr>

                
            @endforeach
        </thead>
        <tbody>



        </tbody>
    </table>
</div>

@endsection
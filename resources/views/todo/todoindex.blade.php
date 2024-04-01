<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
<x-app-layout>
<x-slot name="header">
                <h4 style="color: Blue;" class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    To-do App
                </h4>
            </x-slot>
    <a href="{{ route('create') }}">Create</a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            @if (session()->has('alert-success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('alert-success') }}
                    </div>
             @endif
                    @if(count($todo) > 0)
                        <table class="table">
                        <thead>
                         <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Completed</th>
                            
                            <th scope="col">Action</th>
                         </tr>
                        </thead>
                    <tbody>
                        
                           @foreach($todo as $todo)
                           <tr>
                                <td>{{$todo->title}}</td>
                                <td>{{$todo->description}}</td>
                                <td>
                                    
                                       
                                @if($todo -> is_completed = 1)
                                         <a class="btn btn-sm btn-success" href="" >completed </a>
                            
                                    @else
                                        <a class="btn btn-sm btn-danger"href="">in completed</a>
                                 @endif
                                </td>
                                <td id="outer" style="display: flex; align-items: center;">
                                    <a class="btn btn-warning" style="margin-right: 5px;" href="{{ route('edit', $todo->id) }}">Edit</a>
                                    <a class="btn btn-warning" style="margin-right: 5px;" href="{{ route('view', $todo->id) }}">View</a>
                                    <form action="{{ route('todo.delete', ['id' => $todo->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                    </form>
                                </td>

                                
                           </tr>
                           @endforeach
                        
                    </tbody>
                </table>
                @else
                    <h5>No todo created yet!!! </h5>
                @endif


                
                <a href="{{ route('create') }}">Want to create a new to-do?</a>
            </div>
        </div>
    </div>
</x-app-layout>

</body>
</html>

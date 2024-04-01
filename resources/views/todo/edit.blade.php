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
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    To-do App
                </h2>
            </x-slot>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                   <!-- /resources/views/post/create.blade.php -->
 

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
  
 <!-- Create Post Form -->
                    <h4>Edit form</h4>
                   
                    <form method="POST" action="{{ route('update') }}">
                            @csrf <!-- CSRF Protection -->
                            @method('PUT') <!-- Method spoofing for PUT request -->
                            <input type="hidden" name="todo_id" value="{{$todo->id}}">
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">Todo</label>
                                <input  type="text" name="title" id="title" class="form-control" value="{{$todo->title}}" placeholder="Create Todo">
                            </div>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">Briefly describe</label>
                                <textarea name="description" id="description" class="form-control" rows="3">{{$todo->description}}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label for="">Status</label>
                                <select name="is_completed" class="form-control">
                                    <option disabled selected>Select</option>
                                    <option value="1">Completed</option>
                                    <option value="0">Incomplete</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    <!-- Form end -->
                </div>
            </div>
        </x-app-layout>
    

</body>
</html>

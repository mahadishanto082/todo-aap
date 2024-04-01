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
                    <form method="POST" action="{{ route('store') }}">

                        @csrf <!-- CSRF Protection -->
                        
                        <div class="mb-3">
                            <label style="color: antiquewhite;" for="title" class="form-label">Todo</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Create Todo">
                        </div>
                        
                        <div class="mb-3">
                            <label style="color: antiquewhite;" for="description" class="form-label">Briefly describe</label>
                            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                        </div>                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </form>
                    <!-- Form end -->
                </div>
            </div>
        </x-app-layout>
    

</body>
</html>

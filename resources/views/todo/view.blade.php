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
                                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <style>
                            .todo-title {
                                color: blue;
                            }
                            .todo-description {
                                color: green;
                            }
                        </style>

                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <b class="todo-title">Your todo is: </b>
                            <div style="color: black;">
                                {{ $todo->title }}
                                </div>
                            <b class="todo-description">Your todo description is: </b>
                            <div style="color: black;">{{ $todo->description }}
                                </div>
                        </div>
                    </div>
                                    <a class= "btn btn-primary"    href="{{route('todo')}}">create todo</a>
                                </div>
                            </div>
                        </div>
                </x-app-layout>
    </body>
</html>
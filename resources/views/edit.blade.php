<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Simple Crud Operation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet"  type="text/css" href="/css/app.css">
    </head>
    <body class="antialiased">

        <div class="container-fluid">
            <div class="row main-container">
                <h1 class="card text-center bg-black text-white">
                    Simple Laravel Crud Operation
                </h1>  
                <div class="card" style="background-color: #4527a0">
                    <div class="row text-center">
                        <div class="card-body col-md-6" style="border-right:1px solid #1a202c">
                            <form action="{{ url('update/'.$to_edit->id) }}" method="post" id="form">
                                @csrf
                                @method('PUT');
                                <div class="row pt-3 pb-3">

                                    <div class="col">
                                        <label for="name">Name:</label>
                                    </div>
                                    <div class="col">
                                        <input class="input" type="text" name="name" value="{{ $to_edit->name }}" required>
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                                                       
                                    <div class="col">
                                        <label for="name">Age:</label>
                                    </div>
                                    <div class="col">
                                        <input class="input" type="number" name="age" value="{{ $to_edit->age }}" required>
                                    </div>
                                    
                                </div>
                                <div class="row pb-3">
                                                                       
                                    <div class="col">
                                        <label for="name">Course:</label>
                                    </div>
                                    <div class="col">
                                        <input class="input" type="text" name="course" value="{{ $to_edit->course }}" required>
                                    </div>
                                    
                                </div>
                                <div class="row pb-5">
                                                                       
                                <div class="col">
                                        <label for="name">Hobby:</label>
                                    </div>
                                    <div class="col">
                                        <input class="input" type="text" name="hobby" value="{{ $to_edit->hobby }}" required>
                                    </div>
                                    
                                </div>
                                                                     
                                    <button class="submit btn-primary col-md-3 p-2">Submit</button>
                                    
                                                               
                            </form>
                        </div>  

                        <div class="card-body col-md-6" >                        
                        <table class="table" style="color:#fff">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Course</th>
                                <th scope="col">Hobby</th>
                                <th scope="col">Operation</th>
                              </tr>
                            </thead>
                            <tbody>
                                                
                                <tr>
                                    <th scope="row">{{ $to_edit->id }}</th>
                                    <td>{{ $to_edit->name }}</td>
                                    <td>{{ $to_edit->age }}</td>
                                    <td>{{ $to_edit->course }}</td>
                                    <td>{{ $to_edit->hobby }}</td>
                                    <td>
                                        <a class="edit" href="{{url('/edit/'.$to_edit->id)}}">
                                            Edit  
                                        </a>
                                    || 
                                    <a class="delete" href="{{url('/delete/'.$to_edit->id)}}">
                                            Delete  
                                        </a>
                                    </td>
                                </tr>
                                
                              
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>


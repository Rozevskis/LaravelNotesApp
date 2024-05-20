<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
        <style>
        .hover{ display: none; /* Hide buttons by default */}
        .card-body:hover .hover {
            display: block; /* Show buttons on hover */
            position: absolute; /* Optional: For better positioning */
            bottom: 10px; /* Adjust as needed */
            right: 10px; /* Adjust as needed */}
    
        
        </style>
       
    </head>

    <body class="bg-light">
        {{-- <header>
            
        </header> --}}


        <main>
            @if (session('message'))<div class="alert alert-success" role="alert">
            {{session('message') }}
            </div>
            @endsession
            
           {{ $slot }}
        </main>

        
        {{-- <footer>
            <!-- place footer here -->

        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        --}}

       
    </body>
</html>

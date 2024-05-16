<x-layout>
    <div class="m-2">
       
    <a href="{{ route('note.create')}}"  class="btn btn-primary m-4">New Note</a>
        
        <div class="notes d-flex flex-wrap">
        
            @foreach ($notes as $note)

                <div class="card p-2 m-2 bg-light" style="width: 18rem;">
                    <div class="card-body">
                        <div class= "card-text">
                        {{ $note->note }}
                        </div>
                    </div>
                    <div class="note-buttons">

                        <a href="{{ route('note.show', $note)}}" 
                        class="btn btn-dark">
                        View
                        </a>
                        <a href="{{ route('note.edit', $note)}}" 
                        class="btn btn-dark">
                        Edit
                        </a>    
                        <a class="btn btn-danger">Delete</a>
                        
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</x-layout>
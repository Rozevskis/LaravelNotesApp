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
                        
                        <div class="note-buttons hover ">
                            <div class="d-flex gap-2">

                                <a href="{{ route('note.show', $note)}}" 
                                    class="btn btn-dark">
                                    View
                                </a>
                                <a href="{{ route('note.edit', $note)}}" 
                                    class="btn btn-dark">
                                    Edit
                                </a>    

                                <form action="{{ route('note.destroy', $note) }}" method="POST"> 
                                    @csrf
                                    @method('DELETE')
                                    <button href="" class="btn btn-danger">Delete</button>
                                </form>

                            </div>   
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        {{$notes->links()}}
    </div>
</x-layout>
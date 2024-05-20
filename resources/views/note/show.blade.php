<x-layout>
    <div class="m-2">

        
        <div class="notes d-flex flex-wrap">
        
          

                <div class="card p-2 m-2 bg-light" style="width: 40rem; height: 20rem;">
                    <div class="card-body">
                        <div class= "card-title">
                        Show note {{ $note->id }}
                        Created at {{$note->created_at}}
                        </div>

                        <div class="mb-3">
                            
                           <label for="" class="form-label"></label>
                           {{ $note->note }}
                        </div>
                        
                    </div>
                    <div class="note-buttons">

                        <a href="{{ route('note.edit', $note)}}" class="btn btn-dark"
                        >Edit
                        </a>
                        
                        <a href="{{ route('note.index')}}" class="btn btn-danger"
                        >Back
                        </a>
                        
                    </div>
                </div>

           
        </div>
    </div>
</x-layout>
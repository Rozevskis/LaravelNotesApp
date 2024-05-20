<x-layout>
    <div class="m-2">
        <div class="notes d-flex flex-wrap">

            <form action = "{{route('note.update', $note )}}" method="POST" > 
            @csrf
            @method('PUT')

                <div class="card p-2 m-2 bg-light" style="width: 40rem; height: 20rem;">
                    <div class="card-body">
                        <div class= "card-title">
                        Edit note {{ $note->id }}
                        </div>

                        
                        <div class="mb-3">
                           <label for="" class="form-label"></label>
                           <textarea class="form-control" name="note" id="" rows="3">{{ $note->note }}</textarea>
                           
                        </div>
                        
                    </div>
                    <div class="note-buttons">

                        <button
                        class="btn btn-dark"
                        >Submit
                        </Button>
                        
                        <a href="{{ route('note.index')}}"
                        class="btn btn-danger"
                        >Cancel
                        </a>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
<x-layout>
    <div class="m-2">      
        <div class="notes d-flex flex-wrap">
            <div class="card p-2 m-2 bg-light" style="width: 40rem; ">
                <div class="card-body">
                    
                    <form action="{{route('note.index')}}" method="POST" > 
                    @csrf
                        <div class="mb-3">
                        <label for="" class="form-label">Create new note</label>
                        
                        <textarea class="form-control" name="note" id="" rows="3"></textarea>
                        </div>
                                       
                        <div class="note-buttons">

                            <button type='submit' class="btn btn-dark"
                            >Submit
                            </button>
                                                                                  
                            <a href="{{ route('note.index')}}"
                            class="btn btn-danger"
                            >Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>          
        </div>
    </div>
</x-layout>
<x-layout>
    <div class="m-2">

        
        <div class="notes d-flex flex-wrap">
        
          

                <div class="card p-2 m-2 bg-light" style="width: 40rem; height: 20rem;">
                    <div class="card-body">
                        <div class= "card-title">
                        Create new note
                        </div>

                        <div class="mb-3">
                           <label for="" class="form-label"></label>
                           <textarea class="form-control" name="" id="" rows="3"></textarea>
                        </div>
                        
                    </div>
                    <div class="note-buttons">

                        <a href=" " 
                        class="btn btn-dark"
                        >Submit
                        </a>
                        
                        <a href="{{ route('note.index')}}"
                        class="btn btn-danger"
                        >Cancel
                        </a>
                        
                    </div>
                </div>

           
        </div>
    </div>
</x-layout>
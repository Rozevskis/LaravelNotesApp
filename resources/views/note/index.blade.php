
<x-app-layout>
   <div class="m-4">
    <a href="{{ route('note.create') }}" class="bg-blue-500 text-white px-4 py-2 mx-2 rounded">New Note</a>

    <div class="notes flex flex-wrap mt-2">
        @foreach ($notes as $note)
            <div class="card-body bg-gray-100 p-4 m-2 rounded shadow-lg" style="width: 18rem;">

                <div class="card-text mb-4">
                    {{ $note->note }}
                </div>

                <div class="hover note-buttons">
                    <div class="flex gap-2 ">
                        <a href="{{ route('note.show', $note) }}" class="bg-gray-800 text-white px-3 py-2 rounded">
                            View
                        </a>
                        <a href="{{ route('note.edit', $note) }}" class="bg-gray-800 text-white px-3 py-2 rounded">
                            Edit
                        </a>

                        <form action="{{ route('note.destroy', $note) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-2 rounded">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{$notes->links()}}
</div>

</x-app-layout>
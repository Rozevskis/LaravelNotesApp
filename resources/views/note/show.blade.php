<x-app-layout>
    <div class="m-2">
        <div class="notes flex flex-wrap">
            <div class="bg-gray-100 p-4 m-2 rounded shadow-lg" style="width: 40rem; height: 20rem;">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <h2>Show note {{ $note->id }}</h2>
                        <p>Created at {{ $note->created_at }}</p>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label"></label>
                        <p>{{ $note->note }}</p>
                    </div>
                </div>
                <div class="note-buttons flex gap-2 mt-4">
                    <a href="{{ route('note.edit', $note) }}" class="bg-gray-800 text-white px-4 py-2 rounded">
                        Edit
                    </a>

                    <a href="{{ route('note.index') }}" class="bg-red-500 text-white px-4 py-2 rounded">
                        Back
                    </a>

                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

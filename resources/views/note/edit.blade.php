<x-app-layout>
    <div class="m-2">
        <div class="notes flex flex-wrap">

            <form action="{{ route('note.update', $note) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="bg-gray-100 p-4 m-2 rounded shadow-lg" style="width: 40rem; min-height: 20rem;">
                    <div class="card-body">
                        <div class="card-title text-xl font-semibold mb-4">
                            Edit note {{ $note->id }}
                        </div>

                        <div class="mb-3">
                            <label for="note" class="block text-sm font-medium text-gray-700">Note</label>
                            <textarea class="form-control mt-1 block w-full p-2 border border-gray-300 rounded-md" name="note" id="note" rows="3">{{ $note->note }}</textarea>
                        </div>
                    </div>

                    <div class="note-buttons flex gap-2 mt-4">
                        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Submit</button>

                        <a href="{{ route('note.index') }}" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-400">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <div class="m-2">
    <div class="notes flex flex-wrap">
        <div class="bg-gray-100 p-4 m-2 rounded shadow-lg" style="width: 40rem;">
            <div class="card-body">
                <form action="{{ route('note.index') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="note" class="block text-gray-700 text-sm font-bold mb-2">Create new note</label>
                        <textarea class="form-control border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="note" id="note" rows="3"></textarea>
                    </div>
                    
                    <div class="note-buttons flex gap-2">
                        <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded">
                            Submit
                        </button>
                        <a href="{{ route('note.index') }}" class="bg-red-500 text-white px-4 py-2 rounded">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
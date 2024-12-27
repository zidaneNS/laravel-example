<form action="{{ $slot }}" method="POST">
    @csrf
    @method("DELETE")
    <button type="submit" class="border px-2 py-2 hover:bg-red-600 hover:text-slate-50 rounded-lg bg-transparent text-red-600 border-red-600">Delete</button>
</form>
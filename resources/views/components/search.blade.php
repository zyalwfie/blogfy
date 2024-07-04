<form class="flex gap-2">
  @if (request('category'))
    <input name="category" type="hidden" value="{{ request('category') }}">
  @elseif (request('author'))
    <input name="author" type="hidden" value="{{ request('author') }}">
  @endif
  <div class="relative">
    <label class="absolute left-4 top-[50%] translate-y-[-50%] text-slate-600" for="search">
      <svg class="bi bi-search" fill="currentColor" height="19" viewBox="0 0 16 16" width="19"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
      </svg>
    </label>
    <input autocomplete="off"
      class="min-w-0 flex-auto rounded border-2 bg-gray-100 py-2 pl-12 focus:border-slate-500 focus:outline-none"
      id="search" name="search" placeholder="Search" type="text">
  </div>
  <button
    class="flex-none rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"
    type="submit">
    Search
  </button>
</form>

<x-layout>
  <x-slot:title>Blogs</x-slot:title>
  <x-slot:header>Blogs ({{ count($blogs) }} of posts)</x-slot:header>
  <div class="py-6 sm:py-8">
    <div class="mx-auto max-w-7xl">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @forelse ($blogs as $blog)
          <article class="flex max-w-xl flex-col justify-between">
            <div class="flex flex-col items-start gap-y-4 text-xs">
              <div class="thumbnail overflow-hidden rounded-lg shadow-md">
                <img alt="Thumbnail" src="/img/thumbnail.jpg">
              </div>
              <div class="date-category">
                <time class="text-gray-500" datetime="2020-03-16">{{ $blog->created_at->diffForHumans() }}</time>
                <a class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium capitalize text-gray-600 hover:bg-gray-100"
                  href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a>
              </div>
            </div>
            <div class="group relative">
              <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                <a href="{{ route('blogs.show', $blog->slug) }}">
                  <span class="absolute inset-0"></span>
                  {{ $blog->title }}
                </a>
              </h3>
              <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                {{ $blog->excerpt }}
              </p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
              <img alt="" class="h-10 w-10 rounded-full bg-gray-50"
                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80">
              <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                  <a href="/blogs?author={{ $blog->author->nickname }}">
                    <span class="absolute inset-0"></span>
                    {{ $blog->author->name }}
                  </a>
                </p>
                <p class="text-gray-600">{{ $blog->author->title }}</p>
              </div>
            </div>
          </article>
        @empty
          <h3 class="col-start-1 col-end-4 mx-auto flex items-center gap-x-4 text-center">
            <span class="text-xl font-bold italic first-letter:capitalize">blogs not found</span>
            <span>|</span>
            <a class="flex items-center gap-3 text-lg font-light" href="/blogs">
              <span>
                <svg class="bi bi-box-arrow-left" fill="currentColor" height="24" viewBox="0 0 16 16" width="24"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"
                    fill-rule="evenodd" />
                  <path
                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"
                    fill-rule="evenodd" />
                </svg>
              </span>
              <span>
                Back to all posts
              </span>
            </a>
          </h3>
        @endforelse
      </div>
    </div>
  </div>
</x-layout>

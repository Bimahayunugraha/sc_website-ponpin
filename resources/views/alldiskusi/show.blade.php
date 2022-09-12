@extends('layouts.main')

@section('content')
    <main class="container py-24">

        <div class="mb-4 md:mb-0 w-full mx-auto relative">
            <div class="px-4 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 leading-tight">
                    {{ $forum->title }}
                </h2>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row lg:space-x-12">

            <div class="px-4 lg:px-0 mt-12 text-gray-700 text-lg leading-relaxed w-full lg:w-3/4">
                <p class="pb-6">{!! $forum->description !!}</p>
            </div>

            <div class="w-full lg:w-1/4 m-auto mt-12 max-w-screen-sm">
                <div class="p-4 border-t border-b md:border md:rounded">
                    <div class="flex py-2">
                        <img src="https://randomuser.me/api/portraits/men/97.jpg"
                            class="h-10 w-10 rounded-full mr-2 object-cover" />
                        <div>
                            <p class="font-semibold text-gray-700 text-sm"> Mike Sullivan </p>
                            <p class="font-semibold text-gray-600 text-xs"> Editor </p>
                        </div>
                    </div>
                    <p class="text-gray-700 py-3">
                        Mike writes about technology
                        Yourself required no at thoughts delicate landlord it be. Branched dashwood do is whatever it.
                    </p>
                    <button class="px-2 py-1 text-gray-100 bg-green-700 flex w-full items-center justify-center rounded">
                        Follow
                        <i class='bx bx-user-plus ml-2'></i>
                    </button>
                </div>
            </div>

        </div>

        <div class="inline-flex rounded-md shadow-sm" role="group">
            <button type="button"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-l-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="far fa-thumbs-up mr-2"></i>
                Suka
            </button>
            <button type="button" id="btn-comment" name="btn-comment"
                class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700">
                <i class="far fa-comment mr-2"></i>
                Komentar
            </button>
        </div>

        <div class="w-full rounded-lg shadow-md bg-none mt-2 hidden" id="comment-area">
            <form action="" class="w-full p-4" method="post">
                @csrf
                <div class="mb-2">
                    <label for="body" class="text-lg text-gray-600">Add a comment</label>
                    <input type="hidden" name="forum_id" id="forum_id" value="{{ $forum->id }}">
                    <input type="hidden" name="parent" id="parent" value="0">
                    <textarea class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1" name="body"
                        id="body" placeholder=""></textarea>
                </div>
                <div>
                    <button type="submit" class="px-3 py-2 text-sm text-white bg-blue-600 rounded">
                        Comment
                    </button>
                    <button class="px-3 py-2 text-sm text-blue-600 border border-blue-500 rounded">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- component -->
        <div class="antialiased mx-auto w-full mt-3">
            <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>
            @forelse ($forum->komentar()->where('parent', 0)->orderBy('created_at', 'desc')->get() as $komentar)
                <div class="space-y-4 py-2">

                    <div class="flex">
                        {{-- <div class="flex-shrink-0 mr-3">
                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                            src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                            alt="">
                    </div>
                    <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                        <strong>Sarah</strong> <span class="text-xs text-gray-400">3:34 PM</span>
                        <p class="text-sm">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                            sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua.
                        </p>
                        <div class="mt-4 flex items-center">
                            <div class="flex -space-x-2 mr-2">
                                <img class="rounded-full w-6 h-6 border border-white"
                                    src="https://images.unsplash.com/photo-1554151228-14d9def656e4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                    alt="">
                                <img class="rounded-full w-6 h-6 border border-white"
                                    src="https://images.unsplash.com/photo-1513956589380-bad6acb9b9d4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=100&h=100&q=80"
                                    alt="">
                            </div>
                            <div class="text-sm text-gray-500 font-semibold">
                                5 Replies
                            </div>
                        </div>
                    </div>
                </div> --}}

                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $komentar->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $komentar->created_at->diffForHumans() }}</span>
                                <p class="text-sm">
                                    {{ $komentar->body }}
                                </p>

                                <button type="button" id="btn-reply-comment" name="btn-reply-comment"
                                    class="inline-flex items-center uppercase tracking-wide py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700">
                                    <small>Balas</small>
                                </button>

                                <div class="space-y-4">
                                    <div class="flex">
                                        <form action="" class="w-full p-4 hidden" id="reply-comment-area" method="post">
                                            @csrf
                                            <div class="mb-2">
                                                <input type="hidden" name="forum_id" id="forum_id"
                                                    value="{{ $forum->id }}">
                                                <input type="hidden" name="parent" id="parent"
                                                    value="{{ $komentar->id }}">
                                                <textarea class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1" name="body"
                                                    id="body" placeholder=""></textarea>
                                            </div>
                                            <div>
                                                <button type="submit"
                                                    class="px-3 py-2 text-sm text-white bg-blue-600 rounded">
                                                    Comment
                                                </button>
                                                <button
                                                    class="px-3 py-2 text-sm text-blue-600 border border-blue-500 rounded">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    @foreach ($komentar->childs()->orderBy('created_at', 'desc')->get() as $child)
                                    <div class="flex">
                                        <div class="flex-shrink-0 mr-3">
                                            <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                                alt="">
                                        </div>
                                        <div
                                            class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                            <strong>{{ $child->user->name }}</strong> <span class="text-xs text-gray-400">{{ $child->created_at->diffForHumans() }}</span>
                                            <p class="text-xs sm:text-sm">
                                                {{ $child->body }}
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada komentar
                </div>
            @endforelse
    </main>
    <!-- main ends here -->

    {{-- Footer start --}}
    @include('partials.footer')
    {{-- Footer end --}}

    <script>
        $(document).ready(function() {
            $('#btn-comment').click(function() {
                $('#comment-area').toggle('slide');
            });
        });
        $(document).ready(function() {
            $('#btn-reply-comment').click(function() {
                $('#reply-comment-area').toggle('slide');
            });
        });
    </script>
@endsection

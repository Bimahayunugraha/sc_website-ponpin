@extends('layouts.admin')
@section('content')
    <div class="relative overflow-y-auto">
        <div class="container w-full mx-auto py-2">
            <div class="antialiased mx-auto w-full">
                <div class="flex items-center justify-between my-6">
                    <h2 class="text-xl font-bold text-gray-800">Hasil Penilaian</h2>
                    <a href="{{ route('export_excel') }}"
                        class="shadow inline-flex items-center bg-blue-500 hover:bg-blue-600 focus:outline-none focus:shadow-outline text-white font-semibold py-2 px-4 rounded-lg" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 w-5 h-5" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Export Excel
                    </a>
                </div>
                <hr>
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori CCTV 
                    </h3>
                    @if ($results1 > 0)
                        <div class="flex items-center">
                          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                          <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results1 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                          <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate1 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate1->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Saluran Air</h3>
                    @if ($results2 > 0)
                            <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results2 }} out of 5</p>
                            </div>
                            @else
                            <div class="flex items-center">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                            </div>
                    @endif
                </div>
                @forelse ($evaluate2 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->format('l, d M Y') }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate2->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Penerangan Umum</h3>
                    @if ($results3 > 0)
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results3 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate3 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate3->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Portal Jalan Warga</h3>
                    @if ($results4 > 0)
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results4 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate4 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate4->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Kebersihan</h3>
                    @if ($results5 > 0)
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results5 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate5 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate5->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Keamanan</h3>
                    @if ($results6 > 0)
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results6 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate6 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate6->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Akses Jalan</h3>
                    @if ($results7 > 0)
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results7 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate7 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate7->links() }}
                <hr class="my-5" />
                <div class="flex items-center">
                    <h3 class="py-2 mr-3 text-md font-semibold text-gray-900">Kategori Kondisi Jalan</h3>
                    @if ($results8 > 0)
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $results8 }} out of 5</p>
                        </div>
                        @else
                        <div class="flex items-center">
                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">0 out of 5</p>
                        </div>
                    @endif
                </div>
                @forelse ($evaluate8 as $evaluate)
                <div class="space-y-4 py-2">
                    <div class="flex">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                    src="{{ asset('img/user.png') }}"
                                    alt="">
                            </div>
                            <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                <strong>{{ $evaluate->user->name }}</strong> <span
                                    class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                <p>
                                    @for($i=1; $i<=$evaluate->star_evaluation; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    @for($j=$evaluate->star_evaluation+1; $j<=5; $j++) 
                                        <span><i class="fa fa-star"></i></span>
                                    @endfor       
                                </p> 
                                <p class="text-sm">
                                    {{ $evaluate->reason }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada hasil penilaian, harap tunggu sampai warga memberikan penilaian.
                </div>
                @endforelse
                {{ $evaluate8->links() }}
                <hr class="my-5" />
            </div>  
        </div>
    </div>
@endsection
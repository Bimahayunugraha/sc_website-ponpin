@extends('layouts.main')

@section('content')
    <div class="relative dark:bg-dark">
        <div class="container w-full mx-auto py-28">
            <nav class="relative flex flex-wrap bg-gray-50 text-gray-700 border border-gray-200 py-3 px-5 rounded-lg dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                <ol class="inline-flex flex-wrap items-center space-x-1 md:space-x-3">
                  <li class="inline-flex items-center">
                    <a href="/" class="text-sm text-gray-700 hover:text-gray-900 inline-flex items-center dark:text-gray-400 dark:hover:text-white">
                      <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                      Home
                    </a>
                  </li>
                  <li>
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <a href="{{ route('penilaian.index') }}" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium dark:text-gray-400 dark:hover:text-white">Semua Penilaian</a>
                    </div>
                  </li>
                  <li aria-current="page">
                    <div class="flex items-center">
                      <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                      <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium dark:text-gray-500">{{ $topic->category->name }}</span>
                    </div>
                  </li>
                </ol>
            </nav>
            <div class="flex flex-col justify-between leading-normal pt-5">
                <div class="">
                    <h1 class="text-gray-900 font-bold text-4xl dark:text-white">{{ $topic->title }}</h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex">
                        <span class="mr-3 flex flex-row items-center">
                            <svg class="text-indigo-600 dark:text-white" fill="currentColor" height="13px" width="13px"
                                version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                  c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                  c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1 dark:text-gray-400">{{ $topic->created_at }}</span></span>
                        <span href="#" class="flex flex-row items-center">
                            <svg class="text-indigo-600 dark:text-white" fill="currentColor" height="16px"
                                aria-hidden="true" role="img" focusable="false"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path fill=""
                                    d="M15.4496399,8.42490555 L8.66109799,1.63636364 L1.63636364,1.63636364 L1.63636364,8.66081885 L8.42522727,15.44178 C8.57869221,15.5954158 8.78693789,15.6817418 9.00409091,15.6817418 C9.22124393,15.6817418 9.42948961,15.5954158 9.58327627,15.4414581 L15.4486339,9.57610048 C15.7651495,9.25692435 15.7649133,8.74206554 15.4496399,8.42490555 Z M16.6084423,10.7304545 L10.7406818,16.59822 C10.280287,17.0591273 9.65554997,17.3181054 9.00409091,17.3181054 C8.35263185,17.3181054 7.72789481,17.0591273 7.26815877,16.5988788 L0.239976954,9.57887876 C0.0863319284,9.4254126 0,9.21716044 0,9 L0,0.818181818 C0,0.366312477 0.366312477,0 0.818181818,0 L9,0 C9.21699531,0 9.42510306,0.0862010512 9.57854191,0.239639906 L16.6084423,7.26954545 C17.5601275,8.22691012 17.5601275,9.77308988 16.6084423,10.7304545 Z M5,6 C4.44771525,6 4,5.55228475 4,5 C4,4.44771525 4.44771525,4 5,4 C5.55228475,4 6,4.44771525 6,5 C6,5.55228475 5.55228475,6 5,6 Z">
                                </path>
                            </svg>
                            
                            <span class="ml-1 text-slate-700 hover:text-blue-700 dark:text-gray-400"><a href="/penilaian?category={{ $topic->category->slug }}"
                                class="relative flex items-center justify-center flex-wrap font-medium">
                                {{ $topic->category->name }}         
                            </a></span>
                    </div>
                    <hr />
                    <div class="dark:text-slate-400 font-medium">
                        <p class="text-base leading-8 my-5">
                            {!! $topic->description !!}</p>
                    </div>
                </div>

            </div>
            <hr class="my-5" />
            @if ($topic->evaluation()->where([ 'user_id' => Auth::user()->id, 'topic_id' => $topic->id])->first())
            <div class="flex items-center justify-center mt-10">
                <?xml version="1.0" encoding="iso-8859-1"?>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="128px" height="128px" viewBox="0 0 128 128" style="enable-background:new 0 0 128 128;" xml:space="preserve">
                <g>
                    <circle style="fill:#FFC200;" cx="64" cy="64" r="64"/>
                    <path style="fill:#F2B800;" d="M64,0c-1.685,0-3.348,0.085-5,0.213C92.008,2.766,118,30.337,118,64s-25.992,61.232-59,63.787
                        c1.652,0.127,3.315,0.213,5,0.213c35.348,0,64-28.652,64-64C128,28.652,99.348,0,64,0z"/>
                    <path style="fill:#F2B800;" d="M65,114c-25.729,0-49.093-21.93-49.999-46.928c-0.02-0.543,0.182-1.07,0.559-1.461
                        S16.456,65,16.999,65h95c1.076,0,1.959,0.852,1.999,1.928c0.4,11.055-4.307,22.516-12.917,31.442C91.502,108.303,78.352,114,65,114
                        z"/>
                    <path style="fill:#F5F5F5;" d="M112,67c0.833,23-21.16,45-47,45c-25.829,0-47.167-22-48-45H112z"/>
                    <g>
                        <path style="fill:#263740;" d="M52,42c-1.657,0-3-1.343-3-3c0-4.962-4.038-9-9-9s-9,4.038-9,9c0,1.657-1.343,3-3,3s-3-1.343-3-3
                            c0-8.271,6.729-15,15-15s15,6.729,15,15C55,40.657,53.657,42,52,42z"/>
                        <path style="fill:#263740;" d="M102,42c-1.657,0-3-1.343-3-3c0-4.962-4.038-9-9-9s-9,4.038-9,9c0,1.657-1.343,3-3,3s-3-1.343-3-3
                            c0-8.271,6.729-15,15-15s15,6.729,15,15C105,40.657,103.657,42,102,42z"/>
                    </g>
                    <path style="fill:#E6E6E6;" d="M103.512,92.42c0.95-1.268,1.83-2.576,2.637-3.92h-0.637V67h-2v21.5h-18V67h-2v21.5h-18V67h-2v21.5
                        h-18V67h-2v21.5h-18V67h-2v20.967c0.627,1.036,1.294,2.051,2,3.042v-0.51h18v16.171c0.658,0.341,1.325,0.667,2,0.979V90.499h18
                        v21.46c0.496,0.016,0.989,0.04,1.488,0.04c0.171,0,0.341-0.013,0.512-0.015V90.5h18v17.635c0.674-0.29,1.342-0.592,2-0.912V90.5h18
                        V92.42z"/>
                </g>
                </svg>

            </div>
            <div class="flex items-center justify-center text-xs sm:text-xs md:text-xs lg:text-xl text-red-500 font-medium mt-5 dark:text-slate-400">
                <i class="far fa-exclamation-circle mr-3"></i>Terima kasih. Anda sudah memberikan penilaian.
            </div>
            @else      
            <div class="text-base text-red-500 font-medium mt-10 dark:text-red-600"><i class="far fa-exclamation-circle"></i> Berikan penilaian Anda dibawah ini <span class="text-xs text-slate-600 dark:text-slate-400 italic">(Penilaian hanya dapat diberikan sebanyak 1 kali)</span></div>
            <form action="{{ route('rating.store', ['id'=>Auth::user()->id]) }}" method="post">
                @csrf
                <input type="hidden" name="topic_id" value="{{$topic->id}}">
                <input type="hidden" name="category_id" value="{{$topic->category->id}}">
                <div class="flex items-center mt-3">
                    <div class="rating mb-5">
                        <input type="radio" id="rating-5" value="5" name="star_evaluation">
                        <label for="rating-5"></label>
                        <input type="radio" id="rating-4" value="4" name="star_evaluation">
                        <label for="rating-4"></label>
                        <input type="radio" id="rating-3" value="3" name="star_evaluation">
                        <label for="rating-3"></label>
                        <input type="radio" id="rating-2" value="2" name="star_evaluation">
                        <label for="rating-2"></label>
                        <input type="radio" id="rating-1" value="1" name="star_evaluation">
                        <label for="rating-1"></label>
                        <div class="emoji-wrapper">
                          <div class="emoji">
                            <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534"/>
                            <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff"/>
                            <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347"/>
                            <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63"/>
                            <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff"/>
                            <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347"/>
                            <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63"/>
                            <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347"/>
                          </svg>
                            <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                            <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347"/>
                            <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534"/>
                            <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff"/>
                            <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347"/>
                            <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff"/>
                            <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534"/>
                            <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff"/>
                            <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347"/>
                            <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff"/>
                          </svg>
                            <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                            <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347"/>
                            <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff"/>
                            <circle cx="340" cy="260.4" r="36.2" fill="#3e4347"/>
                            <g fill="#fff">
                              <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10"/>
                              <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z"/>
                            </g>
                            <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347"/>
                            <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff"/>
                          </svg>
                            <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                      <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347"/>
                      <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                      <g fill="#fff">
                        <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z"/>
                        <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81"/>
                      </g>
                      <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                      <g fill="#fff">
                        <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1"/>
                        <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81"/>
                      </g>
                      <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347"/>
                      <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff"/>
                    </svg>
                            <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <circle cx="256" cy="256" r="256" fill="#ffd93b"/>
                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534"/>
                            <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                            <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f"/>
                            <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                            <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b"/>
                            <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f"/>
                            <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff"/>
                            <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347"/>
                            <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b"/>
                          </svg>
                            <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <g fill="#ffd93b">
                              <circle cx="256" cy="256" r="256"/>
                              <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z"/>
                            </g>
                            <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4"/>
                            <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea"/>
                            <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88"/>
                            <g fill="#38c0dc">
                              <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z"/>
                            </g>
                            <g fill="#d23f77">
                              <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z"/>
                            </g>
                            <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347"/>
                            <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b"/>
                            <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2"/>
                          </svg>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="relative">
                        <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                            <div class="py-2 px-4 bg-white rounded-t-lg dark:bg-gray-800">
                                <label for="reason" class="sr-only"></label>
                                <textarea id="reason" name="reason" rows="4" class="px-0 w-full text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400 @error('reason') is-invalid @enderror"" placeholder="Tulis alasan disini" required></textarea>
                            </div>
                            <div class="flex justify-between items-center py-2 px-3 border-t dark:border-gray-600">
                                <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 dark:bg-gray-800 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Kirim alasan
                                </button>                          
                            </div>
                        </div>
                    {{-- <div class="dark:bg-gray-800">
                        <textarea id="reason" name="reason" rows="3" class="shadow-sm dark:text-white dark:bg-slate-800 focus:ring-indigo-500 focus:border-indigo-500 mt-1 w-full sm:text-sm border border-gray-300 rounded-md placeholder:text-slate-600 font-medium @error('reason') is-invalid @enderror" placeholder="Tulis alasan Anda disini" required></textarea>
                        <input id="reason" name="reason"
                            class="pt-2 pb-2 pl-3 w-full h-11 bg-gray-100 dark:text-white dark:bg-slate-800 rounded-lg placeholder:text-slate-600 font-medium pr-20 @error('reason') is-invalid border-red-500 @enderror" value="{{ old('reason') }}" required
                            type="text"
                            placeholder="Alasan"
                        />
                    </div>
                    <div class="absolute right-3 top-6 sm:top-0 md:top-6 lg:top-6 pt-8 mt-3 sm:mt-3 md:-mt-3 lg:-mt-3 items-center">
                        <button type="submit"><svg
                            class="fill-blue-500 dark:fill-slate-600"
                            style="width: 24px; height: 24px;"
                            viewBox="0 0 24 24"
                            >
                            <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
                            </svg></button>
                    </div> --}}
                </div>
            </form>
            @endif
            {{-- @elseif($topic->status == 'buka') 
            <div id="rate" x-data="{ activeTab: 1 }">
                <div class="flex items-center mt-8">
                    <div class="rate">
                        <input type="radio" id="star5" class="rate" name="star_evaluation" value="5"/>
                        <label for="star5" title="Sangat baik">5 stars</label>
                        <input type="radio" id="star4" class="rate" name="star_evaluation" value="4"/>
                        <label for="star4" title="Cukup baik">4 stars</label>
                        <input type="radio" id="star3" class="rate" name="star_evaluation" value="3"/>
                        <label for="star3" title="Baik">3 stars</label>
                        <input type="radio" id="star2" class="rate" name="star_evaluation" value="2">
                        <label for="star2" title="Tidak baik">2 stars</label>
                        <input type="radio" id="star1" class="rate" name="star_evaluation" value="1"/>
                        <label for="star1" title="Sanat tidak baik">1 star</label>
                    </div>
                </div>
                <div class="relative">
                    <input id="reason" name="reason"
                        class="pt-2 pb-2 pl-3 w-full h-11 bg-slate-100 dark:text-white dark:bg-slate-800 rounded-lg placeholder:text-slate-600 font-medium pr-20 @error('reason') is-invalid border-red-500 @enderror" value="{{ old('reason') }}" required
                        type="text"
                        placeholder="Alasan"
                    />
                    <span class="flex flex-wrap absolute right-3 top-6 sm:top-0 md:top-6 lg:top-6 -mt-3 sm:mt-3 md:-mt-3 lg:-mt-3 items-center">
                        <button type="submit"><svg
                            class="fill-blue-500 dark:fill-slate-600"
                            style="width: 24px; height: 24px;" @click="showModal1 = true"
                            viewBox="0 0 24 24"
                            >
                            <path d="M2,21L23,12L2,3V10L17,12L2,14V21Z"></path>
                            </svg></button>
                    </span>
                    <h4 class="text-sm sm:text-sm md:text-sm lg:text-xl text-red-700 font-bold">Harap memberikan penilaian satu kali</h4>
                    <div class="flex items-center justify-center fixed left-0 bottom-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                    x-show="showModal1"
                    x-transition:enter="transition duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    >
                    <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/4 mx-2 sm:mx-auto my-10 opacity-100">
                        <div
                        class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20"
                        @click.away="showModal1 = false"
                        x-show="showModal1"
                        x-transition:enter="transition transform duration-300"
                        x-transition:enter-start="scale-0"
                        x-transition:enter-end="scale-100"
                        x-transition:leave="transition transform duration-300"
                        x-transition:leave-start="scale-100"
                        x-transition:leave-end="scale-0"
                        >
                        <header class="flex flex-col justify-center items-center p-3 text-green-600">
                            <div class="flex justify-center w-28 h-28 border-4 border-green-600 rounded-full mb-4">
                            <svg class="fill-current w-20" viewBox="0 0 20 20">
                                <path
                                d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                                ></path>
                            </svg>
                            </div>
                            <h2 class="font-semibold text-2xl">Halo {{ Auth::user()->name }}!!</h2>
                        </header>
                        <main class="p-3 text-center">
                            <p>
                            Maaf Anda hanya dapat melakukan penilaian sekali saja
                            </p>
                        </main>
                        <footer class="flex justify-center bg-transparent">
                            <button
                            class="bg-green-600 font-semibold text-white py-3 w-full rounded-b-md hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                            @click="showModal1 = false"
                            >
                            Confirm
                            </button>
                        </footer>
                        </div>
                    </div>
                    </div>
                </div>
            </div> --}}
            @can('admin', Model::class)
            <div class="antialiased mx-auto w-full py-10">
                <h3 class="mb-4 text-lg font-semibold text-gray-900">Kolom Penilaian</h3>
                @forelse ($topic->evaluation()->orderBy('created_at', 'desc')->get() as $evaluate)
                    <div class="space-y-4 py-2">
    
                        <div class="flex">
                            <div class="flex">
                                <div class="flex-shrink-0 mr-3">
                                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                        src="https://images.unsplash.com/photo-1604426633861-11b2faead63c?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=200&h=200&q=80"
                                        alt="">
                                </div>
                                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                    <strong>{{ $evaluate->name }}</strong> <span
                                        class="text-xs text-gray-400">{{ $evaluate->created_at->diffForHumans() }}</span>
                                    @for($i=1; $i<=$evaluate->star_rating; $i++) 
                                        <span><i class="fa fa-star text-yellow-400"></i></span>
                                    @endfor
                                    <p class="text-sm">
                                        {{ $evaluate->comments }}
                                    </p>
    
                                    {{-- <button type="button" id="btn-reply-comment" name="btn-reply-comment"
                                        class="inline-flex items-center uppercase tracking-wide py-2 text-xs font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700">
                                        <small>Balas</small>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>  
            @empty
                <div class="w-full mt-3 text-md font-bold">
                    Belum ada penilaian, jadilah yang pertama menilai kami.
                </div>
            @endforelse
            @endcan
            <!-- component -->
            {{-- <div class="w-full">
                <div class="h-96"></div>
                <div class="max-w-5xl mb-12">
                    <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
                        <p class="text-3xl font-bold leading-7 text-center">Contact me</p>
                        <form action="{{ route('rating.store') }}" method="post">
                            @csrf
                           <input type="hidden" name="topic_id" value="{{$topic->id}}">
                            <div class="md:flex items-center mt-12">
                                <div class="w-full md:w-1/2 flex flex-col">
                                    <label class="font-semibold leading-none">Nama</label>
                                    <input type="text" name="name" id="name"
                                        class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200 @error('name') is-invalid @enderror" value="{{ old('name') }}" required/>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                                    <label class="font-semibold leading-none">Nomor Telepon</label>
                                    <input type="text" name="phone" id="phone" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required />
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div>
                                <div class="w-full flex flex-col mt-8">
                                    <label class="font-semibold leading-none">Message</label>
                                    <textarea type="text" id="comment" name="comment"
                                        class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200"></textarea>
                                </div>
                            </div>
                            <div class="flex items-center justify-center w-full">
                                <button type="submit"
                                    class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                                    Kirim penilaian
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    @if(session()->has('success'))
                <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 pt-11 md:w-full max-w-md" x-data="{ open: true }"
                x-show.transition="open">
                <input type="checkbox" class="hidden" id="footertoast">
            
                <label class="close cursor-pointer px-2 flex items-center opacity-90 justify-between w-full p-2 bg-yellow-500 font-medium rounded shadow-lg text-white" title="close" for="footertoast">
                  <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="fas fa-bell"></i>
                  </span>
                  <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('success') }}
                  </span>
                  <button class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none" x-on:click="open = false">
                    <span>×</span>
            
                  </button>
                </label>
              </div>
        @elseif(session()->has('error'))
                <div class="alert-toast fixed top-0 right-0 m-8 w-full px-2 pt-11 md:w-full max-w-md" x-data="{ open: true }"
                x-show.transition="open">
                <input type="checkbox" class="hidden" id="footertoast">
            
                <label class="close cursor-pointer px-2 flex items-center opacity-90 justify-between w-full p-2 bg-red-600 font-medium rounded shadow-lg text-white" title="close" for="footertoast">
                  <span class="text-xl inline-block mr-2 ml-6 align-middle">
                    <i class="far fa-exclamation-triangle"></i>
                  </span>
                  <span class="inline-block align-middle mr-10 pr-6 text-sm px-auto">
                    {{ session('error') }}
                  </span>
                  <button class="inline-block bg-transparent text-2xl font-semibold leading-none right-0 top-0 align-middle mr-6 outline-none focus:outline-none" x-on:click="open = false">
                    <span>×</span>
            
                  </button>
                </label>
              </div>
        @endif
    <script>
        $(document).ready(function() {
    
            window.setTimeout(function() {
                $(".alert-toast").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 2000);
    
        });
    </script>
@endsection

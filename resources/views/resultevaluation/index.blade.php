@extends('layouts.main')

@section('content')
<div class="dark:bg-dark">
    <div class="flex items-center py-28 w-full h-full">
        <div class="container px-6 mx-auto grid">
        <h2 class="mb-6 text-2xl font-semibold text-gray-700 dark:text-white">
            Hasil Penilaian
        </h2>
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="24" height="24"><path d="M20.916 9.564a.998.998 0 0 0-.513-1.316L7.328 2.492c-.995-.438-2.22.051-2.645 1.042l-2.21 5.154a2.001 2.001 0 0 0 1.052 2.624L9.563 13.9 8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054 5.205 2.23a1 1 0 0 0 1.31-.517l.312-.71 1.701.68 2-5-1.536-.613.523-1.194zm-4.434 5.126L4.313 9.475l2.208-5.152 12.162 5.354-2.201 5.013z"></path></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  CCTV
                </p>
                <p class="text-base font-medium text-gray-700">
                  <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result11)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result11 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result1 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                    {{ $result1 }} Penilaian
                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" style="transform: ;msFilter:;"><path d="M5.996 9c1.413 0 2.16-.747 2.705-1.293.49-.49.731-.707 1.292-.707s.802.217 1.292.707C11.83 8.253 12.577 9 13.991 9c1.415 0 2.163-.747 2.71-1.293.491-.49.732-.707 1.295-.707s.804.217 1.295.707C19.837 8.253 20.585 9 22 9V7c-.563 0-.804-.217-1.295-.707C20.159 5.747 19.411 5 17.996 5s-2.162.747-2.709 1.292c-.491.491-.731.708-1.296.708-.562 0-.802-.217-1.292-.707C12.154 5.747 11.407 5 9.993 5s-2.161.747-2.706 1.293c-.49.49-.73.707-1.291.707s-.801-.217-1.291-.707C4.16 5.747 3.413 5 2 5v2c.561 0 .801.217 1.291.707C3.836 8.253 4.583 9 5.996 9zm0 5c1.413 0 2.16-.747 2.705-1.293.49-.49.731-.707 1.292-.707s.802.217 1.292.707c.545.546 1.292 1.293 2.706 1.293 1.415 0 2.163-.747 2.71-1.293.491-.49.732-.707 1.295-.707s.804.217 1.295.707C19.837 13.253 20.585 14 22 14v-2c-.563 0-.804-.217-1.295-.707-.546-.546-1.294-1.293-2.709-1.293s-2.162.747-2.709 1.292c-.491.491-.731.708-1.296.708-.562 0-.802-.217-1.292-.707C12.154 10.747 11.407 10 9.993 10s-2.161.747-2.706 1.293c-.49.49-.73.707-1.291.707s-.801-.217-1.291-.707C4.16 10.747 3.413 10 2 10v2c.561 0 .801.217 1.291.707C3.836 13.253 4.583 14 5.996 14zm0 5c1.413 0 2.16-.747 2.705-1.293.49-.49.731-.707 1.292-.707s.802.217 1.292.707c.545.546 1.292 1.293 2.706 1.293 1.415 0 2.163-.747 2.71-1.293.491-.49.732-.707 1.295-.707s.804.217 1.295.707C19.837 18.253 20.585 19 22 19v-2c-.563 0-.804-.217-1.295-.707-.546-.546-1.294-1.293-2.709-1.293s-2.162.747-2.709 1.292c-.491.491-.731.708-1.296.708-.562 0-.802-.217-1.292-.707C12.154 15.747 11.407 15 9.993 15s-2.161.747-2.706 1.293c-.49.49-.73.707-1.291.707s-.801-.217-1.291-.707C4.16 15.747 3.413 15 2 15v2c.561 0 .801.217 1.291.707C3.836 18.253 4.583 19 5.996 19z"></path></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  Saluran Air
                </p>
                <p class="text-base font-medium text-gray-700">
                  <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result22)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result22 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result2 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                    {{ $result2 }} Penilaian
                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"><path d="M445.5 237.8L368 21.8C363.3 8.6 352.4 0 340.4 0H120.6c-11.4 0-21.8 7.7-27 19.9l-90.4 216c-10 23.9 4.6 52.1 27 52.1h89.2C94.7 323.1 80 366.5 80 401.6c0 32.7 12.8 64.2 36 88.7 13 13.8 31.8 21.7 51.5 21.7h113c19.7 0 38.5-7.9 51.5-21.7 23.2-24.5 36-56.1 36-88.7 0-35.1-14.7-78.5-39.4-113.6h89.2c21.7 0 36.3-26.4 27.7-50.2zM320 401.6c0 21.3-8.7 40.7-22.9 55.7-4.3 4.5-10.4 6.7-16.6 6.7h-113c-6.2 0-12.4-2.2-16.6-6.7-14.2-15-22.9-34.4-22.9-55.7 0-34.7 22.8-87.4 55.6-113.6h80.7c32.9 26.2 55.7 78.9 55.7 113.6zM53.5 240l80.4-192h192.6l68.9 192H53.5z"/></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  Penerangan Umum
                </p>
                <p class="text-base font-medium text-gray-700">
                  <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result33)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result33 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result3 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                    {{ $result3 }} Penilaian
                </p>
              </div>
            </div>
            <!-- Card -->
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 384 512"><path d="M384 352V32c0-17.7-14.3-32-32-32H32C14.3 0 0 14.3 0 32v320c0 17.7 14.3 32 32 32h6.9L3.2 467.4C-5.9 488.5 9.6 512 32.6 512h318.9c23 0 38.5-23.5 29.4-44.6L345.1 384h6.9c17.7 0 32-14.3 32-32zM56.8 464l54.9-128h160.6l54.9 128H56.8zm255.5-156.6c-5-11.8-16.6-19.4-29.4-19.4H101.1c-12.8 0-24.4 7.6-29.4 19.4L59.5 336H48V48h288v288h-11.5l-12.2-28.6z"/></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  Portal Jalan Warga
                </p>
                <p class="text-base font-medium text-gray-700">
                  <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result44)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result44 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result4 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                    {{ $result4 }} Penilaian
                </p>
              </div>
            </div>

           <!-- Card -->
           <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
              <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512"><path d="M432 80h-82.4l-34-56.7A48 48 0 0 0 274.4 0H173.6a48 48 0 0 0-41.2 23.3L98.4 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16l21.2 339a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM173.6 48h100.8l19.2 32H154.4zm173.3 416H101.11l-21-336h287.8z"/></svg>
            </div>
            <div>
              <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                Kebersihan
              </p>
              <p class="text-base font-medium text-gray-700">
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result55)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result55 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result5 }} out of 5</p>
                  </div>
                  @endif
              </p>
              <hr class="my-2" />
              <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
              <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                {{ $result5 }} Penilaian
              </p>
            </div>
          </div>

            <!-- Card -->
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 640 512"><path d="M622.3 271.1l-115.2-45c-4.1-1.6-12.6-3.7-22.2 0l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 9.6 3.7 18 1.6 22.2 0C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM496 462.4V273.3l95.5 37.3c-5.6 87.1-60.9 135.4-95.5 151.8zM356.2 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 47.1 0 70.9-13.5 85.4-15.5-2.9-15.2-4.6-31-5.1-47.5-25.6 3.2-39.5 15-80.4 15-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h351.3c-15.5-13.7-30.2-29.7-43.1-48zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z"/></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  Keamanan
                </p>
                <p class="text-base font-medium text-gray-700">
                  <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result66)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result66 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result6 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                    {{ $result6 }} Penilaian
                </p>
              </div>
            </div>

            <!-- Card -->
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512"><path d="M267.73 192h40.54c7.13 0 12.68-6.17 11.93-13.26l-4.6-43.58a8 8 0 0 0-7.96-7.16h-39.29c-4.09 0-7.53 3.09-7.96 7.16l-4.6 43.58c-.74 7.09 4.82 13.26 11.94 13.26zm-7.37 112h55.29c9.5 0 16.91-8.23 15.91-17.68l-5.07-48c-.86-8.14-7.72-14.32-15.91-14.32h-45.15c-8.19 0-15.05 6.18-15.91 14.32l-5.07 48c-1 9.45 6.41 17.68 15.91 17.68zm13.06-208h29.16c4.75 0 8.45-4.12 7.96-8.84l-1.69-16a8 8 0 0 0-7.96-7.16h-25.78c-4.09 0-7.53 3.09-7.96 7.16l-1.69 16c-.49 4.72 3.21 8.84 7.96 8.84zm48.98 240h-68.8c-8.19 0-15.05 6.18-15.91 14.32l-8.45 80c-1 9.45 6.41 17.68 15.91 17.68h85.69c9.5 0 16.91-8.23 15.91-17.68l-8.45-80c-.85-8.14-7.71-14.32-15.9-14.32zM173.35 64h-16a7.99 7.99 0 0 0-7.38 4.92L1.25 425.85C-3.14 436.38 4.6 448 16.02 448h44c7.11 0 13.37-4.69 15.36-11.52L181.03 74.24c1.49-5.12-2.35-10.24-7.68-10.24zm401.4 361.85L426.04 68.92a8 8 0 0 0-7.38-4.92h-16c-5.33 0-9.17 5.12-7.68 10.24l105.65 362.24A15.996 15.996 0 0 0 515.99 448h44c11.41 0 19.15-11.62 14.76-22.15z"/></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  Akses Jalan
                </p>
                <p class="text-base font-medium text-gray-700">
                  <h6 class="text-base font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result77)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result77 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result7 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                    {{ $result7 }} Penilaian
                </p>
              </div>
            </div>

            <!-- Card -->
            <div class="flex items-center p-4 bg-white dark:bg-slate-800 rounded-lg shadow-xs">
              <div class="p-3 mr-4 text-blue-500 bg-blue-100 dark:bg-gray-700 dark:text-white rounded-full">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 576 512"><path d="M101.98 308.12c-17.69 8.02-23.99 24.81-15.77 41.96 8.22 17.15 25.5 23.24 43.18 15.22 17.69-8.02 45.59-17.2 37.37-34.35-8.22-17.16-47.09-30.86-64.78-22.83zm235.83-106.97c-17.69 8.02-31.88 45.79-23.66 62.94 8.22 17.15 33.38 2.26 51.07-5.76 17.69-8.02 23.99-24.81 15.77-41.96-8.22-17.15-25.5-23.24-43.18-15.22zM116.19 450.03l324.26-147.08 10.31 21.51c5.69 11.88 20.21 17.01 32.42 11.48l14.74-6.69c12.21-5.54 17.49-19.66 11.8-31.53l-44.67-93.19-13.75-28.67c-14.02-29.25-41.45-48.16-71.83-53.3l-76.15-69.24c-24.24-22.04-59.82-27.54-89.89-13.9L54.57 111.46C24.5 125.1 5.96 155.15 7.73 187.38l5.58 101.25c-15.48 25.94-18.22 58.54-4.19 87.79l58.42 121.86c5.69 11.88 20.21 17.02 32.42 11.48l14.74-6.69c12.21-5.54 17.49-19.66 11.8-31.53l-10.31-21.51zm-41-295.56l158.85-72.05c12.09-5.49 26.21-3.3 35.96 5.56l47.98 43.62-122.81 55.71-135.2 61.32-3.52-63.79c-.71-12.96 6.64-24.88 18.74-30.37zm20.38 252.55c-8.13 3.69-17.82.25-21.61-7.65l-20.62-43.01c-11.37-23.72-.78-52.01 23.6-63.07l265.3-120.33c24.38-11.06 53.47-.76 64.83 22.95l20.62 43.01c3.79 7.91.26 17.34-7.87 21.02L95.57 407.02zM464 384c-61.75 0-112 46.65-112 104 0 13.25 10.75 24 24 24s24-10.75 24-24c0-30.87 28.72-56 64-56s64 25.12 64 56c0 13.25 10.75 24 24 24s24-10.75 24-24c0-57.34-50.25-104-112-104z"/></svg>
              </div>
              <div>
                <p class="mb-2 text-lg font-semibold text-gray-600 dark:text-green-400">
                  Kondisi Jalan
                </p>
                <p class="text-lg font-medium text-gray-700">
                  <h6 class="text-lg font-medium text-gray-800 dark:text-white">Rata-rata Rating</h6>
                  @if ($result88)
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result88 }} out of 5</p>
                  </div>
                  @else
                  <div class="flex items-center">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                    <p class="ml-2 text-sm font-medium text-gray-500 dark:text-slate-400">{{ $result8 }} out of 5</p>
                  </div>
                  @endif
                </p>
                <hr class="my-2" />
                <h6 class="text-base font-medium text-gray-800 dark:text-white">Total Penilaian</h6>
                <p class="text-base font-medium text-gray-700 dark:text-slate-400">
                  {{ $result8 }} Penilaian
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
        {{-- <div>
            <div class="mx-auto grid w-full">
                <h2 class="mb-6 text-2xl font-semibold text-gray-700">
                    Hasil Penilaian
                </h2>

                <div class="grid gap-6 mb-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4">
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                CCTV
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                19238
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                Saluran Air
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                120
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div class="p-3 mr-4 text-red-500  dark:bg-gray-700 dark:text-white rounded-full">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                Penerang
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                {{ $result3 }} Penilaian
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                        <div
                            class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full">
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                User vip
                            </p>
                            <p class="text-lg font-semibold text-gray-700">
                                828
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection

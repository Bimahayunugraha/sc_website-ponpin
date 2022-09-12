@extends('layouts.main')

@section('content')
    <main class="py-28 dark:bg-dark w-full h-full">
    <div class="container mx-auto">
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
                  <a href="{{ route('agenda.index') }}" class="text-gray-700 hover:text-gray-900 ml-1 md:ml-2 text-sm font-medium dark:text-gray-400 dark:hover:text-white">Semua Agenda</a>
                </div>
              </li>
              <li aria-current="page">
                <div class="flex items-center">
                  <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium dark:text-gray-500">{{ $agenda->title }}</span>
                </div>
              </li>
            </ol>
        </nav>
        <div class="mb-4 md:mb-0 w-full mx-auto relative pt-5">
            <div class="px-4 lg:px-0">
                <h2 class="text-4xl font-semibold text-gray-800 dark:text-white leading-tight">
                    {{ $agenda->title }}
                </h2>
            </div>
        </div>
        <hr class="mt-5"/>
        <div class="flex flex-col lg:flex-row lg:space-x-12">

            <div class="px-4 lg:px-0 mt-12 text-gray-700 dark:text-slate-400 text-lg leading-relaxed w-full lg:w-3/4">
                <p class="pb-6">{!! $agenda->description !!}</p>
            </div>
        </div>
    </div>
    </main>
@endsection

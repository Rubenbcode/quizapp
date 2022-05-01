<x-app-layout>
    <div class="h-32 bg-cover bg-center  bg-no-repeat" style="background-image:url({{$subject->icon}})">
       <div class="h-32 p-6 flex flex-col" style="background: rgba(0,0,0,0.6)">
        <nav class="text-white text-lg flex justify-center items-center font-light ">
            <svg class="mr-2 w-4 h-4 inline-flex"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                </path>
            </svg>
            <a class="underline" href="{{route('dashboard')}}">
                Inicio
            </a>

            <svg class="w-6 h-6 text-gray-400  inline-flex" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            
            <a class="underline" href="{{route('subjects',$category)}}">
                {{$category->name}}
            </a>

            <svg class="w-6 h-6 text-gray-400  inline-flex" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
            {{$subject->name}}</nav>
            <h2 class="text-white text-center text-3xl font-medium mt-4">Grados</h2>
       </div>
    </div>

    <div class="w-8/12 mt-6 shadow-md h-auto mx-auto p-4">
        <ul class="w-full p-4">
            @foreach($levels as $level)
                <li class="w-full flex flex-col mb-10">
                    <div class="w-full flex justify-between items-center" >
                        <div class="flex items-center">
                            <svg class="inline-flex mr-4" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><path d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" fill="currentColor"></path></svg>
                            <p class="text-lg text-light">Grado {{$level->level_order}}</p>
                        </div>
                        <p class="text-gray-500 "> Cuestionarios disponibles : {{count($level->quizzes)}}</p>
                    </div>
                    <ul class="w-full p-4">
                        @foreach($level->quizzes()->orderBy('created_at','ASC')->get() as $quiz)
                            <x-item-question :name="$quiz->name" :count="count($quiz->questions)">
                                    <a class="flex items-center justify-center py-2 w-full rounded-sm  shadow-md bg-red-600 hover:bg-red-800 " href="{{route('quiz',[$category,$subject,$level,$quiz])}}">
                                        <svg class="mr-4 text-white" width="20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><path d="M256 8C119 8 8 119 8 256s111 248 248 248s248-111 248-248S393 8 256 8zm115.7 272l-176 101c-15.8 8.8-35.7-2.5-35.7-21V152c0-18.4 19.8-29.8 35.7-21l176 107c16.4 9.2 16.4 32.9 0 42z" fill="currentColor"></path></svg>
                                        <p class="text-white text-md font-semibold">Realizar cuestionario</p></a>
                                    </a>
                            </x-item-question>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
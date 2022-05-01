<x-app-layout>
    
    <div class="h-32 bg-cover bg-center  bg-no-repeat" style="background-image:url({{$subject->icon}});transition: .8s;">
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
        <ul class="w-full p-4 ">
            @foreach($levels as $level)
            <li class="w-full flex flex-col ">
                <p class="text-lg text-gray-700 text-semibold flex  items-center">
                    <svg class="inline-flex" width="10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"><path d="M458.622 255.92l45.985-45.005c13.708-12.977 7.316-36.039-10.664-40.339l-62.65-15.99l17.661-62.015c4.991-17.838-11.829-34.663-29.661-29.671l-61.994 17.667l-15.984-62.671C337.085.197 313.765-6.276 300.99 7.228L256 53.57L211.011 7.229c-12.63-13.351-36.047-7.234-40.325 10.668l-15.984 62.671l-61.995-17.667C74.87 57.907 58.056 74.738 63.046 92.572l17.661 62.015l-62.65 15.99C.069 174.878-6.31 197.944 7.392 210.915l45.985 45.005l-45.985 45.004c-13.708 12.977-7.316 36.039 10.664 40.339l62.65 15.99l-17.661 62.015c-4.991 17.838 11.829 34.663 29.661 29.671l61.994-17.667l15.984 62.671c4.439 18.575 27.696 24.018 40.325 10.668L256 458.61l44.989 46.001c12.5 13.488 35.987 7.486 40.325-10.668l15.984-62.671l61.994 17.667c17.836 4.994 34.651-11.837 29.661-29.671l-17.661-62.015l62.65-15.99c17.987-4.302 24.366-27.367 10.664-40.339l-45.984-45.004z" fill="currentColor"></path></svg>
                    Grado {{$level->level_order}}</p>
                N* de cuestionarios : {{count($level->quizzes)}}
                <ul class="w-full p-4 ">
                    @foreach($level->quizzes()->orderBy('created_at','ASC')->get() as $quiz)
                        <x-item-question :name="$quiz->name" :count="count($quiz->questions)" >
                            <a class="w-full rounded-sm text-center shadow-md bg-red-600 text-white text-md font-light" href="{{route('quiz',[$category,$subject,$level,$quiz])}}">Realizar cuestionario</a>
                        </x-item-question>

                    @endforeach
                </ul>
            </li>
            
            @endforeach
        </ul>
    </div>
</x-app-layout>
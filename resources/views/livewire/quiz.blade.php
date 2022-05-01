<div>
    <div  class="container-fluid flex flex-col p-4 bg-white">

        <div class="h-20 flex flex-col justify-center items-center mb-4">
            <h2 class=" text-3xl uppercase mb-4">{{$quiz->name}}</h2>
            <p class="text-justify text-md text-gray-500 ">{{$quiz->description}}</p>
        </div>

        <div class="w-8/12 mx-auto h-auto rounded-full dark:bg-gray-700 mb-8">
            <div class="progress-bar h-auto text-sm" style="width:{{$percent}}%">{{$progress}}%</div>
        </div>
        @if(!$finish)
        <div class="w-10/12 h-auto shadow-lg bg-gray-20 mx-auto p-4 flex flex-col">
            <h3 class=" text-xl p-2 text-gray-800 font-bold text-center">Q : {{$actual_question->title}}</h3>
            <p class=" text-md text-justify p-4 my-4 text-gray-700 bg-gray-100 rounded-lg font-bold shadow-lg">{{$actual_question->description}}</h3>
            <div class="w-full p-2 flex flex-col mx-auto">
                @for($e = 1; $e<=4;$e++)
                    <x-answer  :count='$e' :answer='$actual_question["answer_$e"]' ></x-answer>
                @endfor
            </div>

            @if(isset($questions[$i+1]))
                <x-button class="w-full bg-teal-400" wire:click="saveAnswer()" color="">Siguente</x-jet-button>
            @else
                <x-button class="w-full bg-red-400" wire:click="finishQuiz()" color="">Terminar examen</x-jet-button>
            @endif
        </div>
        @else

test terminado
        @endif
    </div>
    <svg
    width="30"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 0 512 512">
    <path d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256S119.033 8 256 8s248 111.033 248 248zm-141.651-35.33c4.937-32.999-20.191-50.739-54.55-62.573l11.146-44.702l-27.213-6.781l-10.851 43.524c-7.154-1.783-14.502-3.464-21.803-5.13l10.929-43.81l-27.198-6.781l-11.153 44.686c-5.922-1.349-11.735-2.682-17.377-4.084l.031-.14l-37.53-9.37l-7.239 29.062s20.191 4.627 19.765 4.913c11.022 2.751 13.014 10.044 12.68 15.825l-12.696 50.925c.76.194 1.744.473 2.829.907c-.907-.225-1.876-.473-2.876-.713l-17.796 71.338c-1.349 3.348-4.767 8.37-12.471 6.464c.271.395-19.78-4.937-19.78-4.937l-13.51 31.147l35.414 8.827c6.588 1.651 13.045 3.379 19.4 5.006l-11.262 45.213l27.182 6.781l11.153-44.733a1038.209 1038.209 0 0 0 21.687 5.627l-11.115 44.523l27.213 6.781l11.262-45.128c46.404 8.781 81.299 5.239 95.986-36.727c11.836-33.79-.589-53.281-25.004-65.991c17.78-4.098 31.174-15.792 34.747-39.949zm-62.177 87.179c-8.41 33.79-65.308 15.523-83.755 10.943l14.944-59.899c18.446 4.603 77.6 13.717 68.811 48.956zm8.417-87.667c-7.673 30.736-55.031 15.12-70.393 11.292l13.548-54.327c15.363 3.828 64.836 10.973 56.845 43.035z"
    fill="#404040">
</path>
</svg>
    Porcentaje de correctos : {{$percent_correct}} de {{count($questions)}}

</div>

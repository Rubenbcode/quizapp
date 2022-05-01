<x-app-layout>
    Materias
    <div class="container h-auto mx-auto grid grid-cols-3 gap-4 bg-gray-400 p-4">
        @foreach($subjects as $subject)
            <a href="{{route('levels',[$category,$subject])}}"class="text-white text-4xl underline ">
                <x-card-image :icon="$subject->icon">
                    <h2 class="text-white text-3xl underline"> {{$subject->name}}</h2>
                </x-card-image>
            </a>
        @endforeach

    </div>
   
</x-app-layout>

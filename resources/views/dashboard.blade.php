<x-app-layout>
    Carreras
    <div class="container h-auto mx-auto grid grid-cols-3 gap-4 bg-gray-400 p-4">
        @foreach($categories as $category)

        <a href="{{route('subjects',$category)}}"class="text-white text-4xl underline ">
        
            <x-card-image :icon="$category->icon">
                <h2 class="text-white text-3xl underline"> {{$category->name}}</h2>
            </x-card-image>
              
        </a>   

        @endforeach

    </div>
   
</x-app-layout>

@props(['answer','count'])

<div class="w-full mb-6">
    <label class="w-full bg-gray-200 rounded-md p-2 hover:bg-gray-300 cursor-pointer hover:shadow-sm">
        <input type="radio" name="answer" value="{{$count}}" wire:model="my_answer" class="mr-4">
        <span class="text-gray-700 text-md">
            {{$answer}}
        </span>
    </label>
</div> 

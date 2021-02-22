<div class="shadow sm:rounded-md sm:overflow-hidden">
    <div class="col-span-3 sm:col-span-2">
        <div class="col-span-6 sm:col-span-4">
            <label for="{{$field}}" class="block text-sm font-medium text-gray-700">{{$label}}</label>
            <input type="text" name="{{$field}}" id="{{$field}}" placeholder="{{$placeholder ?? ' '}}" 
            @isset($value) value="{{old($field) ? old($field) : $value  }}"
            @else value="{{old($field)}}"    
            @endisset
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    </div>
</div> 
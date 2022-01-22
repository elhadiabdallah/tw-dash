<div>
   @if($active)
   <a href="{{ $uri }}" class="inline-flex py-3 px-4 rounded bg-gray-300 hover:bg-gray-200">{{ $slot }}</a>
   @else
   <a href="{{ $uri }}" class="inline-flex py-3 px-4 rounded hover:bg-gray-200">{{ $slot }}</a>
   @endif
</div>
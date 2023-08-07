<div class="p-16 flex items-center justify-center">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <button wire:click="increment" class="py-2 px-4 bg-green-400 hover:bg-green-500 rounded text-white">+</button>
      <span class="px-3">{{$count}}</span>
    <button wire:click="decrement" class="py-2 px-4 bg-green-400 hover:bg-green-500 rounded text-white">-</button>
</div>

<div>
    {{-- Stop trying to control. --}}
    <div class="flex flex-col items-center bg-green-200">
        <p class="text-3xl mt-3 text-gray-500">Simple Calculator</p>
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model="numberOne" placeholder="number one">
            <select class="w-24" wire:model="action">
              <option>+</option>
              <option>-</option>
              <option>*</option>
              <option>/</option>
              <option>%</option>
            </select>
            <input type="number" wire:model="numberTwo" placeholder="number two">
            <button wire:click="calculate" 
                class="py-2 px-4 bg-green-400 hover:bg-green-600 
                disabled:cursor-not-allowed disabled:bg-opacity-90 rounded
                text-white"
                {{ $disabled ? ' disabled' : ''}}>
            =
            </button>
        </div>
        <p class="text-3xl">{{$result}}</p>
    </div>
</div>

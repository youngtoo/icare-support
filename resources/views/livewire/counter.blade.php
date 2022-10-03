<div>
    {{-- Stop trying to control. --}}
    <span class="h1 d-block">{{ $count }} </span>
    <button wire:click="increment" class="btn btn-sm btn-outline-dark"> + </button> 
    <button wire:click="decrement" class="btn btn-sm btn-outline-dark">-</button>
    <button wire:click="startover" class="btn btn-sm btn-outline-dark"> Reset </button>
</div>

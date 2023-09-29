<div>
    <h1 style="margin: 20px;padding: 20px;font-size: 24px;">{{$active}}</h1>
    <button wire:click="$toggle('active')" style="border: #777; background: #000;color: white;padding: 10px;margin: 10px;">+</button>
    <button wire:click="decrement" style="border: #777; background: red;color: white;padding: 10px;margin: 10px;">-</button>
</div>
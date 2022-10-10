<div style="text-align: center">
  <button wire:click="increment">+</button>
  <h1>{{ $count }}</h1>
  <div class="mb-8"></div>

  こんにちは、{{ $name }}さん<br>
  <input type="text" wire:model="name"><br>
  {{-- 2秒後に通信 --}}
  {{-- <input type="text" wire:model.defer="name"><br> --}}
  {{-- フォーカス外れたら通信 --}}
  {{-- <input type="text" wire:model.debounce.2000ms="name"><br> --}}
  {{-- ボタン押したら通信 --}}
  {{-- <input type="text" wire:model.lazy="name"><br> --}}
  {{-- <input type="text" wire:model.defer="name"><br> --}}
  <button wire:mouseover="mouseOver">マウスを合わせてね</button>
</div>
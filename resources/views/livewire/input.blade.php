<div>
    <h2>Input Component</h1>
    <p>message : {{ $message }}</p>
    <p>
        <input type="text" wire:model="message">
    </p>

    <br>

    <p>debounce 2000ms message : {{ $message2 }}</p>
    <p>
        <input type="text" wire:model.debounse.2000ms="message2">
    </p>

    <br>

    <p>bladeのif構文を利用して出力制御</p>
    <p>
        <input type="text" wire:model="message4">
    </p>
    @if(!$message4)
    <p style="color:#c30000;">文字を入力してください。</p>
    @else
    <p>文字を入力しました。</p>
    @endif

</div>

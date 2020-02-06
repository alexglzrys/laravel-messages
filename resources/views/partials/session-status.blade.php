{{-- Si existe una session llamada info (Mensaje flash enviado en los controladores para Feedback), lo mostramos --}}
@if(session('info'))
    <div>
        {{ session('info') }}
    </div>
@endif

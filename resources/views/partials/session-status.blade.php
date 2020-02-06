
{{-- Si existe una session llamada info (Mensaje flash enviado en los controladores para Feedback), lo mostramos --}}
@if(session('info'))
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading">Información del sistema</h5>
                    Estimado usuario, nos complace informarle que: {{ session('info') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
            </div>
        </div>
    </div>
@endif

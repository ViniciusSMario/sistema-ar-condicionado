<div class="container py-5" id="galeria">
    <h1 class="text-center mb-5">Galeria de Fotos</h1>
    <div class="row g-4">
        <div class="col-md-4">
            <a href="{{ asset('assets/img/foto1.jpg') }}" data-lightbox="gallery" data-title="Descrição da Foto 1">
                <img src="{{ asset('assets/img/foto1.jpg') }}" class="img-fluid rounded shadow" alt="Foto 1">
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ asset('assets/img/foto2.jpg') }}" data-lightbox="gallery" data-title="Descrição da Foto 2">
                <img src="{{ asset('assets/img/foto2.jpg') }}" class="img-fluid rounded shadow" alt="Foto 2">
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ asset('assets/img/foto3.jpg') }}" data-lightbox="gallery" data-title="Descrição da Foto 3">
                <img src="{{ asset('assets/img/foto3.jpg') }}" class="img-fluid rounded shadow" alt="Foto 3">
            </a>
        </div>
    </div>
</div>

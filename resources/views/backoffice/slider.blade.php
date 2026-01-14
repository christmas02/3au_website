@extends('backoffice.layout')

@section('content')
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Ajouter une image au Diaporama</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('backoffice.status')

            <form id="create-slider-form" autocomplete="off" class="needs-validation" method="POST" action="{{ route('backoffice.enregistrerSlide') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Informations Textuelles</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="slider-title-input">Titre du Slide</label>
                                    <input type="text" class="form-control" name="title" placeholder="Entrez le titre principal" value="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="slider-subtitle-input">Sous-titre / Accroche</label>
                                    <input type="text" class="form-control" name="subtitle" placeholder="Entrez le texte secondaire" value="">
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image du Slide</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Format recommandé : 1920x800px (Haute résolution)</p>
                                <div class="mb-4">
                                    <div class="text-center">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute top-100 start-100 translate-middle">
                                                <label for="slider-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Choisir une image">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <input class="form-control d-none" id="slider-image-input" name="image" type="file" accept="image/png, image/gif, image/jpeg" required onchange="previewImage(event)">
                                            </div>
                                            <div class="avatar-lg" style="width: 100%; height: auto; min-height: 200px;">
                                                <div class="avatar-title bg-light rounded shadow-sm">
                                                    <img src="{{ asset('assets/images/placeholder-image.jpg') }}" id="slider-img-preview" class="img-fluid rounded" style="max-height: 300px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Enregistrer le Slide</button>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Action & Lien</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="slider-link-input" class="form-label">Lien du bouton (LNK)</label>
                                    <input type="url" name="lnk" class="form-control" placeholder="https://exemple.com/mon-article" value="">
                                    <small class="text-muted">C'est le lien vers lequel l'utilisateur sera redirigé s'il clique sur le slide.</small>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        
                        <div class="card border-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info text-info rounded-circle fs-2">
                                            <i class="ri-information-line"></i>
                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-0">Assurez-vous que l'image est optimisée pour le web afin de ne pas ralentir le chargement de la page d'accueil.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </form>

        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © 3AU.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Tous droits réservés.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Script pour l'aperçu de l'image -->
<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('slider-img-preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
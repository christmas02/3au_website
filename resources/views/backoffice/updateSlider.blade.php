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
                        <h4 class="mb-sm-0">Modifier le Slide #{{ $slide->id }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @include('backoffice.status')

            <!-- L'action pointe vers la route de mise à jour avec l'ID du slide -->
            <form id="update-slider-form" autocomplete="off" class="needs-validation" method="POST" action="{{ route('backoffice.updateSlide') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }} <!-- Crucial pour les mises à jour dans Laravel -->
               
                <input type="hidden" name="id" value="{{ $slide->id }}">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Informations Textuelles</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="slider-title-input">Titre du Slide</label>
                                    <input type="text" class="form-control" name="title" placeholder="Entrez le titre principal" value="{{ $slide->title }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="slider-subtitle-input">Sous-titre / Accroche</label>
                                    <input type="text" class="form-control" name="subtitle" placeholder="Entrez le texte secondaire" value="{{ $slide->subtitle }}">
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Image du Slide</h5>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Laissez vide pour conserver l'image actuelle. Format recommandé : 1920x800px.</p>
                                <div class="mb-4">
                                    <div class="text-center">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute top-100 start-100 translate-middle">
                                                <label for="slider-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Changer l'image">
                                                    <div class="avatar-xs">
                                                        <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>
                                                <!-- Pas de 'required' ici car on a déjà une image -->
                                                <input class="form-control d-none" id="slider-image-input" name="image" type="file" accept="image/png, image/gif, image/jpeg" onchange="previewImage(event)">
                                                <input name="old_image" type="hidden" value="{{ $slide->image }}">
                                            </div>
                                            <div class="avatar-lg" style="width: 100%; height: auto; min-height: 200px;">
                                                <div class="avatar-title bg-light rounded shadow-sm">
                                                    <!-- On affiche l'image existante si elle existe, sinon un placeholder -->
                                                    <img src="{{ $slide->image ? env('IMAGES_PATH').'/'.$slide->image : asset('assets/images/placeholder-image.jpg') }}"
                                                        id="slider-img-preview"
                                                        class="img-fluid rounded"
                                                        style="max-height: 300px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Mettre à jour le Slide</button>
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
                                    <input type="url" name="lnk" class="form-control" placeholder="https://exemple.com/mon-article" value="{{ $slide->lnk }}">
                                    <small class="text-muted">URL de destination au clic.</small>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="fs-14 mb-3">Informations système</h5>
                                <p class="text-muted mb-1">Créé le : <br><strong>{{ $slide->created_at->format('d/m/Y H:i') }}</strong></p>
                                <p class="text-muted mb-0">Dernière modif : <br><strong>{{ $slide->updated_at->format('d/m/Y H:i') }}</strong></p>
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
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © 3AU.
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

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('slider-img-preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection
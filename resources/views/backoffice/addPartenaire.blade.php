@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Ajouter un Partenaire</h4>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Informations sur le Partenaire</h5>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="/partenaires/store" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <!-- LOGO DU PARTENAIRE -->
                                    <div class="col-md-4 text-center border-end">
                                        <div class="p-3">
                                            <label class="form-label d-block fw-bold">Logo du Partenaire</label>
                                            <div class="bg-light rounded p-4 mb-3 d-flex align-items-center justify-content-center" style="height: 200px;">
                                                <img src="https://via.placeholder.com/200x100/eeeeee/cccccc?text=LOGO"
                                                    id="preview-logo" class="img-fluid" style="max-height: 100%; object-fit: contain;">
                                            </div>
                                            <input type="file" name="logo" class="form-control" onchange="previewImage(this, 'preview-logo')" required>
                                            <small class="text-muted d-block mt-2">Format PNG ou SVG transparent recommandé</small>
                                        </div>
                                    </div>

                                    <!-- DETAILS DU PARTENAIRE -->
                                    <div class="col-md-8">
                                        <div class="p-3">
                                            <div class="mb-4">
                                                <label class="form-label fw-bold">Nom du Partenaire</label>
                                                <input type="text" class="form-control form-control-lg" name="nom_partenaire" placeholder="Ex: Microsoft, Orange, etc." required>
                                            </div>

                                            <div class="mb-4">
                                                <label class="form-label fw-bold">Lien vers le site Web</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1"><i class="ri-global-line"></i></span>
                                                    <input type="url" name="lien_web" class="form-control" placeholder="https://www.partenaire.com">
                                                </div>
                                                <small class="text-muted">Lien optionnel vers le site officiel du partenaire</small>
                                            </div>

                                            <div class="alert alert-info border-0 mb-0">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0">
                                                        <i class="ri-information-line fs-18"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        Le logo sera affiché dans la section "Nos Partenaires" de la page d'accueil. Veillez à utiliser des images de haute qualité.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer bg-light text-end mt-4">
                                    <button type="submit" class="btn btn-primary px-5">
                                        <i class="ri-save-line align-bottom me-1"></i> Enregistrer le Partenaire
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#' + previewId).attr('src', e.target.result).hide().fadeIn(650);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
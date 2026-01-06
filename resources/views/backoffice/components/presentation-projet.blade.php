@php
$pays = App\Models\Pays::all();
$contenue_accueil = App\Models\Accueil::first();
@endphp
<div class="card-header">
        <h2 class="heading">PRÉSENTATION DU PROJET</h2>
 </div>
 <div class="card-body">
        <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST" action="/savePrensentation" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <label>Contenue</label>
                                <textarea name="presentation_projet" id="summernote"> {{ $contenue_accueil->presentation_projet }} </textarea>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="mb-3">
                            <label class="form-label" for="product-title-input">Titre</label>
                            <input type="text" class="form-control" name="titre_presentation_projet" value="{{ $contenue_accueil->titre_presentation_projet }}" required>
                            <div class="invalid-feedback">Please Enter a product title.</div>
                        </div>
                        <div class="card-header">
                            <h5 class="card-title mb-0">Image d'illustration</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <div class="text-center">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="product-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" value="" id="product-image-input" name="image" type="file" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded">
                                                <input type="text" hidden="hidden" name="id" value="{{ $contenue_accueil->id }}" >
                                                <input hidden="hidden" value="{{ $contenue_accueil->image_presentation_projet }}" name="old_image" >
                                                <img src="{{asset('uploads/'.$contenue_accueil->image_presentation_projet )}}"  id="product-img" class="avatar-md h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="text-end mb-3">
                        <button type="submit" class="btn btn-success w-sm">Enregistrer</button>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </form>
 </div>


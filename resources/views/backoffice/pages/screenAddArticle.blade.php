@extends('admin.layout')
@section('content')
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Ajouter un article</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('admin.status')

            <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST" action="/saveArticle" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Titre</label>
                                    <input type="text" class="form-control" name="titre" value="{{ old('titre') }}" required>
                                    <div class="invalid-feedback">Please Enter a product title.</div>
                                </div>
                                <div class="mb-3">
                                    <label>Résumé de l'article</label>
                                    <textarea name="resume" value="{{ old('resume') }}" class="form-control"> </textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Contenue de l'article</label>
                                    <textarea name="contenue" value="{{ old('contenue') }}" id="summernote"> </textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="card">
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
                                                    <img src="#" id="product-img" class="avatar-md h-auto" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="dropzone d-none">

                                    </div>

                                    <ul class="list-unstyled mb-0" id="dropzone-preview">
                                        <li class="mt-2" id="dropzone-preview-list">
                                            <!-- This is used as the file preview template -->
                                            <div class="border rounded">
                                                <div class="d-flex p-2">
                                                    <div class="flex-shrink-0 me-3">

                                                    </div>
                                                    <div class="flex-grow-1">

                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end dropzon-preview -->
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-success w-sm">Enregistrer</button>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Emplacement</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="choices-publish-status-input" class="form-label">Catégorie</label>
                                    <select name="categorie" class="form-select">
                                        <option value="">--Choisir le menu--</option>
                                        @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}"> {{ $categorie->name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-visibility-input" class="form-label">Administrateur</label>
                                    <select name="auteur" class="form-select" readonly="">
                                        <option value="{{ auth()->user()->id }}"> {{ auth()->user()->name }} </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-status-input" class="form-label">Menu d'apparence</label>
                                    <select name="ethiquette" class="form-select">
                                        <option value="1"> Actualité et médias </option>
                                        <option value="2"> Nos publication </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-visibility-input" class="form-label">Priotité</label>
                                    <select name="priorite" class="form-select">
                                        <option value="O"> Prioritée 0</option>
                                        <option value="1"> Prioritée 1</option>
                                        <option value="2"> Prioritée 2  </option>
                                    </select>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <!-- end card -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </form>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Multipalms
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->
@endsection


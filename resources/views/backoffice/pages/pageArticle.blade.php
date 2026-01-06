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
                        <h4 class="mb-sm-0"> {{ $article->titre  }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('admin.status')
            <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST" action="/updateArticle" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Titre</label>
                                    <input type="text" class="form-control" name="titre"  value="{{ $article->titre }}" required>
                                    <input type="hidden" name="id" value="{{ $article->id  }}" required>
                                    <div class="invalid-feedback">Please Enter a product title.</div>
                                </div>
                                <div class="mb-3">
                                    <label>Résumé de l'article</label>
                                    <textarea name="resumer" class="form-control"> {!! $article->resumer !!}  </textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Contenue</label>
                                    <textarea name="contenue" id="summernote"> {!! $article->contenue !!} </textarea>
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
                                                    <img src="{{asset('uploads/'.$article['image'])}}"  id="product-img" class="avatar-md h-auto" />
                                                    <input hidden="hidden" value="{{ $article['image']}}" name="old_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <!-- end dropzon-preview -->
                                </div>
                            </div>
                        </div>
                        <!-- end card -->

                        <div class="text-end mb-3">
                            <button type="submit" class="btn btn-warning w-sm">Modifier</button>
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
                                        <option value="{{ $categorie->id }}" {{ $categorie->id == $article->categorie ? 'selected' : '' }}>
                                            {{ $categorie->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-visibility-input" class="form-label">Priotité</label>
                                    <select name="priorite" class="form-select">
                                        <option value="{{ $article->priorite }}" {{ $article->priorite == $article->priorite ? 'selected' : '' }}>Prioritée {{ $article->priorite }}</option>
                                        <option value="O"> Prioritée 0</option>
                                        <option value="1"> Prioritée 1</option>
                                        <option value="2"> Prioritée 2  </option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-visibility-input" class="form-label">Activé / Désactiver</label>
                                    <select name="archives" class="form-select">
                                        <option value="O">  Activé </option>
                                        <option value="1"> Désactivé 1</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-status-input" class="form-label">Menu d'apparence</label>
                                    <select name="ethiquette" class="form-select">
                                        @if($article->ethiquette == 1 ) <option value="1"> Actualité et médias </option> @else <option value="2"> Nos publication </option> @endif
                                        <option value="1"> Actualité et médias </option>
                                        <option value="2"> Nos publication </option>
                                    </select>
                                </div>

                                <div>
                                    <label for="choices-publish-visibility-input" class="form-label">Administrateur</label>
                                    <select name="auteur" class="form-select" readonly="">
                                        <option value="{{ $user->id }}"> {{ $user->name }} </option>
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
            <div class="card">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center">
                        <h5 class="card-title flex-grow-1 mb-0">Commentaire sur l'article</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="profile-timeline">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach($commentaires as $commentaure)
                            <div class="accordion-item border-0">
                                <div class="accordion-header" id="headingOne">
                                    <a class="accordion-button p-2 shadow-none" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-xs">
                                                <div class="avatar-title bg-success rounded-circle">
                                                    <i class="ri-shopping-bag-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-15 mb-0 fw-semibold">Description de l'historique - <span class="fw-normal">  </span></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body ms-2 ps-5 pt-0">
                                        <h6 class="mb-1">BONJOUR m Bellle article  </h6>
                                        <p class="text-muted"> 12 - 02 -2023 </p>

                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <!--end accordion-->
                    </div>
                </div>
            </div>

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


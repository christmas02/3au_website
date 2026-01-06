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
                        <h4 class="mb-sm-0"> {{ $contenu->titre  }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('admin.status')

            <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST" action="/updateContenue" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Titre</label>
                                    <input type="hidden" name="id" value="{{ $contenu->id }}">
                                    <input type="text" class="form-control" name="titre" value="{{ $contenu->titre  }}" required>
                                    <div class="invalid-feedback">Please Enter a product title.</div>
                                </div>
                                <div>
                                    <label>Contenue</label>
                                    <textarea name="contenue" id="summernote"> {!! $contenu->contenue !!} </textarea>
                                    
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
                                                    <img src="{{asset('uploads/'.$contenu['image'])}}"  id="product-img" class="avatar-md h-auto" />
                                                    <input type="hidden" value="{{ $contenu['image'] }}" name="name_image">
                                                    <input type="hidden" value="{{ $contenu['gallerie'] }}" name="old_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                        <div class="item form-group">
                            <label for="middle-name" class="col-form-label col-md-12 col-sm-12 label-align">"Choisissez 4 images de plus."</label>
                            <div class="col-md-12 col-sm-12 ">
                                <input id="imageInput2" type="file" name="images[]" maxlength="4" accept="image/*" class="form-control" multiple>
                                <p class="text-danger">NB : Vous pouvez choisir jusqu'à 4 photos de détail dans ce champ.</p>
                            </div>
                        </div>


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
                                    <label for="choices-publish-status-input" class="form-label">Menus appartenance</label>
                                    <select name="type_menu" class="form-select" readonly="">
                                        @foreach($menus as $menu)
                                        <option value="{{ $menu->slug }}" {{ $menu->slug == $contenu->type_menu ? 'selected' : '' }}>
                                            {{ $menu->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="choices-publish-visibility-input" class="form-label">Position sur la page</label>
                                    <select name="position_page" class="form-select" readonly="">
                                        @foreach($positions as $position)
                                        <option value="{{ $position->position }}" {{ $position->position == $contenu->position_page ? 'selected' : '' }}>
                                            {{ $position->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

            </form>

                                <div class="mb-3">
                                    @if(!empty($galerie))
                                    @foreach($galerie as $image)
                                    <div class="swiper-slide">
                                        <div class="nav-slide-item">
                                            <a class="container-image">
                                                <img src="{{asset('uploads/'.$image )}}" alt="name of picture" style="height: 190px" class="img-fluid d-block" />
                                                <br>
                                                <div class="overlay">
                                                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModalDeletImage{{ $loop->index }}" class="btn btn-sm btn-danger btn-rounded">
                                                        <i class="ri-delete-bin-2-line"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
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
<!-- SUPPRESSION D'UNE IMAGES -->
@if(!empty($galerie))
@foreach($galerie as $image)
<div class="modal fade" id="exampleModalDeletImage{{ $loop->index }}" tabindex="-1"  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <form method="POST" action="{{ route('deletImage') }}" enctype="">
                    @csrf
                    <div class="trash"><i class="fa fa-trash"></i></div>
                    <center>
                        <h3>Voulez-vous vraiment supprimer !</h3>
                    </center>
                    <input type="hidden" name="contenu_id" value="{{ $contenu->id }}">
                    <input type="text" hidden name="old_img" value="{{ $image }}">
                    <input type="text" hidden name="galerie" value="{{ @json_encode( $galerie ) }} ">
                    <br>
                    <div class="modal-footer-btn d-flex justify-content-center">
                        <button type="submit" class="btn btn-danger">Valider</button>
                    </div>
            </div>

            </form>
        </div>
    </div>
</div>
@endforeach
@endif
@push('scripts')
@endpush
@endsection

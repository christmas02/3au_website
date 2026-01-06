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
                        <h4 class="mb-sm-0"> {{ $campagne->name  }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('admin.status')
            <form id="createproduct-form" autocomplete="off" class="needs-validation" method="POST" action="/updateCampagne" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Titre campagne</label>
                                    <input type="text" class="form-control" name="titre" value="{{ $campagne->name  }}" required>
                                    <input type="hidden" name="id" value="{{ $campagne->id  }}" required>
                                    <input type="hidden" class="form-control" name="old_liens[]" value="{{$campagne['liens']}}">

                                    <div class="invalid-feedback">Please Enter a product title.</div>
                                </div>

                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea name="resume" id="summernote"> {!! $campagne->resume !!} </textarea>
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
                                                    <img src="{{asset('uploads/'.$campagne['image'])}}" id="product-img" class="avatar-md h-auto" />
                                                    <input hidden="hidden" value="{{ $campagne['image']}}" name="old_image">
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

                                <div id="video-links-container">
                                    @foreach($liens as $lien)
                                    <div class="mb-3">
                                        <label for="choices-publish-status-input" class="form-label">Lien des vidéos</label>
                                        <input type="url" class="form-control" name="liens[]" value="{{ $lien }}">
                                        <button type="button" class="remove-video-link btn btn-danger"><i class='bx bx-trash'></i></button>
                                    </div>
                                    @endforeach
                                </div>

                                <button type="button" id="add-video-link" class="btn btn-primary">Ajouter un lien vidéo</button>
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

            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Velzon.
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
@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js" integrity="sha512-MlEyuwT6VkRXExjj8CdBKNgd+e2H+aYZOCUaCrt9KRk6MlZDOs91V1yK22rwm8aCIsb5Ec1euL8f0g58RKT/Pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Summernote -->
<script src="{{asset('/admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Ajouter un nouveau champ de lien vidéo
        $('#add-video-link').on('click', function() {
            $('#video-links-container').append(`
                <div class="mb-3">
                    <label for="choices-publish-status-input" class="form-label">Lien des vidéos</label>
                    <input type="url" class="form-control" name="liens[]" required>
                    <button type="button" class="remove-video-link btn btn-danger"><i class='bx bx-trash'></i></button>
                </div>
            `);
        });

        // Événement de suppression pour les boutons "Supprimer"
        $('#video-links-container').on('click', '.remove-video-link', function() {
            const container = $('#video-links-container');

            // Vérifier s'il y a plus d'un champ avant de supprimer
            if (container.children().length > 1) {
                $(this).parent().remove();
            } else {
                alert("Vous devez garder au moins un champ de lien vidéo.");
            }
        });
    });
</script>
@endsection
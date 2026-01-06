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
                        <h4 class="mb-sm-0">Liste des catégories</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <a type="button" data-bs-toggle="modal" data-bs-target="#categorie" class="btn btn-success">Ajouter une catégorie</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Titre</th>
                                            <th>Slug</th>
                                            <th width="80">Création le</th>
                                            <th width="130">Dernier mise a jour</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $categorie)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $categorie['name'] }}</td>
                                            <td>{{$categorie['slug']}}</td>
                                            <td>{{ \Carbon\Carbon::parse($categorie['created_at'])->format('M d, Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($categorie['updated_at'])->format('M d, Y') }}</td>

                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a type="button" data-bs-toggle="modal" data-bs-target="#categorie{{ $loop->index }}" class="btn btn-sm btn-success edit-item-btn">Voire</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->


        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- Ajouter une nouvelle catégorie -->
    <div class="modal fade" id="categorie" tabindex="-1" aria-labelledby="categorieTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h3 class="text-primary">Ajouter une nouvelle catégorie</h3>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="/saveCategorie" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="categorie" class="form-label">Catégorie <span class="text-danger">*</span></label>
                                            <input type="text" name="categorie" class="form-control" placeholder="Catégorie" required>

                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Enregistrer</button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ajouter une nouvelle catégorie -->
    @foreach($categories as $categorie)
    <div class="modal fade" id="categorie{{ $loop->index }}" tabindex="-1" aria-labelledby="categorieTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h3 class="text-primary">Modifier la catégorie</h3>
                                </div>
                                <div class="p-2 mt-4">
                                    <form method="POST" action="/saveCategorie" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="categorie" class="form-label">Catégorie <span class="text-danger">*</span></label>
                                            <input type="hidden" name="id" value="{{ $categorie->id }}">
                                            <input type="text" name="categorie" class="form-control" value="{{ $categorie->name }}">
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Enregistrer</button>
                                        </div>


                                    </form>

                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
<!-- end main content-->


@endsection
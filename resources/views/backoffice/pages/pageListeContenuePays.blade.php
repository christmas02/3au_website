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
                        <h4 class="mb-sm-0">Contenue de la page {{ $slug }}</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0"> </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <td></td>
                                        <th>Titre</th>
                                        <th>Contenue</th>
                                        <th width="100">Création le</th>
                                        <th width="150">Dernier mise a jour</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td><img src="{{ env('IMAGES_PATH') }}/{{ $contenu['image'] }}"   style="width:42px; height:42px;"></td>
                                        <td>{{ $contenu['titre'] }}</td>
                                        <td>{!! Str::limit($contenu['contenue'], 300) !!}</td>
                                        <td>{{ \Carbon\Carbon::parse($contenu['created_at'])->format('M d, Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($contenu['updated_at'])->format('M d, Y') }}</td>

                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <a href="/contenue_pays/{{ $contenu['id'] }}" class="btn btn-sm btn-success edit-item-btn">Voire</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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


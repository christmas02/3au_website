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
                        <h4 class="mb-sm-0">Liste des articles</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('admin.status')
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <a href="/ajout/article" class="btn btn-success">Ajouter un article</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <td></td>
                                        <th width="150">Titre</th>
                                        <th width="300">Résumé du contenue</th>
                                        <th width="80">Création le</th>
                                        <th width="130">Dernier mise a jour</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articles as $contenu)
                                    <tr>
                                        <td><img src="{{ env('IMAGES_PATH') }}/{{ $contenu['image'] }}"   style="width:42px; height:42px;"></td>
                                        <td>{{ $contenu['titre'] }}</td>
                                        <td>{!! Str::limit($contenu['resumer']) !!}</td>
                                        <td>{{ \Carbon\Carbon::parse($contenu['created_at'])->format('M d, Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($contenu['updated_at'])->format('M d, Y') }}</td>

                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    @if($contenu['archives'] == 0)
                                                    <a href="#" class="btn btn-sm btn-info edit-item-btn">Article publié</a>
                                                    @else
                                                    <a href="#" class="btn btn-sm btn-danger edit-item-btn">Article nom publié</a>
                                                    @endif

                                                    @if($contenu['ethiquette'] == 0)
                                                    <a href="#" class="btn btn-sm btn-danger edit-item-btn">Nos attribué</a>
                                                    @elseif($contenu['ethiquette'] == 1)
                                                    <a href="#" class="btn btn-sm btn-success edit-item-btn">Actualité & médias</a>
                                                    @elseif($contenu['ethiquette'] == 2)
                                                    <a href="#" class="btn btn-sm btn-warning edit-item-btn">Publications</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <a href="/detail_article/{{ $contenu['id'] }}" class="btn btn-sm btn-success edit-item-btn">Voire</a>
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


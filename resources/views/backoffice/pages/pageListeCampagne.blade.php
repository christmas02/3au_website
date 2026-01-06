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
                        <h4 class="mb-sm-0">Liste des campagnes</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <a href="/ajout/campagne" class="btn btn-success">Ajouter une campagne</a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <td>Image</td>
                                            <td>Titre</td>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th width="80">statut</th>
                                            <th width="130">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($campagnes as $campagne)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td><img class="rounded" src="{{ env('IMAGES_PATH') }}/{{ $campagne['image'] }}" style="width:80px; height:80px;" alt="Campagne"></td>
                                            <td>{{$campagne['name']}}</td>
                                            <td>{!! Str::limit($campagne['resume']) !!}</td>
                                            <td>{{ \Carbon\Carbon::parse($campagne['created_at'])->format('M d, Y') }}</td>
                                            <td>
                                                @if($campagne['archives'] == 0)
                                                <span class="btn btn-sm btn-danger">Désactivée</span>
                                                @else
                                                <span class="btn btn-sm btn-success">Activéé</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a href="/detail_campagne/{{ $campagne['id'] }}" class="btn btn-sm btn-success edit-item-btn">Voire</a>
                                                    </div>
                                                     <div class="delete">
                                                        <a class="btn btn-sm btn-danger delete-item-btn" data-bs-toggle="modal" data-bs-target="#modalDelete{{$campagne['id']}}"><i class='bx bx-trash'></i></a>
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


            <!-- Modal Supprimer Appel d'offres -->
            @foreach($campagnes as $campagne)
            <div class="modal fade" id="modalDelete{{$campagne['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="/archive_campagne" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h5 class="modal-title">Archiver la campagne</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="container">
                                    <div class="shadow p-4">

                                        <div class="form-group">
                                            <label for="auteur">Souhaitez-vous archiver la campagne: {{$campagne['name']}}? <sup class="text-danger">*</sup> </label>
                                            <input type="hidden" name="id" value="{{$campagne['id']}}">
                                            <input type="hidden" name="archive" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-success">Archiver</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            @endforeach
            <!-- /.Modal Supprimer Appel d'offres -->
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
<!-- end main content-->

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.0/jquery-ui.min.js" integrity="sha512-MlEyuwT6VkRXExjj8CdBKNgd+e2H+aYZOCUaCrt9KRk6MlZDOs91V1yK22rwm8aCIsb5Ec1euL8f0g58RKT/Pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Summernote -->
<script src="{{asset('/admin/assets/libs/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function() {

        // contact
        @foreach($campagnes as $campagne)
        $('#note{{$campagne["id"]}}').summernote({
            // Options de configuration si nécessaire
        });
        @endforeach

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
@endpush
@endsection

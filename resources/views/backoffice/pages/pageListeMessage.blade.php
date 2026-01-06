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
                        <h4 class="mb-sm-0">Liste des messages</h4>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <td>Nom</td>
                                            <th>Email</th>
                                            <th>Tél</th>
                                            <th>Sujet</th>
                                            <th>Date</th>
                                            <th width="80">statut</th>
                                            <th width="130">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$message['name']}}</td>
                                            <td>{{$message['email']}}</td>
                                            <td>{{$message['phone']}}</td>
                                            <td>{{$message['subjet']}}</td>
                                            <td>{{$message['date']}}</td>
                                            <td>
                                                @if($message['statu'] == 0)
                                                <span class="btn btn-sm btn-danger">En attente de réponse</span>
                                                @else
                                                <span class="btn btn-sm btn-success">Répondu</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAffiche{{$message['id']}}">
                                                        <i data-feather="eye"></i>
                                                    </a>

                                                    @if (!$message['statu'])
                                                    <a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalReponse{{$message['id']}}">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                    @endif

                                                    <!-- <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete{{$message['id']}}">
                                                        <i data-feather="x-square"></i>
                                                    </a> -->
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

            <!-- ------------------------------------------------------------------------------------------- Modal lecture -->
            @foreach($messages as $message)
            <div class="modal-dialog-centered pt-5">
                <div class="modal fade pt-5" id="modalAffiche{{$message['id']}}" tabindex="-1" aria-labelledby="modalReponseLabel" aria-modal="true" style="margin-top: 0px !important">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title">Mail de {{$message['name']}}</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="shadow p-3">
                                        <div class="mailbox-read-info">
                                            <h5>Sujet : {{$message['subjet']}}</h5>
                                            <h6>De : {{$message['email']}}
                                                <span class="mailbox-read-time float-right">{{$message['date']}}</span>
                                            </h6>
                                        </div>

                                        <p class="text-justify mt-3">
                                            {!! $message['contenue'] !!}
                                        </p>

                                        <p class="text-left mt-4 secondary">
                                            <sub>
                                                <i>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i> Publié le : {{$message['date']}}
                                                </i>
                                            </sub>
                                        </p>
                                    </div><br>

                                    @if ($message['statu'] == 1)
                                    <div class="shadow p-3">
                                        <h3 class="modal-title">Reponse</h3>
                                        <div class="mailbox-read-info">
                                            <h5>Sujet : {{$message['subjetExpediteur']}}</h5>
                                            <h6>De : {{$message['emailExpediteur']}}
                                                <span class="mailbox-read-time float-right">{{$message['nameExpediteur']}}</span>
                                            </h6>
                                        </div>

                                        <p class="text-justify mt-3">
                                            {!! $message['contenueExpediteur'] !!}
                                        </p>

                                        <p class="text-left mt-4 secondary">
                                            <sub>
                                                <i>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i> Repondu le : {{$message['dateExpediteur']}}
                                                </i>
                                            </sub>
                                        </p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Fermez la boucle foreach ici -->
            @endforeach

            <!-- ------------------------------------------------------------------------------------------- Modal Réponse -->
            @foreach($messages as $message)
            <div class="modal fade" id="modalReponse{{$message['id']}}" tabindex="-1" aria-labelledby="modalReponseLabel" aria-modal="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="/sendMessage" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-header">
                                <h3 class="modal-title"> Réponse à {{$message['name']}}</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">

                                <div>
                                    <div class="mb-3">
                                        <label for="name">Nom expéditeur</label>
                                        <input type="hidden" name="id" value="{{$message['id']}}">
                                        <input type="hidden" name="statu" value="1">
                                        <input type="text" id="name" class="form-control" name="name" value="{{ auth()->user()->name }}" required>
                                    </div>

                                    <div class="mb-3 position-relative">
                                        <label for="email">E-mail expéditeur</label>
                                        <input type="email" id="email" class="form-control email-compose-input" name="email" value="{{ auth()->user()->email }}" required placeholder="To">
                                        <div class="position-absolute top-0 end-0">
                                            <div class="d-flex">
                                                <button class="btn btn-link text-reset fw-semibold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#CcRecipientsCollapse">
                                                    Cc
                                                </button>
                                                <button class="btn btn-link text-reset fw-semibold px-2" type="button" data-bs-toggle="collapse" data-bs-target="#BccRecipientsCollapse">
                                                    Bcc
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="collapse" id="CcRecipientsCollapse">
                                        <div class="mb-3">
                                            <label for="cc">Cc:</label>
                                            <input type="email" id="cc" class="form-control" name="cc" placeholder="Cc recipients">
                                        </div>
                                    </div>

                                    <div class="collapse" id="BccRecipientsCollapse">
                                        <div class="mb-3">
                                            <label for="bcc">Bcc:</label>
                                            <input type="email" id="bcc" class="form-control" name="bcc" placeholder="Bcc recipients">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="subject">Objet</label>
                                        <input type="text" id="subject" name="subjet" class="form-control" placeholder="Sujet" required>
                                    </div>

                                    <div class="ck-editor-reverse">
                                        <label for="content">Contenu</label>
                                        <textarea name="contenue" id="note{{$message['id']}}" class="form-control">Veuillez entrer votre texte ici</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Répondre au message</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
            @endforeach


            <!-- Modal Supprimer Appel d'offres -->
            @foreach($messages as $message)
            <div class="modal fade" id="modalDelete{{$message['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form action="/archive_message" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('DELETE')
                            <div class="modal-header">
                                <h5 class="modal-title">SUPPRIMER MAIL</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="container">
                                    <div class="shadow p-4">

                                        <div class="form-group">
                                            <label for="auteur">Souhaitez-vous supprimer le mail de {{$message['name']}}? <sup class="text-danger">*</sup> </label>
                                            <input type="hidden" name="id" value="{{$message['id']}}">
                                            <input type="text" class="form-control text-danger" name="subjet" value="Sujet: {{$message['subjet']}}" readonly>
                                            <input type="hidden" name="contenue" value="{{$message['contenue']}}">
                                            <input type="hidden" name="email" value="{{$message['email']}}">
                                            <input type="hidden" name="name" value="{{$message['name']}}">
                                            <input type="hidden" name="statu" value="{{$message['statu']}}">
                                            <input type="hidden" name="archive" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-success">Supprimer</button>
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
        @foreach($messages as $message)
        $('#note{{$message["id"]}}').summernote({
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
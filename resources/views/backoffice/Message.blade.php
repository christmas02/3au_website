@extends('backoffice.layout')

@section('content')
<div class="vertical-overlay"></div>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- TITRE DE LA PAGE -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Gestion de la Messagerie</h4>
                        <div class="page-title-right">
                            <!-- <span class="badge bg-soft-info text-info">3 messages non lus</span> -->
                        </div>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="buttons-datatables" class="table table-hover align-middle table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">Expéditeur</th>
                                            <th scope="col">Sujet & Message</th>
                                            <th scope="col">Contact</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Statut</th>
                                            <th scope="col" style="width: 120px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- MESSAGE 1 : EN ATTENTE -->
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs flex-shrink-0 me-2">
                                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">JK</span>
                                                    </div>
                                                    <div class="flex-grow-1">Jean Koffi</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-truncate" style="max-width: 250px;">
                                                    <span class="fw-bold">Demande de devis</span> - Bonjour, je souhaiterais obtenir un devis pour...
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">jean.koffi@email.com</div>
                                                <div class="text-muted small">+225 07 00 00 00</div>
                                            </td>
                                            <td>15 Mai 2024</td>
                                            <td><span class="badge badge-soft-danger fs-11">En attente</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAffiche1">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="btn btn-soft-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalReponse1">
                                                        <i class="ri-reply-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- MESSAGE 2 : RÉPONDU -->
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-xs flex-shrink-0 me-2">
                                                        <span class="avatar-title rounded-circle bg-soft-success text-success">AM</span>
                                                    </div>
                                                    <div class="flex-grow-1">Alice Martin</div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-truncate" style="max-width: 250px;">
                                                    <span class="fw-bold">Partenariat</span> - Nous sommes une agence basée à Paris et...
                                                </div>
                                            </td>
                                            <td>
                                                <div class="small">a.martin@agence.fr</div>
                                                <div class="text-muted small">+33 1 45 00 00</div>
                                            </td>
                                            <td>12 Mai 2024</td>
                                            <td><span class="badge badge-soft-success fs-11">Répondu</span></td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <button class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalAffiche2">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL LECTURE (Exemple Jean Koffi) -->
            <div class="modal fade" id="modalAffiche1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title">Lecture du Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded-circle bg-soft-primary text-primary">JK</span>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h5 class="fs-14 mb-1">Jean Koffi <small class="text-muted ms-1"><jean.koffi@email.com></small></h5>
                                    <p class="text-muted mb-0">Sujet: <span class="text-dark fw-bold">Demande de devis audit</span></p>
                                </div>
                                <div class="flex-shrink-0 text-end">
                                    <div class="text-muted small">15 Mai 2024, 10:30</div>
                                </div>
                            </div>

                            <div class="p-3 bg-light rounded border">
                                <p class="mb-0">
                                    Bonjour l'équipe 3AU,<br><br>
                                    Je me permets de vous contacter car je souhaiterais obtenir un devis concernant l'audit financier de ma structure pour l'exercice 2024. 
                                    Quels sont les documents à fournir pour une première estimation ?<br><br>
                                    Bien cordialement,<br>
                                    Jean Koffi.
                                </p>
                            </div>

                            <!-- Bloc si réponse existe -->
                            <div class="mt-4 border-top pt-3 d-none">
                                <h6 class="text-success mb-3"><i class="ri-reply-all-line me-1"></i> Votre Réponse :</h6>
                                <div class="p-3 bg-soft-success rounded">
                                    <p class="mb-0 small">Bonjour Jean, nous avons bien reçu votre demande...</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer bg-light">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReponse1">Répondre</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL RÉPONSE (Exemple Jean Koffi) -->
            <div class="modal fade" id="modalReponse1" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content border-0 shadow-lg">
                        <div class="modal-header bg-primary p-3">
                            <h5 class="modal-title text-white">Répondre à Jean Koffi</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/sendMessage" method="POST">
                            @csrf
                            <div class="modal-body p-4">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <label class="form-label fw-bold">Expéditeur (Votre Nom)</label>
                                        <input type="text" class="form-control" name="name" value="Admin 3AU" required>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label fw-bold">Destinataire</label>
                                        <input type="email" class="form-control bg-light" value="jean.koffi@email.com" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Objet de la réponse</label>
                                        <input type="text" class="form-control" name="subjet" value="RE: Demande de devis audit" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold">Votre Message</label>
                                        <textarea name="contenue" class="form-control summernote" rows="8">Bonjour Jean,</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success px-4">
                                    <i class="ri-send-plane-2-fill me-1"></i> Envoyer le mail
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © 3AU.
                </div>
                <div class="col-sm-6 text-sm-end">
                    Design & Develop by Multipalms
                </div>
            </div>
        </div>
    </footer>
</div>

@push('scripts')

@endpush
@endsection
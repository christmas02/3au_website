@extends('backoffice.layout')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Candidatures : Consultant Senior en Audit</h4>
                        <a href="{{ route('backoffice.carriere') }}" class="btn btn-soft-dark btn-sm"><i class="ri-arrow-left-line me-1"></i> Retour</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm border-start border-primary">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Date</th>
                                            <th>Candidat (Info)</th>
                                            <th>CV / Document</th>
                                            <th>Statut</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ date('d M, Y') }}</td>
                                            <td>
                                                <!-- Supposons que datata_candidat contient "Nom | Email" -->
                                                <div class="fw-bold">Jean Koffi</div>
                                                <div class="text-muted small">jean.koffi@email.com</div>
                                            </td>
                                            <td>
                                                <a href="/storage/cv/mon_cv.pdf" target="_blank" class="btn btn-sm btn-soft-secondary">
                                                    <i class="ri-file-pdf-line text-danger me-1"></i> Voir le CV
                                                </a>
                                            </td>
                                            <td>
                                                <span class="badge bg-soft-warning text-warning">Non lu</span>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewCandidatModal1">
                                                    Consulter & Répondre
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL : CONSULTER & RÉPONDRE -->
<div class="modal fade" id="viewCandidatModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg border-0">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title">Candidature de : <span class="text-primary">Jean Koffi</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Navigation par Onglets -->
            <div class="card-header border-0 pb-0">
                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#details-candidat" role="tab">
                            <i class="ri-folder-user-line me-1 align-middle"></i> Détails de la candidature
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#envoyer-mail" role="tab">
                            <i class="ri-mail-send-line me-1 align-middle"></i> Répondre par mail
                        </a>
                    </li>
                </ul>
            </div>

            <div class="modal-body">
                <div class="tab-content">

                    <!-- ONGLET 1 : DÉTAILS DE LA CANDIDATURE -->
                    <div class="tab-pane active" id="details-candidat" role="tabpanel">
                        <div class="row">
                            <!-- Sidebar gauche : Profil express -->
                            <div class="col-md-4 border-end">
                                <div class="p-2 text-center">
                                    <div class="avatar-md mx-auto mb-3">
                                        <div class="avatar-title bg-soft-primary text-primary fs-24 rounded-circle">
                                            <i class="ri-user-line"></i>
                                        </div>
                                    </div>
                                    <h6 class="fs-14 mb-1">Jean Koffi</h6>
                                    <p class="text-muted mb-0 small"><i class="ri-mail-line"></i> jean.koffi@email.com</p>
                                    <p class="text-muted small"><i class="ri-phone-line"></i> +225 07 00 00 00</p>

                                    <hr class="my-3">

                                    <label class="form-label d-block fw-bold fs-11 text-uppercase">Curriculum Vitæ</label>
                                    <a href="#" target="_blank" class="btn btn-soft-danger w-100 mb-2">
                                        <i class="ri-file-pdf-fill me-1"></i> Consulter le CV
                                    </a>
                                </div>
                            </div>

                            <!-- Contenu droit : Réponses au formulaire -->
                            <div class="col-md-8">
                                <div class="ps-2">
                                    <div class="mb-4">
                                        <h6 class="text-primary fs-12 text-uppercase fw-bold"><i class="ri-question-line align-bottom me-1"></i> Pourquoi devrions-nous vous choisir ?</h6>
                                        <div class="p-3 bg-light rounded border-start border-3 border-primary shadow-none">
                                            <p class="mb-0 text-dark small italic">"Je possède une solide expérience en audit et j'ai hâte d'apporter ma rigueur à votre équipe..."</p>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <h6 class="text-primary fs-12 text-uppercase fw-bold"><i class="ri-user-smile-line align-bottom me-1"></i> Parler nous de vous</h6>
                                        <div class="p-3 bg-light rounded shadow-none">
                                            <p class="mb-0 text-muted small">"Passionné par les chiffres et l'optimisation des processus financiers..."</p>
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <h6 class="text-primary fs-12 text-uppercase fw-bold"><i class="ri-search-eye-line align-bottom me-1"></i> Que recherchez-vous en travaillant avec nous ?</h6>
                                        <div class="p-3 bg-light rounded shadow-none">
                                            <p class="mb-0 text-muted small">"Une entreprise dynamique où l'innovation est au cœur de la stratégie..."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ONGLET 2 : RÉPONDRE PAR MAIL -->
                    <div class="tab-pane" id="envoyer-mail" role="tabpanel">
                        <div class="p-2">
                            <form action="/send-response" method="POST">
                                @csrf
                                <input type="hidden" name="email_candidat" value="jean.koffi@email.com">

                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Destinataire</label>
                                    <input type="text" class="form-control bg-light" value="jean.koffi@email.com" readonly disabled>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Objet du message</label>
                                    <input type="text" class="form-control" name="subject" value="Suite à votre candidature chez 3AU" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold small">Votre message</label>
                                    <textarea name="message" class="form-control" rows="8" placeholder="Rédigez votre réponse ici..."></textarea>
                                </div>

                                <div class="text-end">
                                    <button type="button" class="btn btn-ghost-dark me-2" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-success px-4">
                                        <i class="ri-send-plane-2-fill me-1 align-bottom"></i> Envoyer le mail
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div> <!-- end tab-content -->
            </div>
        </div>
    </div>
</div>
@endsection
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
                        <h4 class="mb-sm-0">Créer un nouvel administrateur</h4>
                        <div class="page-title-right">
                            <a href="{{ route('backoffice.listAdministrator') }}" class="btn btn-soft-dark btn-sm">
                                <i class="ri-arrow-left-line align-middle me-1"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @include('backoffice.status')

            <form id="create-admin-form" action="/save/administrateur" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    
                    <!-- COLONNE GAUCHE : INFORMATIONS PERSONNELLES -->
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-top border-primary">
                            <div class="card-header bg-transparent">
                                <h5 class="card-title mb-0"><i class="ri-user-settings-line align-middle me-1 text-primary"></i> Informations Personnelles</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Nom et Prénom</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ri-user-line"></i></span>
                                        <input type="text" class="form-control" name="name" placeholder="Ex: Marc-Antoine Traoré" required>
                                    </div>
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold">Adresse Électronique</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ri-mail-line"></i></span>
                                        <input type="email" class="form-control" name="email" placeholder="Ex: admin@3au.ci" required>
                                    </div>
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="mb-0">
                                    <label class="form-label fw-bold">Numéro de téléphone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="ri-phone-line"></i></span>
                                        <input type="text" class="form-control" name="phone" placeholder="Ex: +225 07 00 00 00 00" required>
                                    </div>
                                    @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLONNE DROITE : ACCÈS & SÉCURITÉ -->
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-top border-success">
                            <div class="card-header bg-transparent">
                                <h5 class="card-title mb-0"><i class="ri-lock-password-line align-middle me-1 text-success"></i> Accès & Sécurité</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Rôle de l'administrateur</label>
                                    <select name="role" class="form-select border-success" required>
                                        <option value="" selected disabled>Choisir un rôle...</option>
                                        <option value="1">Super Administrateur</option>
                                        <option value="2">Administrateur Standard</option>
                                        <option value="3">Éditeur / Rédacteur</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Mot de passe</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="ri-key-2-line"></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="********" required>
                                        </div>
                                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label fw-bold">Confirmation</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="ri-shield-check-line"></i></span>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="********" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="alert alert-soft-info border-0 mb-0">
                                    <p class="small mb-0">
                                        <i class="ri-information-line me-1"></i>
                                        Le mot de passe doit contenir au moins 8 caractères pour garantir la sécurité du compte.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-3">
                            <button type="reset" class="btn btn-soft-danger px-4">Réinitialiser</button>
                            <button type="submit" class="btn btn-success px-5">
                                <i class="ri-save-3-line align-bottom me-1"></i> Enregistrer l'administrateur
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © 3AU.
                </div>
                <div class="col-sm-6 text-sm-end">
                    Tous droits réservés.
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
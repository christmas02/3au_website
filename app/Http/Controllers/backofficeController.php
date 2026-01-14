<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\Files;
use App\Models\Silder;


class BackofficeController extends Controller
{
    protected Files $files;

    public function __construct(
        Files $files
    ) {
        $this->files = $files;
    }

    public function index()
    {
        return view('backoffice.index');
    }

    #PAGE D'ACCUEIL
    public function accueil()
    {
        try {
            return view('backoffice.accueil');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page d'accueil : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #AJOUT D'UN SLIDE
    public function slider()
    {
        try {
            return view('backoffice.slider');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page d'ajout de slide : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }
    #ENREGISTRER UN SLIDE
    public function enregistrerSlide(Request $request)
    {
        try {

            // Gestion du téléchargement de l'image
            $uploadedFiles = ($request->hasFile('image'))
                ? Files::uploadFile($request->image)
                : "default_slide_image.jpg";

            $data = [
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'image' => $uploadedFiles,
                'lnk' => $request->input('lnk'),
            ];

            $result = Silder::saved($data);

            if (!$result) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', __('messages.server_error'));
            }

            return redirect()->back()->with('success', 'Slide enregistré avec succès.');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'enregistrement du slide : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #DETAIL SLIDE
    public function detailSlide($id)
    {
        try {
            $slide = Silder::getById($id);
            return view('backoffice.detailSlide', compact('slide'));
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de détail du slide : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #UPDATE SLIDE
    public function updateSlide(Request $request)
    {
        try {

            // Gestion du téléchargement de l'image si une nouvelle image est fournie
            if ($request->hasFile('image')) {
                if ($request->old_image && $request->old_image !== "default_slide_image.jpg") {
                    Files::deleteFile($request->old_image);
                }
                $name_file = Files::uploadFile($request->image);
            } else {
                $name_file = "default_slide_image.jpg";
            }

            $data = [
                'id' => $id,
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'image' => $name_file,
                'lnk' => $request->input('lnk'),
            ];

            $result = Silder::saved($data);

            if (!$result) {
                return redirect()->back()
                    ->withInput()
                    ->with('error', __('messages.server_error'));
            }

            return redirect()->back()->with('success', 'Slide mis à jour avec succès.');
        } catch (\Exception $e) {
            Log::error("Erreur lors de la mise à jour du slide : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #AJOUT CONTENU ACCUEIL
    public function ajoutContenu()
    {
        try {
            return view('backoffice.addContenuAccueil');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page d'ajout de contenu : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #AJOUT CONTENU DES MEMBRE DE L'EQUIPE
    public function ajoutEquipe()
    {

        try {
            return view('backoffice.addEquipes');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page d'ajout de contenu : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #AJOUT PARTENAIRE
    public function ajoutPartenaire()
    {

        try {
            return view('backoffice.addPartenaire');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page d'ajout de contenu : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #PAGE DE SERVICE
    public function services()
    {
        try {
            return view('backoffice.services');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    public function ajoutService()
    {
        try {
            return view('backoffice.addService');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }


    #PAGE DE PROJET
    public function projets()
    {
        try {
            return view('backoffice.projet.index');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    public function ajoutProjet()
    {
        try {
            return view('backoffice.projet.addProjet');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }


    #PAGE DE CARRIERE / Offre
    public function offre()
    {
        try {
            return view('backoffice.carriere.index');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    public function ajoutOffre()
    {
        try {
            return view('backoffice.carriere.addOffre');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    public function detailOffre()
    {
        try {
            return view('backoffice.carriere.detailOffre');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de services : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    #PAGE DE MESSAGE
    public function message()
    {
        try {
            return view('backoffice.message');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page de message : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }


    #PAGE DE USERS
    public function listAdministrator()
    {
        try {
            return view('backoffice.users.listAdministrator');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page des administrations : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }

    public function createAdministrator()
    {
        try {
            return view('backoffice.users.createAdministrator');
        } catch (\Exception $e) {
            Log::error("Erreur lors de l'ouverture de la page des administrations : " . $e->getMessage(), [
                'stack_trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', __('messages.server_error'));
        }
    }
}

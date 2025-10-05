<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\messages;
use App\Http\Requests\savemessageRequest;


class contactController extends Controller
{
     public function store(messages $messages , savemessageRequest $request)
    {
       try{
          $messages -> nom = $request -> nom;
          $messages -> email = $request -> email;
          $messages -> sujet = $request -> sujet;
          $messages -> message = $request -> message;
          $messages -> save();
          return redirect()->back()-> with('success', 'Message envoyé avec succès!');
       }
         catch(Exception $e){
            return redirect()->back()-> with('error', 'Erreur lors de l\'envoi du message.');
         }
    }
}

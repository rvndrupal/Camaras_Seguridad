<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use NZTim\Mailchimp\Mailchimp;
use Mailchimp;
// use Mailchimp_Error;
// use Mailchimp_List_AlreadySubscribed;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class EmailController extends Controller
{
    


    public function email()
    {

        $listId='1cea104e24';
        $email= request()->input('email');
        
        
            if(Mailchimp::check($listId, $email))
            {
               return redirect()->route('master.index')->with('info','Ya Estas Suscrito.');
            }  //verificamos el email de la lista
        
            Mailchimp::subscribe(
                $listId, //list id
                $email, //email
                [],     //campos extra
                false    //que el usuario confirme su email
            );  
        
            return redirect()->route('master.index')->with('info','Gracias Ya estas suscrito con exito');
        
    }
}

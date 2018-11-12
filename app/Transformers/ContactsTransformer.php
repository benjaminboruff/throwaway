<?php

namespace App\Transformers;

use App\Contact;
use League\Fractal\TransformerAbstract;

class ContactsTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Contact $contact)
    {
        return [
            'id'    => (int) $contact->Contacts_ID,
            'name'  => $contact->Contacts_Name,
            'email' => $contact->Contacts_Email,
        ];
    }
}

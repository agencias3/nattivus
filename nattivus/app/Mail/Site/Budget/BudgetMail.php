<?php

namespace AgenciaS3\Mail\Site\Budget;

use Illuminate\Mail\Mailable;

class BudgetMail extends Mailable
{
    public $contact;

    public function __construct(\AgenciaS3\Entities\Budget $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('Novo orçamento recebido pelo site')
            ->with(['data' => $this->contact])
            ->view('vendor.emails.site.budget.admin');
    }

}

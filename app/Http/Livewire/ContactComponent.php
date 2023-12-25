<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ContactComponent extends Component
{

    public $name;
    public $email;
    public $message;

    public function mount(){
        if (Auth::check()){
            $this->name = Auth()->user()->name;
            $this->email = Auth()->user()->email;
        }
    }

    public function submit(){

        $this->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);
        
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->message = $this->message;
        $contact->save();

        session()->flash('message', 'Votre message a été envoyé avec succès !');

        $this->reset('message');
    }

    public function render()
    {
        return view('livewire.contact-component');
    }
}

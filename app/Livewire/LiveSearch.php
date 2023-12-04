<?php

namespace App\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;

class LiveSearch extends Component
{

    public $name;

    public $contacts = [] ;


    public $displayEmptyMessage = false ;

    public function searchByName(){

        sleep(3); 

        $results = PhoneBook::searchByName($this->name);

        if (empty($results)) {

            $this->displayEmptyMessage = true ; 
            
        }else{

            $this->displayEmptyMessage = false ;
        }

        $this->contacts = $results ;

        
    }


    public function render()
    {
        return view('livewire.live-search');
    }
}

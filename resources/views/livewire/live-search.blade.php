<div>
    <h2>Trouver un contact </h2>

    @if($displayEmptyMessage)

        <div class="alert alert-info">
           Aucune correspondance de ce contact {{$name}}
        </div>

    @endif

    <form wire:submit.prevent="searchByName">
        <div class="input-group mb-3">
            <input wire:model.live="name" type="text" class="form-control" placeholder="Recherche le nom d'un ami" aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off">
            <span class="input-group-text" id="basic-addon2">📖</span>
        </div>
    </form>

    <div wire:loading wire:target="searchByName">
        🔄 Recherche en cours...
    </div>
    

    @if(count($contacts) > 0 )
        <div class="list-group mt-2">
            @foreach($contacts as $contact)
                <div class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$contact['name']}}</h5>
                        <small class="text-muted">{{$contact['email']}}</small>
                    </div>
                    <p class="mb-1">{{$contact['city']}}</p>
                    <small class="text-muted">{{$contact['phone']}}</small>
                </div>
            @endforeach
        </div>
    @endif

</div>

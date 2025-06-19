<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="float-right">
                <input type="text" wire:model.live="search" class="form-control" placeholder="Rechercher">
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th class="text-center"> Référence </th>
                        <th class="text-center"> Date </th>
                        <th class="text-center"> Description </th>
                        <th class="text-center"> Client </th>
                        <th class="text-center"> Montant </th>
                        <th class="text-center"> Statut </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($paiements->count() > 0)
                        @foreach ($paiements as $key => $paiement)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td class="text-center"> {{ $paiement->reference }} </td>
                                <td class="text-center"> {{ \Carbon\Carbon::parse($paiement->date)->format('d/m/Y') }} </td>
                                <td class="text-center"> {{ $paiement->desc }} </td>
                                <td class="text-center"> {{ $paiement->user->name }} </td>
                                <td class="text-center"> @money($paiement->amount, 'XOF') </td>
                                <td class="text-center"> 
                                    @if ($paiement->status > 1)
                                        <span class="text-primary">Payé</span>
                                    @else
                                        <span class="text-danger">Non payé</span>
                                    @endif 
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="7" class="text-danger">Aucun element disponible.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="float-right">
                {{ $paiements->links() }}
            </div>
        </div>
    </div>
</div>
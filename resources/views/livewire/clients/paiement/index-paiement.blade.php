<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <div class="float-right">
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Rechercher">
                </div>
            </div>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th class="text-center"> Référence </th>
                        <th class="text-center"> Date </th>
                        <th class="text-center"> Description </th>
                        <th class="text-center"> Gie </th>
                        <th class="text-center"> Montant </th>
                        <th class="text-center"> Action </th>
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
                                <td class="text-center"> {{ $paiement->gie->name }} </td>
                                <td class="text-center">@money($paiement->amount, 'XOF')</td>
                                <td class="text-center">
                                    <a href="{{ route('client.paiement.create', ['id' => $paiement->id]) }}" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-plus-box" style="font-size: 1rem"></i>
                                    </a>
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
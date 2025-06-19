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
                        <th class="text-center"> Statut </th>
                        <th class="text-center"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($demandes->count() > 0)
                        @foreach ($demandes as $key => $demande)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td class="text-center"> {{ $demande->reference }} </td>
                                <td class="text-center"> {{ \Carbon\Carbon::parse($demande->date)->format('d/m/Y') }} </td>
                                <td class="text-center"> {{ $demande->desc }} </td>
                                <td class="text-center"> {{ $demande->gie->name }} </td>
                                <td class="text-center">
                                    @if ($demande->status == 0)
                                        <span class="text-warning">En attente</span>
                                    @elseif ($demande->status == 1)
                                        <span class="text-info">Acceptée</span>
                                    @elseif ($demande->status == 2)
                                        <span class="text-primary">Traitée</span>
                                    @else
                                        <span class="text-danger">Rejetée</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.demande.show', ['id' => $demande->id]) }}" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-eye-circle" style="font-size: 1rem"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="6" class="text-danger">Aucun element disponible.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="float-right">
                {{ $demandes->links() }}
            </div>
        </div>
    </div>
</div>
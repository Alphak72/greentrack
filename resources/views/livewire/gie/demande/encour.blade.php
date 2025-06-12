<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th class="text-center"> Référence </th>
                        <th class="text-center"> Date </th>
                        <th class="text-center"> Type de poubelle </th>
                        <th class="text-center"> Nom du client </th>
                        <th class="text-center"> Adresse du client </th>
                        <th class="text-center"> Statut </th>
                    </div>
                </thead>
                <tbody>
                    @if ($encours->count() > 0)
                        @foreach ($encours as $key => $encour)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-center">{{ $encour->reference }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($encour->date)->format('d/m/Y') }}</td>
                                <td class="text-center">{{ $encour->desc }}</td>
                                <td class="text-center">{{ $encour->client->name }}</td>
                                <td class="text-center">{{ $encour->client->address }}</td>
                                <td class="text-center">
                                    @if ($encour->status == 1)
                                        <span class="text-danger">Non payé</span>
                                    @else
                                        <span class="text-primary">Payé</span>
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
            <div class="text-right">
                {{ $encours->links() }}
            </div>
        </div>
    </div>
</div>
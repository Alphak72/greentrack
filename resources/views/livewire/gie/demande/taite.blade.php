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
                    </div>
                </thead>
                <tbody>
                    @if ($traites->count() > 0)
                        @foreach ($traites as $key => $traite)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-center">{{ $traite->reference }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($traite->date)->format('d/m/Y') }}</td>
                                <td class="text-center">{{ $traite->desc }}</td>
                                <td class="text-center">{{ $traite->client->name }}</td>
                                <td class="text-center">{{ $traite->client->address }}</td>
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
            <div class="text-right">
                {{ $traites->links() }}
            </div>
        </div>
    </div>
</div>
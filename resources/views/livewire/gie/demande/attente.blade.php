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
                        <th class="text-center"> Actions </th>
                    </div>
                </thead>
                <tbody>
                    @if ($attentes->count() > 0)
                        @foreach ($attentes as $key => $attente)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-center">{{ $attente->reference }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($attente->date)->format('d/m/Y') }}</td>
                                <td class="text-center">{{ $attente->desc }}</td>
                                <td class="text-center">{{ $attente->client->name }}</td>
                                <td class="text-center">{{ $attente->client->address }}</td>
                                <td class="text-center">
                                    <a href="{{ route('gie.demande.attente.show', ['id' => $attente->id]) }}" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-eye-circle" style="font-size: 1rem"></i>
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
            <div class="text-right">
                {{ $attentes->links() }}
            </div>
        </div>
    </div>
</div>
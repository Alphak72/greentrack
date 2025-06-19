<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th class="text-center"> Nom </th>
                        <th class="text-center"> Contact </th>
                        <th class="text-center"> Adresse </th>
                        <th class="text-center"> Actions </th>
                    </div>
                </thead>
                <tbody>
                    @if ($gies->count() > 0)
                        @foreach ($gies as $key => $gie)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-center">{{ $gie->name }}</td>
                                <td class="text-center">{{ $client->phone ?? 'N/A' }}</td>
                                <td class="text-center">{{ $client->address ?? 'N/A' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.gie.show', ['id' => $gie->id]) }}" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-eye-circle" style="font-size: 1rem"></i>
                                    </a>

                                    <a href="{{ route('admin.gie.delete', ['id' => $gie->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Vous etes sur le point de supprimer un Gie.')">
                                        <i class="mdi mdi-delete" style="font-size: 1rem"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr class="text-center">
                            <td colspan="5" class="text-danger">Aucun element disponible.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            <div class="text-right">
                {{ $gies->links() }}
            </div>
        </div>
    </div>
</div>
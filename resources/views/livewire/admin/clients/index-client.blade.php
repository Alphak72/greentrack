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
                    @if ($clients->count() > 0)
                        @foreach ($clients as $key => $client)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td class="text-center">{{ $client->name }}</td>
                                <td class="text-center">{{ $client->phone }}</td>
                                <td class="text-center">{{ $client->address }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.client.show', ['id' => $client->id]) }}" class="btn btn-sm btn-info">
                                        <i class="mdi mdi-eye-circle" style="font-size: 1rem"></i>
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
                {{ $clients->links() }}
            </div>
        </div>
    </div>
</div>
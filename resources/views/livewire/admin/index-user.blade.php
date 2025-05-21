<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <a href="{{ route('user.create') }}" class="btn btn-outline-primary btn-fw">Ajouter un user</a>
                <div class="float-right">
                    <input type="text" wire:model.live="search" class="form-control" placeholder="Rechercher un utilisateur">
                </div>
            </div>
            
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> # </th>
                        <th class="text-center"> Nom </th>
                        <th class="text-center"> Username </th>
                        <th class="text-center"> Statut </th>
                        <th class="text-center"> Rôle </th>
                        <th class="text-center"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users->count() > 0)
                        @foreach ($users as $key => $user)
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td class="text-center"> {{ $user->name }} </td>
                                <td class="text-center"> {{ $user->username }} </td>
                                <td class="text-center">
                                    @if ($user->is_active == 1)
                                        <span class="text-primary">Actif</span>
                                    @else
                                        <span class="text-primary">Non actif</span>
                                    @endif
                                </td>
                                <td class="text-center"> {{ $user->role }} </td>
                                <td class="text-center">
                                    <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-primary">
                                        <i class="mdi mdi-pencil" style="font-size: 1rem"></i>
                                    </a>

                                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">
                                        <i class="mdi mdi-delete-circle" style="font-size: 1rem"></i>
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
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>
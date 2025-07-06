<div>
    <div class="container mt-2">
        <div class="row mt-2">
            <div class="col-4">
                <h1>Todo List</h1>
            </div>
            <div class="col-8">
                <input class="form-control" id="exampleDataList" placeholder="Cari Data" wire:model.live.debounce.250ms="todo">
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Item</th>
                                <th scope="col">Completed</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $todo)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $todo->item }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" @if (!$todo->completed)
                                        wire:click="complete({{ $todo->id }})" wire:confirm="selesaikan todo list
                                        ini?"@endif>
                                        {{ $todo->completed ? 'Yes' : 'No' }}
                                    </button>
                                    <button type="button" class="btn btn-outline-danger"
                                        wire:click="delete({{ $todo->id }})"
                                        wire:confirm="Yaqin ingin hapus todo list ini">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center">No todos found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
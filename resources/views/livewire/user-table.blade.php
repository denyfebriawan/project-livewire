<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($users as $index => $item)
            <tr>
                <th scope="row">{{ $index + 1 }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('user.details', $item->id) }}" class="badge bg-primary">Detail</a>
                    <a href="" class="badge bg-warning">Edit</a>
                    <a href="" class="badge bg-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

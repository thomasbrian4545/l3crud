<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>{{ $customer->fullname }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->phone }}</td>
                <td>
                    <button class="btn btn-primary btn-sm">View</button>
                    <button class="btn btn-secondary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

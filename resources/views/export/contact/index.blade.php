<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
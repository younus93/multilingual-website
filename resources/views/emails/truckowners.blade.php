<table>
    <tr>
        <td>Name</td>
        <td>{{ $Name }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $Phone }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $Email }}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $Address }}</td>
    </tr>
    <tr>
        <td>Sent at</td>
        <td>{{ \Carbon\Carbon::now() }}</td>
    </tr>
</table>
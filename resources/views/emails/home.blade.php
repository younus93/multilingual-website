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
        <td>Sent AT</td>
        <td>{{ \Carbon\Carbon::now() }}</td>
    </tr>
</table>
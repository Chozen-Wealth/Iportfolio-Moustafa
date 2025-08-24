@extends("layouts.back")

@section("content")
<section id="messages" class="p-5" style="width: calc(100vw - 250px)">
    <h1>Messages reçus :</h1>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Nom</th>
            <th>Email</th>
            <th>Sujet</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        @foreach ($messages as $message)
            <tr>
                <td>{{ $message->nom }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->sujet }}</td>
                <td>{{ $message->message }}</td>
                <td>{{ $message->created_at }}</td>
                <td>
                    <form action="{{ route("destroy_messages", $message->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</section>
@endsection
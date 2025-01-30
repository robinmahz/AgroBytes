@if ($isAdmin)
    You have a new contact
    <br>
    name: {{ $contact->name }}
    <br>

    email: {{ $contact->email }}
    <br>

    phone: {{ $contact->phone }}
    <br>

    message: {{ $contact->message }}
@else
    Thankyou for contacting us.
@endif

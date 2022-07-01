<p>A new contact form:</p>
@extends('layouts.master')

@section('content')
<table class="border-spacing-1 border-solid border-gray-400 text-left border-collapse w-full">
    <tr>
        <td class="p-4 text-left">Id</td>
        {{-- <td class="p-4 text-left">{{ $contact->id }}</td> --}}
    </tr>

    <tr>
        <td class="p-4 text-left">Name</td>
        {{-- <td class="p-4 text-left">{{ $contact->name }}</td> --}}
    </tr>

    <tr>
        <td class="p-4 text-left">Email</td>
        {{-- <td class="p-4 text-left">{{ $contact->email }}</td> --}}
    </tr>

    <tr>
        <td class="p-4 text-left">Message</td>
        {{-- <td class="p-4 text-left">{{ $contact->message }}</td> --}}
    </tr>

    <tr>
        <td class="p-4 text-left">Submitted at</td>
        {{-- <td class="p-4 text-left">{{ $contact->created_at }}</td> --}}
    </tr>
</table>
@endsection
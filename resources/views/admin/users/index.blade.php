@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Users</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%;">
        <thead>
            <tr style="background-color: #f0f0f0;">
                <th>fullname</th>
                <th>Email</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
          <td>
    <a href="{{ route('admin.users.show', $user->id) }}"
       class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-3 rounded shadow mr-2">
        View
    </a>

    <form action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Do you want to delete this user?')">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="inline-block bg-red-600 hover:bg-red-700 text-white text-sm font-semibold py-2 px-3 rounded shadow">
            Delete
        </button>
    </form>
</td>

            @empty
            <tr>
                <td colspan="3">there are not users</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
<style>
    .user-card {
        max-width: 500px;
        margin: 60px auto;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        padding: 30px 40px;
        font-family: 'Nunito', sans-serif;
        color: #333;
        transition: transform 0.3s;
    }

    .user-card:hover {
        transform: scale(1.01);
    }

    .user-card h2 {
        font-size: 28px;
        margin-bottom: 25px;
        color: #2c3e50;
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
    }

    .user-detail-label {
        display: inline-block;
        width: 100px;
        font-weight: 600;
        color: #555;
    }

    .user-role.admin {
        background: #8e44ad;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.875rem;
    }

    .user-role.user {
        background: #2ecc71;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.875rem;
    }

    .back-btn {
        display: inline-block;
        margin-top: 25px;
        background: #3498db;
        color: white;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        transition: background 0.3s ease;
    }

    .back-btn:hover {
        background: #2980b9;
    }
</style>

<div class="user-card">
    <h2>👤 User Details</h2>

    <p><span class="user-detail-label">Name:</span> {{ $user->name }}</p>
    <p><span class="user-detail-label">Email:</span> {{ $user->email }}</p>
    <p>
        <span class="user-detail-label">Role:</span>
        <span class="user-role {{ $user->role === 'admin' ? 'admin' : 'user' }}">
            {{ ucfirst($user->role) }}
        </span>
    </p>

    <a href="{{ route('admin.users') }}" class="back-btn">← Back to List</a>
</div>
@endsection

@extends('mainLayout')

@section('page-content')
<div class="container">
    <blockquote class="blockquote">
        People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius
    </blockquote>
    <table class="table">
        <tbody>
            <tr>
                <td class="bg-primary text-white">
                    <a href="{{ route('usertool') }}" class="text-white">Manage User Roles and Permissions</a>
                </td>
            </tr>
            <tr>
                <td class="bg-dark">
                    <a href="{{ route('home') }}" class="text-white">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
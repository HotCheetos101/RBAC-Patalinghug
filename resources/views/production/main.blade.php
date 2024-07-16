@extends('mainLayout')

@section('page-content')
<div class="container-fluid">
    <table class="table">
        <tbody>
            <tr>
                <td class="bg-primary text-white">
                    You must be the change you wish to see in the world. - Mahatma Gandhi
                </td>
            </tr>
            <tr>
                <td class="bg-dark">
                    <p>
                        @include('slugs.homeLink')
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
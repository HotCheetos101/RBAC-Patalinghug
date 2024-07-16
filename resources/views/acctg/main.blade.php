@extends('mainLayout')

@section('page-content')
<div class="container-fluid">
    <blockquote class="blockquote">
        Simplicity is the ultimate sophistication. - Leonardo da Vinci
    </blockquote>
    <table class="table">
        <tbody>
            <tr>
                <td class="bg-primary text-white">
                    @can('create')
                    <a href="{{ url('acctg/new') }}" class="text-white">Add New Ledger Entry</a>
                    @elsecan('viewAll')
                    <a href="{{ url('acctg/view/all') }}" class="text-white">View All Ledgers</a>
                    @endcan
                </td>
            </tr>
            <tr>
                <td class="bg-dark">
                    @include('slugs.homeLink')
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
@extends('mainLayout')

@section('page-title','Main Landing Page')

@section('page-content')
@section('page-content')
<div class="container">
    <h1>Welcome to the Site</h1>
    <br>
    <table class="table">
        <tbody>
            <tr>
                <td class="bg-dark text-white">
                    <a href="{{ route('acctg') }}" class="text-white" @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('bookeeper') || Auth::user()->hasRole('auditor') || Auth::user()->hasRole('audasst'))
                        style="pointer-events: none; cursor: not-allowed;"
                        @endunless
                        >Accounting</a>
                </td>
                <td class="bg-secondary">
                    <a href="{{ route('prod') }}" class="text-dark" @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('assembler'))
                        style="pointer-events: none; cursor: not-allowed;"
                        @endunless
                        >Production</a>
                </td>
                @if(Auth::user()->hasRole('admin'))
                <td class="bg-info">
                    <a href="{{ route('dash') }}" class="text-dark">Dashboard</a>
                </td>
                @endif
            </tr>
        </tbody>
    </table>
</div>
@endsection


@endsection
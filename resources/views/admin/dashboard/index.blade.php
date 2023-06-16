@extends('admin.layouts.main')

@section('content')
    <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
            <thead>
            <tr>

                <th scope="col">
                    <label class="control control--checkbox">
                        <input type="checkbox" class="js-check-all"/>
                        <div class="control__indicator"></div>
                    </label>
                </th>

                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">IP</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Port</th>
                <th scope="col">Domain</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            <tbody>
            @foreach($servers as $server)
                <tr scope="row">
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>
                        {{ $server->getAttribute('id') }}
                    </td>
                    <td>
                        {{ $server->getAttribute('name') ?? '' }}
                    </td>
                    <td>
                        {{ $server->getAttribute('ip') ?? '' }}
                    </td>
                    <td>
                        {{ $server->getAttribute('username') ?? '' }}
                    </td>
                    <td>
                        {{ $server->getAttribute('password') ?? '' }}
                    </td>
                    <td>
                        {{ $server->getAttribute('port') ?? '' }}
                    </td>
                    <td>
                        {{ $server->getAttribute('domain') ?? '' }}
                    </td>
                    <td>
                        <button type="button" class="btn btn-success">connect</button>
                    </td>

                </tr>
                <tr class="spacer">
                    <td colspan="100"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

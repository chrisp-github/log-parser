@extends('layouts.app')

@section('title', 'Logs')

@section('sidebar')
    @parent
@endsection

@section('content')
    <h1>Logs</h1>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @foreach($connections as $connection)
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$connection->id}}">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$connection->id}}" aria-expanded="false" aria-controls="collapse{{$connection->id}}">
                            {{$connection->ip}}
                        </a>
                    </h4>
                </div>
                <div id="collapse{{$connection->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$connection->id}}">
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>Date</th>
                                <th>Response Code</th>
                                <th>Bytes</th>
                                <th>Page URL</th>
                                <th>Request Type</th>
                                <th>Request URL</th>
                                <th>Operating System</th>
                                <th>Browser Type</th>
                            </tr>
                            @foreach ($logs as $log)
                                @if ($log->connection_id == $connection->id)
                                <tr>
                                    <td>{{$log->date}}</td>
                                    <td>{{$log->response_code}}</td>
                                    <td>{{ ($log->bytes != '') ? $log->bytes : 'N/A' }}</td>
                                    <td>{{ ($log->page_url != '') ? $log->page_url : 'N/A' }}</td>
                                    <td>{{ ($log->request->type != '') ? $log->request->type : 'N/A' }}</td>
                                    <td>{{ ($log->request_url != '') ? $log->request_url : 'N/A' }}</td>
                                    <td>{{ ($log->useragent->system_type != '') ? $log->useragent->system_type : 'N/A' }}</td>
                                    <td>{{ ($log->useragent->browser_type != '') ? $log->useragent->browser_type : 'N/A' }}</td>
                                </tr>
                                @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
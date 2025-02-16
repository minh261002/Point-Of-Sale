<div class="card mt-3">
    <div class="card-body pb-0">
        <div class="cmd-container">
            <table class="table table-dark table-striped">
                <thead style="background: #1e1e1e;">
                    <tr>
                        <th>Method</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Table Name</th>
                        <th>Created At</th>
                        <th>User Name</th>
                        <th>Action</th>
                        <th>IP Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($logs as $log)
                        <tr>
                            <td>{{ $log->method }}</td>
                            <td>{{ $log->url }}</td>
                            <td>{{ $log->status }}</td>
                            <td>{{ $log->table_name }}</td>
                            <td>{{ format_datetime($log->created_at) }}</td>
                            <td>{{ $log->user_name }}</td>
                            <td>{{ $log->action }}</td>
                            <td>{{ $log->ip_address }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

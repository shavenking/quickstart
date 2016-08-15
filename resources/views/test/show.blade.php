<div class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title">測試資料表</h3>
    </div>
    <div class="panel-body">
       @if (!empty($news))
        <table class="table table-striped">
            <tr>
                <th>name</th>
                <th><!-- Actions --></th>
                </tr>
                @foreach ($news => $new)
                    <tr>
                        <td>{{ $new['Name'] }}</td>
                    </tr>
                @endforeach
            </table>
            @else
                <p class="text-center text-muted">
                    暫時沒有協力廠商
                </p>
            @endif
        </div>
    </div>
@stop

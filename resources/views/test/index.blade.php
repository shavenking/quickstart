
<p><a class="btn btn-default" href="＃">測試</a></p>
<div class="panel panel-default">
    <div class="panel-heading">
            <h3 class="panel-title">測試資料表</h3>
    </div>
      <div class="panel-body">
       @if (!empty($news))
        <table class="table table-striped">
            <tr>
                <th>名稱</th>
                <th>Sex</th>
                <th><!-- Actions --></th>
                </tr>
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new['Name'] }}</td>
                        <td>{{ $new['Sex'] }}</td>
                    </tr>
                @endforeach
            </table>
            @else
                <p class="text-center text-muted">
                    暫時沒有
                </p>
            @endif
        </div>
    </div>


@foreach ($accounts as $account)
    <ul>
        <li>{{ $account->email }} - {{ $account->password }} - {{ $account->created_at->diffForHumans() }}</li>
    </ul>
@endforeach
{{ $accounts->links() }}

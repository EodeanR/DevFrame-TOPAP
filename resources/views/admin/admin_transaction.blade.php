<x-admin-layout title="{{ $title }}">
    <div class="table-data card table-responsive">        
        <table class="table table-sm border-dark table-hover">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Id Game</th>
                    <th>Game</th>
                    <th>Method</th>
                    <th>Status</th>
                    <th>Waktu</th>
                    <th>Menu</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $no => $transaction)
                 @php($status = $transaction->ts_status)
                <tr>
                    <td><small>{{ $no + 1 }}</small></td>
                    <td><small>{{ $transaction->ts_code }}</small></td>
                    <td><small>{{ $transaction->cust_gameid }}</small></td>
                    <td><small>{{ $transaction->prd_name }}</small></td>
                    <td><small>{{ $transaction->ts_method }}</small></td>
                    <td><small>
                        <div class="btn btn-sm btn-{{{ ($status == 'Process') ? 'secondary' : (($status == 'Success') ? 'success' : 'danger') }}}" title="{{$transaction->prd_status}}"><i class="fa-solid fa-{{{ ($status == 'Process') ? 'spinner' : (($status == 'Success') ? 'check' : 'xmark') }}}"></i></div>
                    </small></td>
                    <td><small>{{ $transaction->created_at }}</small></td>
                    <td class="align-self-center">
                        <div class="btn-menu my-auto">
                            <a href="" class="btn btn-sm btn-primary mb-1" title="Detail"><i class="fa-solid fa-angles-right"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
</x-admin-layout>
<div>
    <link href="{{asset('bootstrapDist/css/bootstrap.css')}}" rel="stylesheet">

    <livewire:header>
    <div class="whole-table-space">
        <table class="table table-striped">
            <thead class="thead thead-dark">
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">CPF</th>
                    <th scope="col">PAID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td> {{$user->name}} </td>
                    <td> 
                        {{substr($user->cpf, 0, 3) . '.' . substr($user->cpf, 3, 3) . '.' . substr($user->cpf, 6, 3) . '-' . substr($user->cpf, 9, 2)}}
                    </td>
                    <td> {{$user->paid == "1" ? "Sim" : "Não"}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="paginacao">
            {{$users->links()}}
        </div>
    </div>


    <style>
        .whole-table-space{
            padding-top:5rem;
            width:100%;
            overflow-x:auto;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .whole-table-space .table{
            width:50%;
        }
    </style>
    <script src="{{asset('bootstrapDist/js/bootstrap.js')}}"></script>
</div>
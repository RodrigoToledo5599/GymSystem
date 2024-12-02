<div>
    <link href="{{asset('bootstrapDist/css/bootstrap.css')}}" rel="stylesheet">
    <livewire:header />

    <div class="whole-table-space">
        <table class="table table-striped">
            <thead class="thead thead-dark">
                <tr>
                    <th scope="col">USER ID</th>
                    <th scope="col">DIA</th>
                    <th scope="col">HORÁRIO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allAccess as $access)
                <tr>
                    <td> {{$access->user_id}} </td>
                    <td> {{$access->dia}} </td>
                    <td> {{$access->horario}} </td>
                </tr>
                @endforeach
            </tbody>   
        </table>
        <br>
        <div class="paginacao">
            {{$allAccess->links()}}
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
        .whole-table-space .paginacao{
            
        }

    </style>
    <script src="{{asset('bootstrapDist/js/bootstrap.js')}}"></script>
</div>

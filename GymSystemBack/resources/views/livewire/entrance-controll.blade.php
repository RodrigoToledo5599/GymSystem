<div>
    <link href="{{asset('bootstrapDist/css/bootstrap.css')}}" rel="stylesheet">
    <livewire:header />

    <div class="whole-space">
        <div class="input-options">
            <div class="input-option">
                <label for="selectday">Select the day:</label><br>
                <input type="date" id="selectday" name="selectday">
            </div>
            <div class="input-option">
                <label for="selectintervalstart">Select the interval:</label>
                <br>
                <input type="date" id="selectintervalstart" name="selectintervalstart">
                <input type="date" id="selectintervalend" name="selectintervalend">
            </div>
            <div class="input-option">
                <button class="btn btn-primary" wire:click="queryFromToday">Today</button>
                <button class="btn btn-primary" wire:click="queryAll"> &nbsp;&nbsp;&nbsp;All&nbsp;&nbsp; </button>
            </div>
        </div>
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
        .whole-space{
            padding-top:1rem;
            width:100%;
            overflow-x:auto;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .whole-space .input-options{
            width:80vw;
            height:18vh;
            display:flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
            border:solid 1px black;
            margin-bottom: 1rem;
        }
        .whole-space .input-options .input-option{
            height:100%;
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }   
        .whole-space .table{
            width:50%;
        }
        .whole-space .paginacao{
            
        }

    </style>
    <script src="{{asset('bootstrapDist/js/bootstrap.js')}}"></script>
</div>

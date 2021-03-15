<tr>
    <td>{{$data->id}}</td>
    <td>{{$data->title}}</td>
    <td>{{$data->author}}</td>
    <td>{{$data->date}}</td>
    <td>
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Actions
                </button>
                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <li><a class="dropdown-item" href="javascript:">View</a></li>
                    <li><a class="dropdown-item" href="javascript:">Edit</a></li>
                    <li><a class="dropdown-item" href="javascript:">Delete</a></li>
                </ul>
            </div>
        </div>
    </td>
</tr>


<div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
        <form action="{{url('task1/ajax/data/create')}}" method="post" id="formId">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">{{__('Create_List')}}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                    <div class="form-group">
                        <label for="title">{{__('Title')}}</label>
                        <input  type="text" class="form-control" name="title" value="{{old('title')}}" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="author">{{__('Author')}}</label>
                        <input  type="text" class="form-control" name="author" value="{{old('author')}}" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="date">{{__('Date')}}</label>
                        <input  type="date" class="form-control" name="date" value="{{old('date')}}">
                    </div>
                    <div class="form-group">
                        <label for="list">{{__('List')}}</label>
                        <textarea   class="form-control" name="list" cols="30" rows="10">{{old('List')}}</textarea>
                    </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{__('Close')}}</button>
                <button type="submit" class="btn btn-success" id="submitBtn">{{__('Submit')}}</button>
                <button type="button" class="btn btn-info disabled" style="display: none" id="processingBtn">{{__('Processing')}}</button>
            </div>

        </div>
        </form>
    </div>
</div>

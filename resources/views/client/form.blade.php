<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form">
                    <div class="form-group row add">
                        <label class="control-label col-sm-3" for="name">Name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="lastName">Last name:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="lastName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="personal_code">Personal code:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="personal_code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="email">Email:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="email" name="email">
                            <p class="error text-center alert alert-danger hidden"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="address">Address:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="city">City:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="country">Country:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="country">
                        </div>
                    </div>
                </form>
                <div class="deleteContent">
                    Are you Sure you want to delete <span class="dname"></span> ? <span class="hidden did"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn actionBtn" data-dismiss="modal" id="edit">
                        <span id="footer_action_button" class="glyphicon"></span>
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
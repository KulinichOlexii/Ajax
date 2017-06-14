$(document).ready(function() {

    $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text("Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('add');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.error').addClass('hidden');
        $('.actionBtn').attr('data-id', $(this).data('id'));
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#name').val($(this).data('name'));
        $('#lastName').val($(this).data('lastname'));
        $('#personal_code').val($(this).data('code'));
        $('#email').val($(this).data('email'));
        $('#address').val($(this).data('address'));
        $('#city').val($(this).data('city'));
        $('#country').val($(this).data('country'));
        $('#myModal').modal('show');
    });

    $(document).on('click', '#add', function() {
        $('#footer_action_button').text("Add");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('add');
        $('.modal-title').text('Add');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#myModal').modal('show');

        $('.error').addClass('hidden');
        $('#name').val('');
        $('#lastName').val('');
        $('#personal_code').val('');
        $('#email').val('');
        $('#address').val('');
        $('#city').val('');
        $('#country').val('');
    });
    $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text("Delete");
        $('#footer_action_button').removeClass('glyphicon-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').addClass('delete');
        $('.actionBtn').removeClass('add');
        $('.actionBtn').removeClass('edit');
        $('.modal-title').text('Delete');
        $('.did').text($(this).data('id'));
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        $('.dname').html($(this).data('name'));
        $('#myModal').modal('show');
    });

    $('.modal-footer').on('click', '.edit', function() {

        $.ajax({
            type: 'put',
            url: '/clients/' + $(this).attr('data-id'),
            data: {
                '_token': $('input[name=_token]').val(),
                'name': $('#name').val(),
                'lastName': $('#lastName').val(),
                'personal_code': $('#personal_code').val(),
                'email': $('#email').val(),
                'address': $('#address').val(),
                'city': $('#city').val(),
                'country': $('#country').val()
            },
            success: function(data) {
                if ((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.email);
                    $('#myModal').modal('show');
                } else{
                    $('.client' + data.id).replaceWith("<tr class='client" + data.id + "'>" +
                        "<td>"+ (data.name != null ? data.name : ' ') +"</td>" +
                        "<td>"+ (data.lastName != null ? data.lastName : ' ') +"</td>" +
                        "<td>"+ (data.personal_code != null ? data.personal_code : ' ') +"</td>" +
                        "<td>"+ (data.email != null ? data.email : ' ') +"</td>" +
                        "<td>"+ (data.address != null ? data.address : ' ') +"</td>" +
                        "<td>"+ (data.city != null ? data.city : ' ') +"</td>" +
                        "<td>"+ ( data.country != null ? data.country : ' ') +"</td>" +
                        "<td><button class='edit-modal btn btn-primary' style='margin-right: 5px;' data-id='"+ data.id +"' data-name='" + data.name + "'" +
                        "data-lastName='" + data.lastName + "'" +
                        "data-code='" + data.personal_code + "'" +
                        "data-email='" + data.email + "'" +
                        "data-address='" + data.address + "'" +
                        "data-city='" + data.city + "'" +
                        "data-country='" + data.country + "'>" +
                        "<span class='glyphicon glyphicon-edit'></span></button>" +
                        "<button class='delete-modal btn btn-primary' data-id='"+ data.id +"'>" +
                        "<span class='glyphicon glyphicon-trash'></span></button></td></tr>");
                }
            }
        });

    });

    $('.modal-footer').on('click', '.add', function() {

        $.ajax({
            type: 'post',
            url: '/clients',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#id").val(),
                'name': $('#name').val(),
                'lastName': $('#lastName').val(),
                'personal_code': $('#personal_code').val(),
                'email': $('#email').val(),
                'address': $('#address').val(),
                'city': $('#city').val(),
                'country': $('#country').val()
            },
            success: function(data) {
                if ((data.errors)){
                    $('.error').removeClass('hidden');
                    $('.error').text(data.errors.email);
                    $('#myModal').modal('show');
                }
                else {
                    $('.error').addClass('hidden');
                    $('#table-body').append("<tr class='client" + data.id + "'>" +
                        "<td>"+ (data.name != null ? data.name : ' ') +"</td>" +
                        "<td>"+ (data.lastName != null ? data.lastName : ' ') +"</td>" +
                        "<td>"+ (data.personal_code != null ? data.personal_code : ' ') +"</td>" +
                        "<td>"+ (data.email != null ? data.email : ' ') +"</td>" +
                        "<td>"+ (data.address != null ? data.address : ' ') +"</td>" +
                        "<td>"+ (data.city != null ? data.city : ' ') +"</td>" +
                        "<td>"+ ( data.country != null ? data.country : ' ') +"</td>" +
                        "<td><button class='edit-modal btn btn-primary' style='margin-right: 5px;' data-id='"+ data.id +"' data-name='" + data.name + "'" +
                        "data-lastName='" + data.lastName + "'" +
                        "data-code='" + data.personal_code + "'" +
                        "data-email='" + data.email + "'" +
                        "data-address='" + data.address + "'" +
                        "data-city='" + data.city + "'" +
                        "data-country='" + data.country + "'>" +
                        "<span class='glyphicon glyphicon-edit'></span></button>" +
                        "<button class='delete-modal btn btn-primary' data-id='"+ data.id +"'>" +
                        "<span class='glyphicon glyphicon-trash'></span></button></td></tr>");
                }
            }
        });

    });

    $('.modal-footer').on('click', '.delete', function() {
        var id = $('.did').text();
        $.ajax({
            type: 'delete',
            url: '/clients/' + id,
            data: {
                '_token': $('input[name=_token]').val()
            },
            success: function(data) {
                $('.client' + $('.did').text()).remove();
            }
        });
    });
});

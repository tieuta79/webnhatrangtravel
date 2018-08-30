$(document).ready(function () {
    $('textarea[data-type="editor"]').summernote({
        height: 200
    });

    $(document).on('click', 'i[status]', function () {
        var obj = $(this);
        var id = $(this).attr('c_id');
        var status = $(this).attr('status');
        $.ajax({
            url: baseurl + 'admin/reviews/status',
            data: {id: id, status: status},
            type: 'post',
            dataType: 'json',
            success: function (res) {
                if(res.status == true){
                    obj.attr('status',res.data.status);
                    if(res.data.status == 0){
                       obj.attr('class','fa fa-times text-danger');
                    }else{
                        obj.attr('class','fa fa-check text-success');
                    }
                }
            }
        })
    })
});
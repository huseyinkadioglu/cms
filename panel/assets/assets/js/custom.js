$(document).ready(function () {

    $(".remove-btn").click(function () {

        $data_url = $(this).data("url");

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function(result) {
            if (result.value) {

                window.location.href = $data_url;
            }
        });

    })


})
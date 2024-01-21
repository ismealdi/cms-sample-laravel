$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

    statusCode: {
        401: function () {
            console.log("Unauthorized")
            $("#page-content-wrapper").html('<div class="container-fluid main-container hideOnScroll" id="maincontainer"> <div class="row"> <div class="col py-3"> <h1 class="title">Unauthorized</h1> </div> </div> </div>')
        }
    }
});

const getBase64 = async (file) => new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => resolve(reader.result);
    reader.onerror = error => reject(error);
});

var onDeleted = function (data) { }

function deleteData(route) {
    $.ajax({
        url: route,
        type: "DELETE",
        success: function (result) {
            onDeleted(route);
        }, error: function (e) {
            Swal.fire(
                "Failure",
                "Unable to delete data",
                "error"
            )
        }
    });
}

function addDeleteFunction() {
    $(".delete").click(function (e) {
        var route = $(this).data('route');

        Swal.fire({
            title: "Are you sure? ",
            text: "You won\"t be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: true
        }).then(function (result) {
            if (result.value) {

                deleteData(route);

                Swal.fire({
                    title: "Deleted!",
                    text: "Your data has been deleted.",
                    type: "error",
                    timer: 1000,
                    icon: "success",
                    showConfirmButton: false
                })
            }
        });
    });
}
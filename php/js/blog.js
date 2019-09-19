$(document).ready(function () {
    $('#search-data').unbind().keyup(function (e) {
        var value = $(this).val();
        if (value.length > 3) {
            searchData(value);
        }
        else {
            $('#search-result-container').hide();
        }
    }
    );
}
);
function searchData(val) {
    $('#search-result-container').show();
    $('#search-result-container').html('<div><img src="../img/preloader.gif" width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');
    $.post('controller.php', {
        'search-data': val
    }
        , function (data) {
            if (data != "")
                $('#search-result-container').html(data);
            else
                $('#search-result-container').html("<div class='search-result'>No Result Found...</div>");
        }
    ).fail(function (xhr, ajaxOptions, thrownError) {
        //any errors?
        alert(thrownError);
        //alert with HTTP error
    }
    );
}
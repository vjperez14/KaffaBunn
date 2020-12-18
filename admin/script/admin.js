$(document).ready(function () {
    for (i = 0; i < 1000; i++) {
        $("#deliver"+i).click(function () {
            var ref = $(this).val();
            var tick = String(ref);
    
            $.ajax({
                url: './php/deliver.php',
                type: 'post',
                data: {
                    'appticket': tick,
                    'save': 1
                },
                success: function (response) {
                    alert("It is Being Delivered");
                    window.location.href = window.location.href;
                }
            });
        });
    }
});
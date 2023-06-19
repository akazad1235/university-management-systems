<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>
<body>
        <p>test pdf gen</p>
        <div class="chart" id="chart-container" style="width: 500px; margin: 0 auto; border: 1px solid">
            <canvas id="myChart" style="width:100%; max-width:1080px"></canvas>
        </div>
{{--        <img src="https://image.shutterstock.com/image-photo/mountains-during-sunset-beautiful-natural-260nw-407021107.jpg" alt="">--}}
        <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [`Income`, `Personnel Expense`, `Operating Expense`],
                    datasets: [{
                        label: 'Estimate',
                        data: [13,24,225],
                        backgroundColor: "rgba(153,255,51,1)"
                    }, {
                        label: 'Actual',
                        data: [42,35,5543],
                        backgroundColor: "rgba(255,153,0,1)"
                    }]
                }
            });


            $("canvas").each(function() {
                let chartImage = document.getElementById('myChart').toDataURL();
                var dataURL = ($(this)[0]).toDataURL("image/png");
                var filename = $(this).parent().closest('.grafico').attr('myChart') + ".png";
                console.log(chartImage)
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     },
                     url: "{{route('pdf')}}",
                     type: "post",
                     data: {'chartImage':dataURL},
                     success: function (res) {
                         console.log(res);
                     },
                     error: function(error) {

                     }
                 })
            });
        </script>
</body>
</html>

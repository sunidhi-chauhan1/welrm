@extends('front.layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <!-- Other meta tags, title, or CSS stylesheets may be included here -->
    <!-- Include the datepicker library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css">
</head>
<body>
    <!-- Your HTML content goes here -->
    <!-- For example: -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Booking</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="dateRange">Select Date Range:</label>
                                <input type="text" name="dateRange" id="dateRange" class="form-control" />
                            </div>
                            <div class="check_box" id="check_in">
                                <div class="date_icons date_icons_1">
                                    <img src="./images/date-icon2.png" alt="" />
                                </div>
                                <span>Arriving date:</span>
                                <span id="arriving_date"></span>
                            </div>
                            <div class="check_box" id="check_out">
                                <div class="date_icons">
                                    <img src="./images/date-icon2.png" alt="" />
                                </div>
                                <span>Departure date:</span>
                                <span id="departure_date"></span>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery and datepicker scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.js"></script>
    <script>
        $(function() {
            $('#dateRange').datepicker({
                format: "d MM'yyyy dddd",
                todayHighlight: true,
                autoclose: true
            });

            $('#dateRange').on('changeDate', function() {
                const selectedDates = $('#dateRange').val().split(' to ');
                if (selectedDates.length === 2) {
                    const arrivingDate = new Date(selectedDates[0]);
                    const departureDate = new Date(selectedDates[1]);
                    $('#arriving_date').text(formatDate(arrivingDate));
                    $('#departure_date').text(formatDate(departureDate));
                }
            });

            function formatDate(date) {
                return date.toLocaleDateString('en-US', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
            }
        });
    </script>
</body>
</html>

@endsection

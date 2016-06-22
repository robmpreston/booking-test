<div ng-controller="BookingController" ng-init="find()">
    <p ng-if="!bookings.length">
        There are no bookings right now!
    </p>

    <div class="row">
        <div class="col-lg-6">
            <table class="table">
                <tr>
                    <th>Date</th>
                    <th>Event</th>
                    <th>Customer Name</th>

                </tr>
                <tr ng-repeat="booking in bookings">
                    <td>{{ booking.date }}</td>
                    <td>{{ booking.event.name }}</td>
                    <td>{{ booking.customer.name }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

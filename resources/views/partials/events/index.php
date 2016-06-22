<div ng-controller="EventController" ng-init="find()">
    <p ng-if="!events.length">
        There are no events right now!
    </p>

    <div class="row" ng-repeat="event in events">
        <div class="col-lg-6">
            <div class="input-group">
                <a ng-href="/event/{{ event.id }}"
            </div>
        </div>
    </div>
</div>

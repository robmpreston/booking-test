<div ng-controller="EventController" ng-init="findOne()">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h1>{{ event.name }}</h1>
            <p>{{ event.description }}</p>
            <p>Book:</p>
            <form name="bookForm" novalidate>
                <p class="input-group">
                    <input type="text" name="bookDate" class="form-control" uib-datepicker-popup="{{ datePicker.format }}" ng-model="bookDate"
                        is-open="datePicker.opened" datepicker-options="datePicker.options" ng-click="openDatePicker()" placeholder="Select Booking Date" required/>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default" ng-click="openDatePicker()"><i class="glyphicon glyphicon-calendar"></i></button>
                    </span>
                </p>
                <fieldset class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" ng-model="customer.name" required>
                    <div ng-messages="bookForm.name.$error" ng-if="bookForm.name.$dirty">
                        <p class="text-error" ng-message="required">This field is required</p>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <label for="age">Age</label>
                    <input type="number" name="age" class="form-control" id="age" ng-model="customer.age" required>
                    <div ng-messages="bookForm.age.$error" ng-if="bookForm.age.$dirty">
                        <p class="text-error" ng-message="required">This field is required</p>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" ng-model="customer.gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </fieldset>
                <fieldset class="form-group">
                    <label for="weight">Weight</label>
                    <input type="number" name="weight" class="form-control" id="weight" ng-model="customer.weight" required>
                    <div ng-messages="bookForm.weight.$error" ng-if="bookForm.weight.$dirty">
                        <p class="text-error" ng-message="required">This field is required</p>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <label for="weight">Chronic Health Problems</label>
                    <div class="checkbox" ng-repeat="problem in healthProblems">
                        <label>
                            <input type="checkbox" checklist-model="customer.health_problems" checklist-value="problem.name"> {{ problem.name }}
                        </label>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <button class="btn btn-primary" ng-disabled="!bookForm.$valid" ng-click="book()">Book it!</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

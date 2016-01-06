@extends('header')

@section('title') Dashboard @stop

@section('content')
<div class="row">
    <h1>Dashboard</h1>
    <div class="well">
        <p>Welcome <strong>{{$name}}</strong></p>
    </div>
    <div ng-controller="employeesController">

        <!-- Table-to-load-the-data Part -->
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Position</th>
                    <th><button id="btn-add" class="btn btn-success" ng-click="toggle('add', 0)">Add New Employee</button></th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="employee in employees">
                    <td><%= employee.id %></td>
                    <td ng-click="toggle('detail', employee.id)"><a href="javascript:void(0);"><%= employee.name %></a></td>
                    <td><%= employee.email %></td>
                    <td><%= employee.contact_number %></td>
                    <td><%= employee.position %></td>
                    <td>
                        <!-- <button class="btn btn-default btn-detail" ng-click="toggle('edit', employee.id)">Edit</button>
                        <button class="btn btn-danger btn-delete" ng-click="confirmDelete(employee.id)">Delete</button> -->
                        <button type="button" class="btn btn-info btn-sm" ng-click="toggle('edit', employee.id)"><span class="glyphicon glyphicon-edit"></span> Edit </button>
                        <button type="button" class="btn btn-danger btn-sm" ng-click="confirmDelete(employee.id)"><span class="glyphicon glyphicon-trash"></span> Delete </button>                            
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- End of Table-to-load-the-data Part -->
        <!-- Modal (Pop up when detail button clicked) -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel"><%=form_title%></h4>
                    </div>
                    <div class="modal-body">
                        <form name="frmEmployees" class="form-horizontal" novalidate="">

                            <div class="form-group error">
                                <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="<%=name%>" 
                                    ng-model="employee.name" ng-required="true">
                                    <span class="help-inline" 
                                    ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="<%=email%>" 
                                    ng-model="employee.email" ng-required="true">
                                    <span class="help-inline" 
                                    ng-show="frmEmployees.email.$invalid && frmEmployees.email.$touched">Valid Email field is required</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="<%=contact_number%>" 
                                    ng-model="employee.contact_number" ng-required="true">
                                    <span class="help-inline" 
                                    ng-show="frmEmployees.contact_number.$invalid && frmEmployees.contact_number.$touched">Contact number field is required</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="position" name="position" placeholder="Position" value="<%=position%>" 
                                    ng-model="employee.position" ng-required="true">
                                    <span class="help-inline" 
                                    ng-show="frmEmployees.position.$invalid && frmEmployees.position.$touched">Position field is required</span>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmEmployees.$invalid">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<script src="<?= asset('app/controllers/employees.js') ?>"></script>        
@stop
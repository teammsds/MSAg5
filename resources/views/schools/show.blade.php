  @extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">

          <div class="panel panel-default">
          <h3>School Details</h3>
            <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>School Name</td>
                <td><?php echo ($school['s_name']); ?></td>
            </tr>
            <tr>
                <td>School ID</td>
                <td><?php echo ($school['s_number']); ?></td>
            </tr>
            <tr>
                <td>Street Address</td>
                <td><?php echo ($school['s_street']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($school['s_city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($school['s_state']); ?></td>
            </tr>
            <tr>
                <td>Zip</td>
                <td><?php echo ($school['s_zip']); ?></td>
            </tr>
            <tr>
                <td>Primary Contact</td>
                <td><?php echo ($school['s_contact']); ?></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><?php echo ($school['s_email']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($school['s_phone']); ?></td>
            </tr>
            </tr>
            </tbody>
        </table>
         <div>
   <a href="{{url('/schools')}}" class="btn btn-primary">Back</a>
        </div>
              
</div>
</div>
</div>




@stop

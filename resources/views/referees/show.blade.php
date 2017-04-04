@extends('layouts.app')
@section('content')

    <div class="container">

        <h1 style="color:gainsboro">Referee Details</h1>
        <table class="table table-bordered table-hover">
            <tbody style="background-color: darkseagreen">
            <tr class="bg-info">
            <tr>
                <td>Referee Number</td>
                <td><?php echo ($referee['r_number']); ?></td>
            </tr>
            <tr>
                <td>Referee First Name</td>
                <td><?php echo ($referee['r_fname']); ?></td>
            </tr>
            <tr>
                <td>Referee Last Name</td>
                <td><?php echo ($referee['r_lname']); ?></td>
            </tr>
            <tr>
                <td>Referee Address</td>
                <td><?php echo ($referee['r_street']); ?></td>
                <td><?php echo ($referee['r_city']); ?></td>
                <td><?php echo ($referee['r_state']); ?></td>
                <td><?php echo ($referee['r_zip']); ?></td>
                <td><?php echo ($referee['r_email']); ?></td>
                <td><?php echo ($referee['r_phone']); ?></td>
            </tr>
            
            </tbody>
        </table>
    </div>



</div>
</div>
</div>


@stop

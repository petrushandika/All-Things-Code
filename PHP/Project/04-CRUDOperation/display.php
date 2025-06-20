<?php
include 'connect.php';

if (isset($_POST['displaySend'])) {
    $table = '<table class="table table-striped table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Sl No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Place</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>';

    $sql = "SELECT * FROM `crud`";
    $result = mysqli_query($con, $sql);
    $number = 1;

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $place = $row['place'];

        $table .= '<tr>
                        <td>' . $number . '</td>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $place . '</td>
                        <td>
                            <button class="btn btn-dark" onclick="GetUserDetails(' . $id . ')">Update</button>
                            <button class="btn btn-danger" onclick="DeleteUser(' . $id . ')">Delete</button>
                        </td>
                    </tr>';
        $number++;
    }

    $table .= '</tbody></table>';
    echo $table;
}
?>
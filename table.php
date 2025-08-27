<?php


$students = [
    [
        "name" => "ram ",
        "address" => "ram ",
        "phone" => "ram ",
        "email" => "ram "
    ],
    [
        "name" => "prabin ",
        "address" => "ram ",
        "phone" => "ram ",
        "email" => "ram "
    ],
    [
        "name" => "ram ",
        "address" => "ram ",
        "phone" => "ram ",
        "email" => "ram "
    ],
    [
        "name" => "ram ",
        "address" => "ram ",
        "phone" => "ram ",
        "email" => "ram "
    ],
    [
        "name" => "ram ",
        "address" => "ram ",
        "phone" => "ram ",
        "email" => "ram "
    ]
];
?>

<center>

    <table border="1">

        <tr>
            <th>
                name
            </th>

            <th>
                address
            </th>
            <th>
                phone
            </th>
            <th>
                email
            </th>
        </tr>

        <?php


        foreach ($students as $student) {

            echo "<tr>";
            echo "<td>" . $student["name"] . " </td>";
            echo "<td>" . $student["address"] . " </td>";
            echo "<td>" . $student["phone"] . " </td>";
            echo "<td>" . $student["address"] . " </td>";


            echo "</tr>";
        }

        ?>

    </table>
</center>
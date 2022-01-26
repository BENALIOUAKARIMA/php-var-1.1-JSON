<?php
$content = file_get_contents('list student.json');
$students= json_decode($content,true);

                  foreach($students as $student){
                        echo '<tr>
                        <td><img src="img/std.jpg" alt="photo" style="width: 70px;"></td>
                            <td>'.$student['name'].'</td>
                            <td>'.$student['email'].'</td>
                            <td>'.$student['phone'].'</td>
                            <td>'.$student['enroll_number'].'</td>
                            <td>'.$student['date_of_admission'].'</td>

                            <td>
                            <a href=""><i class="bi bi-trash" style="color: blue;"></i></a>
                            <a href=""><i class="bi bi-pencil" style="color: blue;"></i></a>


                            </td>
                    </tr>';
                    }
                   ?>
                       
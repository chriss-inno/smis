<?php
/**
 * Created by PhpStorm.
 * User: innocent.christopher
 * Date: 8/19/2015
 * Time: 10:54 AM
 */
$c=1;
if(count($elevels) > 0)
{
    foreach($elevels->grades as $g){

        echo '<tr>
                        <td>'.$c.'</td>
                        <td>'.$g->grade_name.'</td>
                        <td>'.$g->grade_from.'</td>
                        <td>'.$g->grade_to.'</td>
                        <td>'.$g->descriptions.'</td>
                        <td>'.$g->remarks.'</td>
                        <td>'.$g->status.'</td>
                         <td id="'.$g->id.'"></td>
                     </tr>';
        $c++;
    }
}
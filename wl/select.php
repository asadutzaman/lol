<?php  
//select.php  
if(isset($_POST["id"]))
{
 $output = '';
 $id=$_POST["id"];
 include 'operation.inc.php';
 $data = new USER();
     $values = $data->getById('tbl_employee',$id);

    
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';
    foreach($values as $row)
    {
     $output .= '
     <tr>  
            <td width="30%"><label>Name</label></td>  
            <td width="70%">'.$row["name"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Address</label></td>  
            <td width="70%">'.$row["address"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Gender</label></td>  
            <td width="70%">'.$row["gender"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Designation</label></td>  
            <td width="70%">'.$row["designation"].'</td>  
        </tr>
        <tr>  
            <td width="30%"><label>Age</label></td>  
            <td width="70%">'.$row["age"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
?>

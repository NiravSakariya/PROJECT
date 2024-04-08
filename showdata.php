    <table class="table">
        <thead>
            <tr>
                <th scope="col">St Id</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Gender</th>
                <th scope="col">Standard</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
                <th scope="col">Contact</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($show as $show1)
                {
                    ?>
            <tr>
                <th scope="row"><?php echo $show1["st_id"]; ?></th>
                <td><?php echo $show1["firstname"]; ?></td>
                <td><?php echo $show1["lastname"]; ?></td>
                <td><?php echo $show1["dateofbirth"]; ?></td>
                <td><?php echo $show1["gender"]; ?></td>
                <td><?php echo $show1["standard"]; ?></td>
                <td><?php echo $show1["emailid"]; ?></td>
                <td><img src="<?php echo $show1["image"]; ?>" class="img-fluid" style="height:80px; width:80px;"></td>
                <td><?php echo $show1["contact"]; ?></td>
                <td><a href="<?php echo $mainurl; ?>?deletid=<?php echo $show1["st_id"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to remove your Account?')"><i class="bi bi-trash3">Delet</i></a> | <a href="<?php echo $mainurl; ?>updatedetails=<?php echo $show1["st_id"]; ?>"><i class="bi bi-pencil-square">Update</i></a></td>
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
<style>

body{
    background-color: #fff;
    font-family: Arial;
}
#main-container{
    margin: 150px auto;
    width: 600px;
}
table
{
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
}
th,td {
    padding: 20px;

}
thead{
    background-color: #1d9e9a;
    border-bottom:  solid 6px #28d1d8;
    color: white;
}
tr:nth-child(even){
    background-color:#ddd;  
}
#add{

    position: absolute;
    top: 25em;
    left: 0em;
    right: 0px;
    width: 135px;
    height: 109px;
    opacity: 30;
    margin: 103px;
}
}

</style>
<body>
<div id="main-container">
    <table class="table table-light">
        <thead  class="table table-light">
         <tr>
            <th>#  </th>
            <th>FirstName </th>
            <th>LastName</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th></th>
            <th></th>
         </tr>  
        </thead>
        
        <tbody>
            <?php $__currentLoopData = $contactsIndex; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($loop ->iteration); ?></td>
            <td><?php echo e($index ->FirstName); ?></td>
                <td><?php echo e($index ->LastName); ?></td>
                <td><?php echo e($index ->Email); ?></td>
                <td><?php echo e($index ->ContactNumber); ?></td>
                <td>
                    
                    
                    <form method="POST" action="<?php echo e(url('/contacts/' .$index -> id)); ?>">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" onclick="return confirm('Are you sure?');">Borrar</button>
                    </form>
                    
                    
                </td>
            <td>    
                <form method="GET" action="<?php echo e(url('/contacts/' .$index ->id.'/edit')); ?>">
                   
                    <button type="submit" >Editar</button>
            </form>
          </td>
            </tr>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
    </table>
    <form method="GET" action="<?php echo e(url('/contacts/create')); ?>">
                   
        <button id="add" type="submit" >Add</button>
    </form>
    
</div>
</body><?php /**PATH C:\laragon\www\test\resources\views/Users/index.blade.php ENDPATH**/ ?>
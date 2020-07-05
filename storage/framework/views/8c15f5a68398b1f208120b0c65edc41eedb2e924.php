<style>
.btn
{
    border-radius: 3px;
    display: inline-block;
    padding: 20px 15px;
    text-shadow: 0 1px rgba(255,255,255,0.3);
    box-shadow: 0 1px 1px rgba(0,0,0,3);
}
.btn-green{
    color: white;
    background-color: #28d1d8;;

}
.btn-green:hover{
    background-color: #b3ffe1;;
}
.btn-greeen:active
{
    background-color: #1d9e9a; ;
}

form{
			background-color: white;
			border-radius: 3px;
			color: #999;
			font-size: 0.8em;
			padding: 20px;
			margin: 0 auto;
			width: 300px;
		}
        input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

        .field{
			border: solid 1px #ccc;
			padding: 10px;

			
		}

		.field:focus{
			border-color: #18A383;
		}

		.center-content{
			text-align: center;
		}

        body{
            background: #1d9e9a;
        }

</style>


<form action="<?php echo e(url('/contacts')); ?>" method="post" >
<?php echo e(csrf_field()); ?>

<label for="FirstName"><?php echo e('First Name'); ?></label>

<input required type="text" id="named" class="field" name="FirstName" placeholder="FirstName"/><br>

<label for="LastName"><?php echo e('Last Name'); ?></label>

<input required name="LastName" class="field" type="text" id="lastName" placeholder="LastName"/><br>

<label for="Email"><?php echo e("Email"); ?></label>

<input required name="Email" class="field" type="email" id="email" placeholder="Email"/><br>

<label for="ContactNumber"><?php echo e('ContactNumber'); ?></label>

<input required name="ContactNumber" class="field" type="number" id="number" placeholder="Phone"/><br><br>

<input type="submit" class="btn btn-green" id="send" value="Submit"/>

</form><?php /**PATH C:\laragon\www\test\resources\views/Users/create.blade.php ENDPATH**/ ?>
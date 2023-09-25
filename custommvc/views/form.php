<?php require_once 'header.php'; ?>
<script>
        $(document).ready(function() {
            // Implement jQuery validation here
            $("#form").validate({
                rules: {
                    name: {
                        required: true
                    },
                    instructor: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Please enter your name."
                    },
                    instructor: {
                        required: "Please enter your instructor."
                    },
                    description: {
                        required: "Please enter description."
                    },
                },
                submitHandler: function(form) {
                    // This function will be called when the form is valid
                    form.submit();
                }
            });
        });
    </script>
    <h1 class="main-title">Add New Course</h1>
	<div class="form-container">
	 <!-- Display server-side validation errors -->
        <?php if (isset($_SESSION['form_errors'])) { ?>
            <ul class="error-message">
                <?php foreach ($_SESSION['form_errors'] as $error) { ?>
                    <li><?php echo $error; ?></li>
                <?php } ?>
            </ul>
            <?php unset($_SESSION['form_errors']); ?>
        <?php } ?>
    <form action="index.php?action=submit" id="form" method="post" enctype="multipart/form-data">
		<table>
		<tr>
		<td><label for="name">Title:</label></td>
		<td><input type="text" name="name"></td>
		</tr>
		
		<tr>
		<td><label for="instructor">Instructor:</label></td>
		<td><input type="text" name="instructor"></td>
		</tr>
		
		<tr>
		<td><label for="description">Description:</label></td>
		<td><input type="text" name="description"></td>
		</tr>
		
		<tr>
		<td><label for="action">Action:</label></td>
		<td><input type="submit" value="Submit" id="submitForm"></td>
		</tr>
		</table> 
		 <p><a href="index.php?action=view">View All Courses</a></p>
    </form>
	</div>
<?php require_once 'footer.php'; ?>

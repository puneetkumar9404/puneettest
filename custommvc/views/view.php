<?php include 'header.php'; ?>
    <h1>View Courses Data</h1>
	<div class="main">
    <table class="view-data">
        <tr>
            <th>Title</th>
            <th>Instructor</th>
            <th>Description</th>
        </tr>
        <?php foreach ($formData as $data) { ?>
        <tr>
            <td><?php echo $data['title']; ?></td>
			<td><?php echo $data['instructor']; ?></td>
            <td><?php echo $data['description']; ?></td>
			
        </tr>
        <?php } ?>
    </table>
    <p><a href="index.php?action=showForm">Add New Course</a></p>
	</div>
</body>
</html>

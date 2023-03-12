<?php

include('includes/header.php');

?>

<h1 class="h3 mb-4 text-gray-800">Manage Quiz Page</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Questions</h6>
    </div>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>Question Text</tr>
                <tr>Category</tr>
                <tr>Option A</tr>
                <tr>Option B</tr>
                <tr>Option C</tr>
                <tr>Option D</tr>
                <tr>Correct Option </tr>
            </thead>

        </table>
    </div>

</div>

<?php
include('includes/footer.php')

    ?>
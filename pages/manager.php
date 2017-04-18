<?php require_once "../functions/Score.class.php"; ?>
<div class="container" style="padding-top: 2em">
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
        <?php $xml=simplexml_load_file("../api/data.xml"); ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <strong>Holy guacamole!</strong>
            You have orders that need to be reviewed ...
        </div>
    <?php endif; ?>

    <h3>Place an XML file in the api folder of the project directory.</h3>
    <p>Create an XML file with email:string, zip:int and order:int variable. Then refresh this page.</p>
    <?php if (!file_exists("../api/data.xml")) {
        echo "<strong>File does not exists</strong>. Place an XML file in the api 
        folder of the project directory.";
    } else {
        echo '<form action="'. $PHP_SELF .'" method="post">
                <button type="submit" value="manage" class="btn btn-primary">Load data from mock API...</button>
            </form>';
    }
    ?>
    <hr>
    <table class="table table-hover table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Zip Codee</th>
            <th>orders</th>
            <th>Fraud Score</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : ?>
            <!-- Generate table -->
            <?php $tr = new Score($xml); echo $tr->returnData(); ?>
        <?php endif; ?>

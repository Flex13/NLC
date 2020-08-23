<?php
$page_title = 'Solutions';
include('includes/header.php') ?>
<?php include('includes/nav.php') ?>

<div id="solutions"></div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var page = "<?php if ($_GET['m']) echo $_GET['m'] ?>";



        if (page == "afterSales") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/afterSales.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "bi") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/bi.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "industrial") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/industrial.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "plc") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/plc.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "processControl") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/processControl.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "optimisation") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/processOptimisation.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "substation") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/substation.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "cyberSercurity") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/cyberSercurity.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "iot") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/iot.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        } else if (page == "AI") {
            $.ajax({
                type: "GET",
                url: "ajax/solutions/AI.php",
            }).done(function(data) {
                $("#solutions").html(data);
            });
        }






    });
</script>


<?php include('includes/footer.php') ?>
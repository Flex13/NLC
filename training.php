<?php 
$page_title = 'Training';
include('includes/header.php') ?>
<?php include('includes/nav.php') ?>

<div id="training"></div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var page = "<?php if ($_GET['m']) echo $_GET['m'] ?>";



        if (page == "courses") {
            $.ajax({
                type: "GET",
                url: "ajax/training/courses.php",
            }).done(function(data) {
                $("#training").html(data);
            });
        }  else if (page == "equipment") {
            $.ajax({
                type: "GET",
                url: "ajax/training/equipment.php",
            }).done(function(data) {
                $("#training").html(data);
            });
        }






    });
</script>


<?php include('includes/footer.php') ?>
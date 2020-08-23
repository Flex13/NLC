<?php 
$page_title = 'Partners';
include('includes/header.php') ?>
<?php include('includes/nav.php') ?>

<div id="partners"></div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var page = "<?php if ($_GET['m']) echo $_GET['m'] ?>";



        if (page == "partners") {
            $.ajax({
                type: "GET",
                url: "ajax/partners/partners.php",
            }).done(function(data) {
                $("#partners").html(data);
            });
        }
    });
</script>


<?php include('includes/footer.php') ?>
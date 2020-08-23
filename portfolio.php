<?php 
$page_title = 'Portfolio';
include('includes/header.php') ?>
<?php include('includes/nav.php') ?>

<div id="portfolio"></div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var page = "<?php if ($_GET['m']) echo $_GET['m'] ?>";



        if (page == "portfolio") {
            $.ajax({
                type: "GET",
                url: "ajax/portfolio/portfolio.php",
            }).done(function(data) {
                $("#portfolio").html(data);
            });
        }
    });
</script>


<?php include('includes/footer.php') ?>
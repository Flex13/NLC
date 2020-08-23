<?php 
$page_title = 'Contact';
include('includes/header.php') ?>
<?php include('includes/nav.php') ?>


<div id="contact"></div>

<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        var page = "<?php if ($_GET['m']) echo $_GET['m'] ?>";



        if (page == "contact") {
            $.ajax({
                type: "POST",
                url: "ajax/contact/contact.php",
            }).done(function(data) {
                $("#contact").html(data);
            });
        }
    });
</script>



<?php include('includes/footer.php') ?>
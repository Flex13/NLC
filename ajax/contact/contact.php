<!-- Hero Slider -->
<section class="hero bg-cover bg-position py-4" style="background: url(img/contact.jpg); height: 70vh;">
    <div class="container py-5 index-forward text-white" style="margin-top: 100px;">
        <h1>Contact Us</h1>
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-none mb-0 p-0">
                <li class="breadcrumb-item pl-0"><a href="index.php"> <i class="fas fa-home mr-2"></i>Home</a></li>
                <li class="breadcrumb-item text-light" aria-current="page">Contact us</li>
            </ol>
        </nav>
    </div>
</section>


<section class="py-5 shadow-sm index-forward">
    <div class="container py-5">
        <header>
            <h2>Request a <span style="color: #003A78">Call </span>Back</h2>
        </header>
        <div class="row">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="pt-1" style="background-color: #003A78;">
                    <div class="p-4 p-lg-5 bg-white shadow-sm">
                        <form id="contact_form">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="First name" required>
                                    <div class="name-error error"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="text" id="surname" name="surname" placeholder="Last name" required>
                                    <div class="surname-error error"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="tel" id="cell" name="cell" placeholder="Phone number" required>
                                    <div class="cell-error error"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input class="form-control" type="text" id="subject" name="subject" placeholder="Subject" required>
                                    <div class="subject-error error"></div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email address" required>
                                    <div class="email-error error"></div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Leave your message"></textarea>
                                    <div class="message-error error"></div>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button class="btn btn-sm" style="background-color: #003A78; color: #FDB810" type="button" id="submit">Submit now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h3>Have a quesion?</h3>
                <p class="text-muted mb-5">If you got any questions please do not hesitate to send us a message.</p>
                <ul class="list-unstyled">
                    <li class="d-flex mb-3">
                        <div class="icon" style="background-color: #003A78; color: #FDB810"><i class="fas fa-envelope text-white fa-fw"></i></div>
                        <div class="ml-3">
                            <h5 class="mb-0">Email</h5>
                            <p class="text-muted text-small">info@anotium.co.za</p>
                        </div>
                    </li>
                    <li class="d-flex mb-3">
                        <div class="icon" style="background-color: #003A78; color: #FDB810"><i class="fas fa-mobile text-white fa-fw"></i></div>
                        <div class="ml-3">
                            <h5 class="mb-0">Phone</h5>
                            <p class="text-muted text-small">073 827 0192</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>



<script type="text/javascript" language="javascript">
    $(document).ready(function() {
                var name = "";
                var surname = "";
                var email = "";
                var cell = "";
                var subject = "";
                var subject_reg = /^[A-Za-z0-9 ]+$/i;
                var cell_reg = /^[0-9]+$/i;
                var name_reg = /^[A-Za-z ]+$/i;


                $("#name").focusout(function() {
                    var name_store = $.trim($("#name").val());
                    if (name_store.length == "") {
                        $(".name-error").html("Name is required!");
                        $("#name").addClass("border-red");
                        $("#name").removeClass("border-green");
                        name = "";
                    } else if (name_reg.test(name_store)) {
                        $(".name-error").html("");
                        $("#name").addClass("border-green");
                        $("#name").removeClass("border-red");
                        name = name_store;
                    } else {
                        $(".name-error").html("Invalid Name Format!");
                        $("#name").addClass("border-red");
                        $("#name").removeClass("border-green");
                        name = "";
                    }

                }) //Username Validations

                $("#surname").focusout(function() {
                    var surname_store = $.trim($("#surname").val());
                    if (surname_store.length == "") {
                        $(".surname-error").html("Surname is required!");
                        $("#surname").addClass("border-red");
                        $("#surname").removeClass("border-green");
                        surname = "";
                    } else if (name_reg.test(surname_store)) {
                        $(".surname-error").html("");
                        $("#surname").addClass("border-green");
                        $("#surname").removeClass("border-red");
                        surname = surname_store;
                    } else {
                        $(".surname-error").html("Invalid Surname Format!");
                        $("#surname").addClass("border-red");
                        $("#surname").removeClass("border-green");
                        surname = "";
                    }

                }) //Username Validations

                $("#email").focusout(function() {
                    var email_store = $.trim($("#email").val());
                    if (email_store.length == "") {
                        $("#email").addClass("border-red");
                        $("#email").removeClass("border-green");
                        $(".email-error").html("Email is required!");
                        email = "";
                    } else {
                        $("#email").addClass("border-green");
                        $("#email").removeClass("border-red");
                        $(".email-error").html("");
                        email = email_store;
                    }
                }) //close email validations

                // === Shop Cell Validations === 
                $("#subject").focusout(function() {
                    var subject_store = $.trim($("#subject").val());
                    if (subject_store.length == "") {
                        $(".subject-error").html("Subject is required!");
                        $("#subject").addClass("border-red");
                        $("#subject").removeClass("border-green");
                        subject = "";
                    } else if (subject_reg.test(subject_store)) {
                        $(".subject-error").html("");
                        $("#subject").addClass("border-green");
                        $("#subject").removeClass("border-red");
                        subject = subject_store;
                    } else {
                        $(".subject-error").html("Wrong subject format!");
                        $("#subject").addClass("border-red");
                        $("#subject").removeClass("border-green");
                        subject = "";
                    }

                }) //kasi Name Validations

                // === Shop Cell Validations === 
                $("#cell").focusout(function() {
                    var cell_store = $.trim($("#cell").val());
                    if (cell_store.length == "") {
                        $(".cell-error").html("Cell is required!");
                        $("#cell").addClass("border-red");
                        $("#cell").removeClass("border-green");
                        cell = "";
                    } else if (cell_reg.test(cell_store)) {
                        $(".cell-error").html("");
                        $("#cell").addClass("border-green");
                        $("#cell").removeClass("border-red");
                        cell = cell_store;
                    } else {
                        $(".cell-error").html("Wrong Cell format!");
                        $("#cell").addClass("border-red");
                        $("#cell").removeClass("border-green");
                        cell = "";
                    }

                }) //kasi Name Validations// === Shop Cell Validations === 
                $("#message").focusout(function() {
                    var message_store = $.trim($("#message").val());
                    if (message_store.length == "") {
                        $(".message-error").html("Message is required!");
                        $("#message").addClass("border-red");
                        $("#message").removeClass("border-green");
                        message = "";
                    } else if (subject_reg.test(message_store)) {
                        $(".message-error").html("");
                        $("#message").addClass("border-green");
                        $("#message").removeClass("border-red");
                        message = message_store;
                    } else {
                        $(".message-error").html("Wrong Messsage format!");
                        $("#message").addClass("border-red");
                        $("#message").removeClass("border-green");
                        message = "";
                    }

                }) //kasi Name Validations



                $("#submit").click(function(event) {
                        // Stop form from submitting normally
                        event.preventDefault();

                        if (name.length == "") {
                            $(".name-error").html("Name is required!");
                            $("#name").addClass("border-red");
                            $("#name").removeClass("border-green");
                            name = "";
                        }

                        if (surname.length == "") {
                            $(".surname-error").html("Surname is required!");
                            $("#surname").addClass("border-red");
                            $("#surname").removeClass("border-green");
                            surname = "";
                        }

                        if (email.length == "") {
                            $(".email-error").html("Email is required!");
                            $("#email").addClass("border-red");
                            $("#email").removeClass("border-green");
                            email = "";
                        }

                        if (cell.length == "") {
                            $(".cell-error").html("Cell is required!");
                            $("#cell").addClass("border-red");
                            $("#cell").removeClass("border-green");
                            cell = "";
                        }

                        if (message.length == "") {
                            $(".message-error").html("Message is required!");
                            $("#message").addClass("border-red");
                            $("#message").removeClass("border-green");
                            message = "";
                        }

                        if (subject.length == "") {
                            $(".subject-error").html("Subject is required!");
                            $("#subject").addClass("border-red");
                            $("#subject").removeClass("border-green");
                            subject = "";
                        }

                        if (name.length != "" && surname.length != "" && email.length != "" && cell.length != "" && message.length != "") {
                            $.ajax({
                                type: 'POST',
                                url: 'ajax/contact/api/contact.php?contact=true',
                                data: $("#contact_form").serialize(),
                                dataType: 'JSON',
                                success: function(feedback) {
                                    if (feedback['status'] == '1') {
                                        Swal.fire({
                                            title: 'Message Sent',
                                            icon: 'success',
                                            showConfirmButton: false,
                                        });
                                    }
                                }
                            })
                        }
                    })
                });
</script>
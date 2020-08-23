    <!-- navbar-->
    <header class="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 py-2 text-center text-lg-left">
                        <a class="navbar-brand" href="index"><img src="img/logo.png" alt="" width="200"></a>
                    </div>
                    <div class="col-lg-4 py-2 text-center my-auto">
                        <p class="btn btn-sm" style="background-color: #003A78; color: #FDB810">Electrical, Control, Instrumentation Engineering and Consulting services</p>
                    </div>
                    <div class="col-lg-4 py-2 text-center my-auto">
                        <div class="row">
                            <div class="col-12 py-2">
                                <a href="mailto:info@anotium.co.za" style="color: #003A78;">info@anotium.co.za</a>
                            </div>
                            <div class="col-12">
                                <a href="tel:0738270192" style="color: #003A78;">073 827 0192</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2 <?php if ($page_title == 'Home') {
                                                        echo "active";
                                                    } ?>"><a class="nav-link text-uppercase" href="index.php">Home </a></li>
                        <li class="nav-item ml-2 dropdown <?php if ($page_title == 'Solutions') {
                                                                echo "active";
                                                            } ?>">
                            <a class="nav-link text-uppercase dropdown-toggle pr-0" id="solutionsLink" href="solutions.php?m=plc" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions</a>
                            <div class="dropdown-menu mt-lg-4" aria-labelledby="solutionsLink">
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=plc">PLC and MCC Panel</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=processControl">Process Control System Design</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=substation">Substation Automation & Protection</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=bi">Business Intelligence Systems</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=industrial">Industrial Networks</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=optimisation">Process Optimisation</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=afterSales">After Sales Report</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=iot">IOT</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=cyberSercurity">Industrial Cybersecurity</a>
                                <a class="dropdown-item font-weight-bold text-small" href="solutions.php?m=AI">Machine Learning in manufacturing</a>

                            </div>
                        </li>
                        <li class="nav-item ml-2 dropdown <?php if ($page_title == 'Training') {
                                                                echo "active";
                                                            } ?>">
                            <a class="nav-link text-uppercase dropdown-toggle pr-0" id="navbarDropdownMenuLink" href="training.php?m=courses" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Training</a>
                            <div class="dropdown-menu mt-lg-4" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item font-weight-bold text-small" href="training.php?m=courses">Training Courses</a>
                                <a class="dropdown-item font-weight-bold text-small" href="training.php?m=equipment">Training Equipment</a>
                            </div>
                        </li>
                        <li class="nav-item mx-2 <?php if ($page_title == 'Portfolio') {
                                                        echo "active";
                                                    } ?>"><a class="nav-link text-uppercase" href="portfolio.php?m=portfolio">Portfolio</a></li>
                        <li class="nav-item mx-2 <?php if ($page_title == 'Partners') {
                                                        echo "active";
                                                    } ?>"><a class="nav-link text-uppercase" href="partners.php?m=partners">Our Partners</a></li>
                        <li class="nav-item mx-2 <?php if ($page_title == 'Contact') {
                                                        echo "active";
                                                    } ?>"><a class="nav-link text-uppercase" href="contact.php?m=contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
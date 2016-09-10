<?php
        include("lib/components.php");
        pageOpening("About","About");
        
?>
 

<?php

?>
    <main class="mdl-layout__content">
        <div class="mdl-grid portfolio-max-width">
<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
    <div class="mdl-grid portfolio-copy">
        <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
            Hello, My name is Ian Shinbrot. I am currently a Senior at Drexel University pursuing a Computer Science degree with a concentration in both Software Engineering and Human Computer Interaction in the Drexel 5 year 3 Co-op program. I have a heavy passion for programming and I am very detail oriented.
            <br>
            <br>
            I have completed three different co-ops, 6-month internships while at Drexel University. My first co-op was at Independence Blue Cross, while my second and third co-op were both at NextDocs, which was acquired by Aurea during my third co-op.
            Please click one of the below links to learn more information.
        </div>
    </div>
</div>
<div>
    <div class="mdl-grid">
        <div class="mdl-cell--6-col">
            <div class="mdl-card mdl-shadow--4dp portfolio-card">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Drexel</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    I am currently a Senior at Drexel University and have participated in many organizations there. Please click below for more information.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect DrexelExperience">
                        More Info
                    </a>
                </div>
            </div>
        </div>
        <div class="mdl-cell mdl-cell--4-col">
            <div class="mdl-card mdl-shadow--4dp portfolio-card">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">TA Schedule</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    I am currently a Teaching Assistant for CS 172. Please click the link below to see my schedule.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect TASchedule">
                        TA Schedule Spring 2016
                    </a>
                </div>
            </div>
        </div>
        <div class="mdl-cell--6-col">
            <div class="mdl-card mdl-shadow--4dp portfolio-card">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Work Experience</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    I have worked at many companies throughout the years. Click to see more information.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect workExperience">
                        More Info
                    </a>
                </div>
            </div>
        </div>

            <dialog class="mdl-dialog aboutDialog">
                <div class="mdl-dialog__content">
                        <button type="button" class="mdl-button close closeDialog">X</button>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Drexel Experience</h2>
                    </div>
                        I have been a Peer Mentor/Student Ambassador for the College of Computing Informatics since Fall 2012, as well as a Teachers Assistant for the Department of Computer Science.
                        <br>
                        <br>
                        I have been a Teaching Assistant for CS 161, Introduction to Computing, CS 164, Introduction to Computer Science, CS 171 Programming I, CS 172 Programming II, CS 175 Programming I & II, and CS 275, Web and Mobile Application Development. As a teaching assistant I help students learn about the different aspects of computer science and programming. The classes that I help with cover the following languages: C++, JAVA Android, Javascript, and HTML.
                        <br>
                        <br>
                        As a Peer Mentor I work with the College of Computing Informatics to help prospective student

                </div>

            </dialog>
            <script>
                var dialog = document.querySelectorAll('dialog')[0];
                var showModalButton = document.querySelector('.DrexelExperience');
                if (! dialog.showModal) {
                    dialogPolyfill.registerDialog(dialog);
                }
                showModalButton.addEventListener('click', function() {
                    dialog.showModal();
                });
                dialog.querySelector('.close').addEventListener('click', function() {
                    dialog.close();
                });
            </script>


            <dialog class="mdl-dialog aboutDialog">
                <div class="mdl-dialog__content">
                    <button type="button" class="mdl-button close closeDialog">X</button>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">TA Schedule Spring 2016</h2>
                    </div>
                    <p><b>Office Hours:</b> Tuesday 4PM-46PM <br>
                        <b>Lab:</b> Wednesday 1PM-3PM<br>
                        <b>Lab:</b> Wednesday 3PM-5PM<br>
                        <b>Lab:</b> Friday 11PM-1PM
                        <br>
                </div>
            </dialog>
            <script>
                var dialog2 = document.querySelectorAll('dialog')[1];
                var showModalButton = document.querySelector('.TASchedule');
                if (! dialog2.showModal) {
                    dialogPolyfill.registerDialog(dialog2);
                }
                showModalButton.addEventListener('click', function() {
                    dialog2.showModal();
                });
                dialog2.querySelector('.close').addEventListener('click', function() {
                    dialog2.close();
                });
            </script>
            <dialog class="mdl-dialog aboutDialog">
                <div class="mdl-dialog__content">
                    <button type="button" class="mdl-button close closeDialog">X</button>
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Work Experience</h2>
                    </div>
			 <h4>NextDocs</h4>
                        I worked  at NextDocs for two of my co-ops, between March-September 2014-2015. NextDocs was acquired by Aurea during my third co-op in June 2015.
                        At NextDocs I worked on the NextDocs Suite of Applications consisting of the Regulatory, SOP, and eTMF platforms. I was able to quickly learn C#, SQL, and improve my Javascript skills there. as well as my scripting skills.

                        <h4>Independence Blue Cross</h4>
                        I worked at Independence Blue Cross for 6 months where I performed manual testing of their mobile IBX application, used Adobe Photoshop to design Drug Labels to be used in the application, as well as initiate the move toward automated testing using a program called SeeTest.
                        <br>
                </div>
            </dialog>
            <script>
                var dialog3 = document.querySelectorAll('dialog')[2];
                var showModalButton = document.querySelector('.workExperience');
                if (! dialog3.showModal) {
                    dialogPolyfill.registerDialog(dialog3);
                }
                showModalButton.addEventListener('click', function() {
                    dialog3.showModal();
                });
                dialog3.querySelector('.close').addEventListener('click', function() {
                    dialog3.close();
                });
            </script>
            <br>

            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Projects</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        I have created various projects throughout the years. More info can be found by clicking the link.
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="Projects.php">Projects</a>
                        </a>
                    </div>
                </div>
            </div>
    </div>
            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-card mdl-shadow--4dp portfolio-card">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Resume</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        Please check out my resume
                    </div>
                    <div class="mdl-card__actions mdl-card--border">
                        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="ianShinbrot_resume.pdf">Resume</a>
                    </div>
                </div>
            </div>

</div>
            </div>
            </main>
<?php

printFooter("About");
?>

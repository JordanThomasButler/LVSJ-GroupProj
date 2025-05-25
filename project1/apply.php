    <!-- Header and Menu Section -->
    <?php
    $pageTitle = "Application Page";
    $headerTitle = "Application Page";
    $bodyClass = "application-page";
    include 'header.inc'; 
    ?>
<div class="application-background">
    <div class="form-section">
        <form action="process_eoi.php" method="post" autocomplete="off">
            <fieldset class="form-details">
                <legend>Details</legend>
                <label for="job-reference-number" class="bold-label">Job Reference Number</label>
                <select id="job-reference-number" name="job-reference-number" class="cursor-pointer" required>
                    <option value="">Please Select</option>
                    <option value="Software Developer">G01-123</option>
                    <option value="Network Administrator">G02-123</option>
                    <option value="Data Analyst">G03-123</option>
                    <option value="Cybersecurity Specialist">G04-123</option>
                </select>
                <label for="first-name" class="bold-label">First Name</label>
                <input type="text" id="first-name" name="first-name" class="input-focus" required pattern="[A-Za-z]{3,20}" placeholder="First Name">
                <label for="last-name" class="bold-label">Last Name</label>
                <input type="text" id="last-name" name="last-name" class="input-focus" required pattern="[A-Za-z -]{3,20}" placeholder="Last Name">
                <label for="date-of-birth" class="bold-label">Date of Birth</label>
                <input type="date" id="date-of-birth" name="date" placeholder="dd/mm/yyyy">
            </fieldset>

            <fieldset class="form-gender">
                <legend>Gender</legend>
                <input type="radio" id="male" name="gender" value="male" class="input-focus" required>
                <label for="male" class="bold-label cursor-pointer">Male</label>
                <input type="radio" id="female" name="gender" value="female"class="input-focus" >
                <label for="female" class="bold-label cursor-pointer">Female</label>
                <input type="radio" id="other" name="gender" value="other"class="input-focus" >
                <label for="other" class="bold-label cursor-pointer">Other</label>

            </fieldset>
            
            <fieldset class="form-address">
                <legend>Address</legend>
                <label for="street-address" class="bold-label">Street Address</label>
                <input type="text" id="street-address" name="street-address" class="input-focus" required pattern="[A-Za-z0-9 ]{1,40}" placeholder="Your Street Address">
                <label for="suburb-or-town" class="bold-label">Suburb/Town</label>
                <input type="text" id="suburb-or-town" name="suburb-or-town" class="input-focus" required pattern="[A-Za-z]{1,40}" placeholder="Suburb or Town">
                <label for="state" class="bold-label">State</label>
                <select id="state" name="state" class="cursor-pointer" required>
                    <option value="">Choose Option</option>
                    <option value="VIC">VIC</option>
                    <option value="NSW">NSW</option>
                    <option value="QLD">QLD</option>
                    <option value="NT">NT</option>
                    <option value="WA">WA</option>
                    <option value="SA">SA</option>
                    <option value="TAS">TAS</option>
                    <option value="ACT">ACT</option>
                </select>
                <label for="postcode" class="bold-label">Postcode</label>
                <input type="text" name="postcode" id="postcode" class="input-focus" required pattern="(0[2-9][0-9]{2}|[1-8][0-9]{3}|9[0-8][0-9]{2}|99[0-3][0-9]|994[0-4])" placeholder="0000">
            </fieldset>
            
            <fieldset class="form-contact-info">
                <legend>Contact Information</legend>
                <label for="email-address" class="bold-label">Email Address</label>
                <input type="email" id="email-address" name="email-address" class="input-focus" required placeholder="johndoe@gmail.com">
                <label for="phone-number" class="bold-label">Phone Number</label>
                <input type="text" name="phone-number" id="phone-number" class="input-focus" required pattern="\d{8,12}" placeholder="04 123 45678">
            </fieldset>

            <fieldset class="form-skills">
                <legend>Relevant Skills</legend>
                <div class="required-skills-list">
                    <?php
                    require_once 'settings.php';
                    $conn = mysqli_connect($host, $user, $pwd, $sql_db);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $selected_reference = isset($_GET['job-reference-number']) ? $_GET['job-reference-number'] : '';
                    ?>
                    

                    <?php if ($selected_reference === "Software Developer"): ?>
                        <div class="required-skills-checklist">
                            <ul>
                                <li>
                                    <input type="checkbox" id="g01-exp" name="g01-exp" value="5+ years of experience in software development">
                                    <label for="g01-exp">5+ years of experience in software development</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g01-languages" name="g01-languages" value="Proficiency in Java, Python or C#">
                                    <label for="g01-languages">Proficiency in Java, Python or C#</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g01-problem-solving" name="g01-problem-solving" value="Strong problem solving skills">
                                    <label for="g01-problem-solving">Strong problem solving skills</label>
                                </li>
                            </ul>
                        </div>
                    <?php elseif ($selected_reference === "Network Administrator"): ?>
                        <div class="required-skills-checklist">
                            <ul>
                                <li>
                                    <input type="checkbox" id="g02-exp" name="g02-exp" value="3+ years of experience in network administration">
                                    <label for="g02-exp">3+ years of experience in network administration</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g02-protocols" name="g02-protocols" value="Proficiency with networking protocols (TCP/IP, DNS, DHCP)">
                                    <label for="g02-protocols">Proficiency with networking protocols (TCP/IP, DNS, DHCP)</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g02-firewalls" name="g02-firewalls" value="Strong knowledge of firewalls and VPNs">
                                    <label for="g02-firewalls">Strong knowledge of firewalls and VPNs</label>
                                </li>
                            </ul>
                        </div>
                    <?php elseif ($selected_reference === "Data Analyst"): ?>
                        <div class="required-skills-checklist">
                            <ul>
                                <li>
                                    <input type="checkbox" id="g03-exp" name="g03-exp" value="3+ years of experience in data analysis">
                                    <label for="g03-exp">3+ years of experience in data analysis</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g03-tools" name="g03-tools" value="Proficiency with data analysis tools (Excel, SQL, R, Python)">
                                    <label for="g03-tools">Proficiency with data analysis tools (Excel, SQL, R, Python)</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g03-analytical" name="g03-analytical" value="Strong analytical and problem-solving skills">
                                    <label for="g03-analytical">Strong analytical and problem-solving skills</label>
                                </li>
                            </ul>
                        </div>
                    <?php elseif ($selected_reference === "Cybersecurity Specialist"): ?>
                        <div class="required-skills-checklist">
                            <ul>
                                <li>
                                    <input type="checkbox" id="g04-exp" name="g04-exp" value="5+ years of experience in cybersecurity">
                                    <label for="g04-exp">5+ years of experience in cybersecurity</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g04-security" name="g04-security" value="Proficiency in security technologies (firewalls, IDS/IPS, encryption)">
                                    <label for="g04-security">Proficiency in security technologies (firewalls, IDS/IPS, encryption)</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="g04-threats" name="g04-threats" value="Strong knowledge of cybersecurity threats and countermeasures">
                                    <label for="g04-threats">Strong knowledge of cybersecurity threats and countermeasures</label>
                                </li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <h1>Please select a Job Position</h1>
                    <?php endif; ?>
                </div>

                <div id="divider"></div>
                
                <label for="other-skills" id="other-skills-lable" class="bold-label">Other Skills</label>
                <br>
                <textarea class="other-skills" id="other-skills" name="other-skills" aria-labelledby="other-skills-lable"></textarea>
            </fieldset>

            <input type="submit" value="Apply" class="application-page-button">
            <input type="reset" class="application-page-button">
        </form>
    </div>
</div>

    <?php
    include 'footer.inc';
    ?>

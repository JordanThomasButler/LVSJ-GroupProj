    <!-- Header and Menu Section -->
    <?php
    $pageTitle = "Application Page";
    $headerTitle = "Application Page";
    $bodyClass = "application-page";
    include 'header.inc'; 
    ?>
<div class="application-background">
    <div class="form-section">
        <form action="process_eoi.php" method="post">
            <fieldset class="form-details">
                <legend>Details</legend>
                <label for="job-reference-number">Job Reference Number</label>
                <select id="job-reference-number" name="job-reference-number" required>
                    <option value="">Please Select</option>
                    <option value="Software Developer">G01-123</option>
                    <option value="Network Administrator">G02-123</option>
                    <option value="Data Analyst">G03-123</option>
                    <option value="Cybersecurity Specialist">G04-123</option>
                </select>
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" required pattern="[A-Za-z]{3,20}" placeholder="First Name">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" required pattern="[A-Za-z -]{3,20}" placeholder="Last Name">
                <label for="date-of-birth">Date of Birth</label>
                <input type="date" id="date-of-birth" name="date" placeholder="dd/mm/yyyy">
            </fieldset>

            <fieldset class="form-gender">
                <legend>Gender</legend>
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>

            </fieldset>
            
            <fieldset class="form-address">
                <legend>Address</legend>
                <label for="street-address">Street Address</label>
                <input type="text" id="street-address" name="street-address" required pattern="[A-Za-z0-9 ]{1,40}" placeholder="Your Street Address">
                <label for="suburb-or-town">Suburb/Town</label>
                <input type="text" id="suburb-or-town" name="suburb-or-town" required pattern="[A-Za-z]{1,40}" placeholder="Suburb or Town">
                <label for="state">State</label>
                <select id="state" name="state" required>
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
                <label for="postcode">Postcode</label>
                <input type="text" name="postcode" id="postcode" required pattern="(0[2-9][0-9]{2}|[1-8][0-9]{3}|9[0-8][0-9]{2}|99[0-3][0-9]|994[0-4])" placeholder="0000">
            </fieldset>
            
            <fieldset class="form-contact-info">
                <legend>Contact Information</legend>
                <label for="email-address">Email Address</label>
                <input type="email" id="email-address" name="email-address" required placeholder="johndoe@gmail.com">
                <label for="phone-number">Phone Number</label>
                <input type="text" name="phone-number" id="phone-number" required pattern="{8,12}" placeholder="04 123 45678">
            </fieldset>

            <fieldset class="form-skills">
                <legend>Relevant Skills</legend>

                <table class="skills-table">
                    <caption>Required Skills</caption>
                    
                    <thead>
                        <tr>
                            <th class="skills-table-header">G01-123 : Software Developer</th>
                            <th class="skills-table-header">G02-123 : Network Administrator</th>
                            <th class="skills-table-header">G03-123 : Data Analyst</th>
                            <th class="skills-table-header">G04-123 : Cybersecurity Specialist</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="skills-table-data">
                                <div class="checklist G01-123">
                                    <input type="checkbox" id="g01-exp" name="g01-exp" value="5+ years of experience in software development">
                                    <label for="g01-exp">5+ years of experience in software development</label><br>
                                
                                    <input type="checkbox" id="g01-languages" name="g01-languages" value="Proficiency in Java, Python or C#">
                                    <label for="g01-languages">Proficiency in Java, Python or C#</label><br>
                                
                                    <input type="checkbox" id="g01-problem-solving" name="g01-problem-solving" value="Strong problem solving skills">
                                    <label for="g01-problem-solving">Strong problem solving skills</label>
                                </div>
                            </td>
                            <td class="skills-table-data">
                                <div class="checklist G02-123">
                                    <input type="checkbox" id="g02-exp" name="g02-exp" value="3+ years of experience in network administration">
                                    <label for="g02-exp">3+ years of experience in network administration</label><br>
                                
                                    <input type="checkbox" id="g02-protocols" name="g02-protocols" value="Proficiency with networking protocols (TCP/IP, DNS, DHCP)">
                                    <label for="g02-protocols">Proficiency with networking protocols (TCP/IP, DNS, DHCP)</label><br>
                                
                                    <input type="checkbox" id="g02-firewalls" name="g02-firewalls" value="Strong knowledge of firewalls and VPNs">
                                    <label for="g02-firewalls">Strong knowledge of firewalls and VPNs</label>
                                </div>
                            </td>
                            <td class="skills-table-data">
                                <div class="checklist G03-123">
                                    <input type="checkbox" id="g03-exp" name="g03-exp" value="3+ years of experience in data analysis">
                                    <label for="g03-exp">3+ years of experience in data analysis</label><br>
                                
                                    <input type="checkbox" id="g03-tools" name="g03-tools" value="Proficiency with data analysis tools (Excel, SQL, R, Python)">
                                    <label for="g03-tools">Proficiency with data analysis tools (Excel, SQL, R, Python)</label><br>
                                
                                    <input type="checkbox" id="g03-analytical" name="g03-analytical" value="Strong analytical and problem-solving skills">
                                    <label for="g03-analytical">Strong analytical and problem-solving skills</label>
                                </div>
                            </td>
                            <td class="skills-table-data">
                                <div class="checklist G04-123">
                                    <input type="checkbox" id="g04-exp" name="g04-exp" value="5+ years of experience in cybersecurity">
                                    <label for="g04-exp">5+ years of experience in cybersecurity</label><br>
                                
                                    <input type="checkbox" id="g04-security" name="g04-security" value="Proficiency in security technologies (firewalls, IDS/IPS, encryption)">
                                    <label for="g04-security">Proficiency in security technologies (firewalls, IDS/IPS, encryption)</label><br>
                                
                                    <input type="checkbox" id="g04-threats" name="g04-threats" value="Strong knowledge of cybersecurity threats and countermeasures">
                                    <label for="g04-threats">Strong knowledge of cybersecurity threats and countermeasures</label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="divider"></div>
                
                <label for="other-skills" id="other-skills-lable">Other Skills</label>
                <br>
                <textarea class="other-skills" id="other-skills" name="other-skills" aria-labelledby="other-skills-lable"></textarea>
            </fieldset>

            <input type="submit" value="Apply">
            <input type="reset">
        </form>
    </div>
</div>

    <?php
    include 'footer.inc';
    ?>

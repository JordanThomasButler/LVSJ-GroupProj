<!DOCTYPE html>
<?php
$pageTitle = "About Our Group";
$headerTitle = "About Our Group";
$bodyClass = "application-page";
include 'header.inc';

?>

<main class="about-main-content">
    <input type="checkbox" id="toc-toggle" class="toc-toggle">
    <label for="toc-toggle" class="toc-toggle-button">&#9664;</label>

    <!-- Table of Contents on Right (GenAI was used in the making of the table of contents, namely the pop out functionality of it) -->
    <aside class="toc">
        <h3>Table of Contents</h3>
        <ul>
            <li><a href="#group-info">Group Info</a></li>
            <li><a href="#member1">Liam Healey</a></li>
            <li><a href="#member2">Jordan Thomas Butler</a></li>
            <li><a href="#member3">Virak Meng</a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="form-section">
        <!-- Group Info -->
        <section id="group-info">
            <h2>Group Information</h2>
            <ul>
                <li>Group Name: LSVJ</li>
                <li>Class Time: 2:30 PM</li>
                <li>Class Day: Friday ATC 325
                <li>Tutor: Razeen</li>
            </ul>
            <figure>
                <figcaption><strong>Our Group Photo:</strong></figcaption>
                <img src="images/group-photo.png" alt="Group Photo" class="group-photo">
            </figure>
        </section>

        <!-- Member 1 -->
        <section id="member1">
            <h2>Liam Healey</h2>
            <ul>
                <li>Name: Liam Healey</li>
                <li>Contribution: Jobs Description Page, Jira Setup, Base of the About page (About page update in part 2), Implementation and creation of MySQL Database for jobs page</li>
                <li>Student ID:105923500</li>
            </ul>    
            
            <table class="member-table">
                <caption>Liam Healey Interests</caption>
                <tr>
                    <th>Category</th>
                    <th colspan="2">Details</th>
                </tr>
                <tr>
                    <td>Games</td>
                    <td colspan="2">Roguelikes, Turn based games, RPGs</td>
                </tr>
                <tr>
                    <td>Music</td>
                    <td colspan="2">Indie, Bedroom Pop</td>
                </tr>
                <tr>
                    <td>Films</td>
                    <td colspan="2">Horror</td>
                </tr>
            </table>
        </section>

        <div id="divider"></div>

        <!-- Member 2 -->
        <section id="member2">
            <h2>Jordan Thomas-Butler</h2>
            <ul>
                <li>Name: Jordan Thomas-Butler</li>
                <li>Contribution: Application page, Creation of EOI table, Adding validated records to EOI table</li>
                <li><strong>Student ID:</strong> 106013677</li>
            </ul>    
            <table class="member-table">
                <caption>Jordan Interests</caption>
                <tr>
                    <th>Category</th>
                    <th colspan="2">Details</th>
                </tr>
                <tr>
                    <td>Games</td>
                    <td colspan="2">Stardew Valley, Plateup, Factorio</td>
                </tr>
                <tr>
                    <td>Music</td>
                    <td colspan="2">Bad Bunny, Deftones, The Marias</td>
                </tr>
                <tr>
                    <td>Films</td>
                    <td colspan="2">Everything everywhere all at once, Parasite, and La La Land</td>
                </tr>
            </table>
        </section>

        <div id="divider"></div>

        <!-- Member 3 -->
        <section id="member3">
            <h2>Virak Meng</h2>
            <ul>
                <li>Name: Virak Meng</li>
                <li>Contribution: Homepage</li>
                <li>Student ID: 105058033</li>
            </ul>    
            <table class="member-table">
                <caption>Virak Interests</caption>
                <tr>
                    <th>Category</th>
                    <th colspan="2">Details</th>
                </tr>
                <tr>
                    <td>Games</td>
                    <td colspan="2">Mobile legends</td>
                </tr>
                <tr>
                    <td>Music</td>
                    <td colspan="2">Hip-Hop, jazz</td>
                </tr>
                <tr>
                    <td>Films</td>
                    <td colspan="2">sci-fi</td>
                </tr>
            </table>
        </section>
    </div>
</main>

<?php include 'footer.inc'; ?>
</body>
</html>

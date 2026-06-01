<?php 
if (!defined('ACCESS_GRANTED')) {
    http_response_code(403);
    exit();
}
?>
<section class="about-section">
    <h1>About me</h1>
    <img 
        src="./Assets/Images/profilePicture.jpeg" 
        alt="Profile picture of Jeremy - Thanks to my friend Theodora for creating this picture" 
        class="about-profile-picture">
    <h2>Jeremy</h2>
    <img src="https://readme-typing-svg.demolab.com/?font=Stardos+Stencil&size=24&pause=1000&color=E6DDDD&center=true&vCenter=true&width=300&lines=Passionate+Developer+💻;Web+%26+Mobile+Lover+📱;On+my+way+to+AI+🤖" style="height:48px">
    <p>I am a cheerful person, driven by a desire to learn, share, and take on daily challenges ! I am passionate about technology, code, playing video games (The Last Of Us Part 1 & 2, Darksiders series, Grounded...), reading mangas (Blood Lad, Elfen Lied, Berserk, Solo Leveling, Dreamland, ...). I am also a big fan of science fiction movies. </p>
    <p>I have been learning programming since July 2025, and I have decided to create this portfolio to showcase my skills and projects and obviously have fun while doing it.</p>
    <!--What I Like about Programming -->
    <article class="about-article">
        <h3>What I like about programming ?</h3>
        <p>Taking the time to design a project from start to finish and seeing it materialize before my eyes. Not being attached to any particular language or framework, but rather focusing on the logic and how I can solve a problem. In this field there is never one right way to do things.</p>
    </article>
    <!-- Recent activities & learning -->
    <article class="about-article">
        <h3>Recent activities & learning</h3>
        <ul>
            <li>BTech : introduction to the basics of the Web (HTML & CSS)</li>
            <li>Apple Foundation Program - Simplon : Immersion in the Apple ecosystem through learning Swift and SwiftUI</li>
        </ul>
        <p>A big thank you to the instructors and participants for the shared experience.</p>
    </article>
    <!-- My tech stack -->
    <article class="about-article">
        <h3>My tech stack</h3>
        <h4>💻 Web Desktop & Mobile :</h4>
        <img src="https://skillicons.dev/icons?i=html,css,js,php,py" alt="Icons of the technologies I use for mobile development" class="tech-icons">
        <h4>📱 App Mobile :</h4>
        <img src="https://skillicons.dev/icons?i=swift" alt="Icons of the technologies I use for mobile development" class="tech-icons">
        <h4>⚙ Other tools :</h4>
        <img src="https://skillicons.dev/icons?i=vscode,github,figma,discord" alt="Icons of the tools I use" class="tech-icons">
    </article>
    <!-- Projects and future objectives -->
    <article class="about-article">
        <h3>Projects and future objectives</h3>
        <ul>
            <li><h4>Focus on AI:</h4> Join a work-study program specializing in AI Development to develop skills and gain field experience.</li>
            <li><h4>Sharing knowledge:</h4> As soon as possible, I want to give back to the community by becoming a trainer in introductory formats. The goal? To offer simple and accessible workshops to introduce and foster a love for the field of development in as many people as possible.</li>
        </ul>
    </article>
    <!-- Contact -->
    <article class="about-article">
        <h3>Contact</h3>
        <p>Feel free to reach out to me on LinkedIn or GitHub</p>
        <div class="btn-field">
            <a href="https://www.linkedin.com/in/jrmy-drlz" class="btn" target="_blank"><img src="https://skillicons.dev/icons?i=linkedin" width="20" height="20"> My LinkedIn</a>
            <a href="https://github.com/Ymeh-Git" class="btn" target="_blank"><img src="https://skillicons.dev/icons?i=github" width="20" height="20"> GitHub - Ymeh-Git</a>
        </div>
    </article>
</section>
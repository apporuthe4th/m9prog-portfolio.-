<?php
// get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Tim — Portfolio (Copy)</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="bar">
  <div class="bar-inner">
    <div class="brand">tim.exe</div>
    <div class="dots"><span></span><span></span><span></span></div>
    <nav class="links">
      <a href="#about">about</a>
      <a href="#work">work</a>
      <a href="#skills">skills</a>
      <a href="#contact">contact</a>
    </nav>
  </div>
</header>

<main class="wrap">

  <section class="hero">
    <div class="hero-grid">
      <div class="panel hero-panel">
        <div class="panel-title">
          <div class="dots"><span></span><span></span><span></span></div>
          <span>~/tim/about-me.txt</span>
        </div>
        <div class="panel-body">
          <h1>Hi, I'm Tim.<br>I make websites that (mostly) don't break.</h1>
          <p class="tag">Student developer in the Netherlands, currently building things in PHP and JavaScript — one automated test suite at a time.</p>
          <div class="bubble">psst — scroll down, there's a whole comic strip about my code down there</div>
        </div>
      </div>

      <div class="panel hero-side">
        <div class="panel-title">
          <div class="dots"><span></span><span></span><span></span></div>
          <span>stats.log</span>
        </div>
        <div class="panel-body">
          <div class="stat-row"><span>Coffee → code ratio</span><b>1 : 1</b></div>
          <div class="stat-row"><span>Tests passing today</span><b>mostly</b></div>
          <div class="stat-row"><span>Favorite era</span><b>1996</b></div>
          <div class="stat-row"><span>Current status</span><b>debugging</b></div>
        </div>
      </div>
    </div>
  </section>

  <section id="about">
    <div class="sec-head">
      <span class="num">01</span>
      <h2>About the operator</h2>
    </div>
    <div class="about-grid">
      <div class="panel">
        <div class="panel-body">
          <p>I'm a student at a coding college, working through structured web development assignments — the kind that get graded by a robot the second you hit submit. It's taught me to write code that's not just clever, but actually correct.</p>
          <p>Outside of coursework I like building things with a bit of personality — interfaces that look like they came from a slightly different, more colorful timeline.</p>
        </div>
      </div>
      <div class="panel">
        <div class="panel-body">
          <h3 style="font-size:1rem; margin-bottom: 6px;">what I reach for</h3>
          <div class="taglist">
            <span class="tag-pill">PHP</span>
            <span class="tag-pill">JavaScript</span>
            <span class="tag-pill">HTML/CSS</span>
            <span class="tag-pill">PHPUnit</span>
            <span class="tag-pill">MySQL</span>
            <span class="tag-pill">Git</span>
            <span class="tag-pill">Regex (bravely)</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="work">   
    <div class="sec-head">
      <span class="num">02</span>
      <h2>Things I've shipped</h2>
    </div>
    <div class="proj-grid">

      <article class="panel proj-card">
        <div class="proj-thumb">🖥️</div>
        <div class="panel-body">
          <h3>Retro.Li</h3>
          <p>A Macintosh-themed e-commerce webshop — dithered bitmap patterns, chunky window chrome, and a strict black-and-white aesthetic throughout.</p>
          <div class="proj-meta"><span>e-commerce</span><span>solo project</span></div>
        </div>
      </article>

      <article class="panel proj-card">
        <div class="proj-thumb">🧪</div>
        <div class="panel-body">
          <h3>BLAST assignments</h3>
          <p>A run of PHP coursework exercises — regex parsing, CLI argument handling, and chasing down PHPUnit failures until every test goes green.</p>
          <div class="proj-meta"><span>PHP</span><span>coursework</span></div>
        </div>
      </article>

      <article class="panel proj-card">
        <div class="proj-thumb">📇</div>
        <div class="panel-body">
          <h3>Project three</h3>
          <p>Swap this card for your next build — a short description of the problem it solved and what you used to solve it.</p>
          <div class="proj-meta"><span>category</span><span>status</span></div>
        </div>
      </article>

      <article class="panel proj-card">
        <div class="proj-thumb">🎮</div>
        <div class="panel-body">
          <h3>Project four</h3>
          <p>Another slot for a project — side project, hackathon entry, or something you built just to learn how it worked.</p>
          <div class="proj-meta"><span>category</span><span>status</span></div>
        </div>
      </article>

    </div>
  </section>

  <section id="skills">
    <div class="sec-head">
      <span class="num">03</span>
      <h2>Toolbelt</h2>
    </div>
    <div class="panel skills-panel">
      <div class="panel-body">
        <div class="skills-grid">
          <div class="skill-chip">PHP</div>
          <div class="skill-chip">JavaScript</div>
          <div class="skill-chip">HTML &amp; CSS</div>
          <div class="skill-chip">MySQL</div>
          <div class="skill-chip">PHPUnit</div>
          <div class="skill-chip">Git &amp; GitHub</div>
          <div class="skill-chip">REST APIs</div>
          <div class="skill-chip">Debugging at 2am</div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="sec-head">
      <span class="num">04</span>
      <h2>Say hello</h2>
    </div>
    <div class="panel contact-panel">
      <div class="panel-body">
        <h2>Got a project — or just want to talk retro UIs?</h2>
        <p>Drop me a message and I'll get back to you, usually before my code finishes compiling.</p>
        <div class="btn-row">
          <a class="btn" href="mailto:tim@example.com">email me</a>
          <a class="btn alt" href="#">view resume</a>
        </div>
      </div>
    </div>
  </section>

</main>

<footer>
  built by tim · running on coffee and semicolons
</footer>

</body>
</html>
<?php
// get_footer();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Saptarishi Seeds – Coming Soon</title>
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>

/* MAIN DESIGN */
:root {
  --green: #2e7d32;
  --green-light: #4caf50;
  --blue: #0d47a1;
  --accent: #00afef;
  --white: #ffffff;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:
    linear-gradient(135deg, #f3f7f3, #e8f5e9);
  padding: 20px;
}

/* CONTAINER */
.ss-coming {
  max-width: 900px;
  width: 100%;
  padding: 60px 40px;
  border-radius: 24px;
  background: rgba(255,255,255,0.7);
  backdrop-filter: blur(12px);
  box-shadow:
    0 20px 60px rgba(0,0,0,0.08),
    inset 0 1px 0 rgba(255,255,255,0.7);
  text-align: center;
}

/* LOGO */
.ss-logo img {
  width: 220px;
  margin-bottom: 20px;
}

/* TITLE */
.ss-title {
  font-size: 38px;
  font-weight: 700;
  color: var(--green);
  margin-bottom: 10px;
}

/* SUBTITLE */
.ss-sub {
  font-size: 16px;
  color: #555;
  margin-bottom: 30px;
  line-height: 1.6;
}

/* BADGE */
.ss-badge {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  background: rgba(46,125,50,0.1);
  color: var(--green);
  padding: 8px 18px;
  border-radius: 50px;
  font-weight: 600;
  margin-bottom: 20px;
}

.ss-dot {
  width: 10px;
  height: 10px;
  background: var(--green);
  border-radius: 50%;
  animation: pulse 1.5s infinite;
}

/* BUTTON */
.ss-btn {
  display: inline-block;
  padding: 14px 28px;
  border-radius: 50px;
  background: var(--green);
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  transition: 0.3s;
  box-shadow: 0 10px 25px rgba(46,125,50,0.3);
}

.ss-btn:hover {
  background: #1b5e20;
  transform: translateY(-3px);
}
/* CREDIT */
.ss-credit {
  margin-top: 25px;
  font-size: 13px;
  color: #4b5563; /* neutral gray */
}

/* NAME LINK */
.ss-credit a {
  color: #1565C0; /* logo blue */
  font-weight: 600;
  text-decoration: none;
  position: relative;
}

/* UNDERLINE EFFECT (GRADIENT LIKE LOGO) */
.ss-credit a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 0%;
  height: 2px;
  background: linear-gradient(
    90deg,
    #1FA64A,  /* green */
    #FFC107,  /* yellow */
    #F57C00,  /* orange */
    #1565C0   /* blue */
  );
  transition: 0.3s ease;
}

/* HOVER EFFECT */
.ss-credit a:hover {
  color: #0D47A1; /* darker blue */
}

.ss-credit a:hover::after {
  width: 100%;
}

/* ANIMATION */
@keyframes pulse {
  0% { transform: scale(1); opacity: 1; }
  50% { transform: scale(1.2); opacity: 0.7; }
  100% { transform: scale(1); opacity: 1; }
}

/* MOBILE */
@media(max-width:768px) {
  .ss-coming {
    padding: 40px 20px;
  }

  .ss-title {
    font-size: 28px;
  }

  .ss-sub {
    font-size: 14px;
  }
}

</style>
</head>

<body>

<div class="ss-coming">

  <!-- LOGO -->
  <div class="ss-logo">
    <img src="ss.png" alt="Saptarishi Seeds Logo">
  </div>

  <!-- BADGE -->
  <div class="ss-badge">
    <span class="ss-dot"></span>
    Website Coming Soon
  </div>

  <!-- TITLE -->
  <h1 class="ss-title">
    High Quality Seeds for Better Harvest
  </h1>

  <!-- TEXT -->
  <p class="ss-sub">
    Saptarishi Seeds is preparing a modern platform to deliver
    research-based, high-performance seeds for farmers across India.
  </p>

  <!-- BUTTON -->
  <a href="mailto:info@saptarishiseeds.com" class="ss-btn">
    Contact Us
  </a>
<!-- ADD THIS JUST BELOW BUTTON (inside .ss-coming) -->

<div class="ss-credit">
  Designed & Developed by 
  <a href="https://instagram.com/bhavyeshnial" target="_blank">
    Bhavyesh Nial
  </a>
</div>
</div>

</body>
</html>
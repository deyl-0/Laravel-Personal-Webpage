<?php $__env->startSection('content'); ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>MY PORTFOLIO</title>
</head>
<style>
  *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    box-sizing: border-box;
  }
  body{
    background-image: url("https://pbs.twimg.com/media/FCIPolJaUAA1w0X?format=jpg&name=4096x4096");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    font-family: 'Spartan', sans-serif;
  }
  nav{
    margin-bottom: 50px;
    background: #E8B4B8;
    height: 80px;
    z-index: 100;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
     box-shadow: 0 5px 8px 0 rgba(0,0,0,.3);
    }

  .pos{
    position: relative;
  }
  label.logo{
    color: #67595E;
    font-size: 50px;
    line-height: 80px;
    padding: 0 50px;
    font-weight: bold;
    font-family: 'Dancing Script', cursive;
    text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
  }
  nav ul{
    float: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
  }
  nav ul li{
    display: inline-block;
    line-height: 80px;
    margin: 0px;
  }
  nav ul li a{
    color: white;
    font-size: 17px;
    padding: 31px 25px;
  }
  nav ul a:hover{
    background: #edc4c7;
  }
  nav ul a:focus{
    background: white;
    color: #E8B4B8;
  }
  .containerHome{
    margin-right: auto;
    margin-left: auto;
    margin-top: 150px;
    background: rgba(238, 214, 211, 0.9);
    width: 55%;
    border-radius: 15px;
    padding-bottom: 15px;
    padding-top: 15px;
    padding-left: 50px;
    padding-right: 50px;
    border: 5px solid white;
    position: relative;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
  }
  .home{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #67595E;
    margin-bottom: 30px;
    border-bottom: 2px dashed #67595E;
  }
  .about{
    align-items: center;
    margin-bottom: 5px;
    padding: 20px;
    text-align: center;
  }

  .containerHome img{
    width: 150px;
    height: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    border: 5px solid #A49393;
    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.5), 0 3px 10px 0 rgba(0, 0, 0, 0.5);
  }

  .socials .socs{
    margin-top: 25px;
    text-align: center;
    font-size: 30px;
  }

  .socials ul{
    text-align: center;
  }

  .fa{
  color: #67595E;
  padding: 13px;
  margin: 5px;
  font-size: 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  }

  .fa-facebook{
    padding-left: 20px;
    padding-right: 20px;
  }
  .fa:hover{
    background: #67595E;
    color: white;
  }

  .containerAbout{
    margin-right: auto;
    margin-left: auto;
    margin-top: 70px;
    background: rgba(238, 214, 211, 0.9);
    width: 55%;
    border-radius: 15px;
    padding-bottom: 15px;
    padding-top: 15px;
    padding-left: 50px;
    padding-right: 50px;
    border: 5px solid white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
  }

  .containerPlaces{
    margin-right: auto;
    margin-left: auto;
    margin-top: 70px;
    background: rgba(238, 214, 211, 0.9);
    width: 55%;
    border-radius: 15px;
    padding-bottom: 15px;
    padding-top: 15px;
    padding-left: 50px;
    padding-right: 50px;
    border: 5px solid white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
  }

  .containerDream{
    margin-right: auto;
    margin-left: auto;
    margin-top: 70px;
    background: rgba(238, 214, 211, 0.9);
    width: 55%;
    border-radius: 15px;
    padding-bottom: 40px;
    padding-top: 15px;
    padding-left: 50px;
    padding-right: 50px;
    border: 5px solid white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
  }

  .containerFuture{
    margin-right: auto;
    margin-left: auto;
    margin-top: 70px;
    margin-bottom: 100px;
    background: rgba(238, 214, 211, 0.9);
    width: 55%;
    border-radius: 15px;
    padding-bottom: 50px;
    padding-top: 15px;
    padding-left: 50px;
    padding-right: 50px;
    border: 5px solid white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
  }

  .facts{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #67595E;
    margin-bottom: 5px;
    border-bottom: 2px dashed #67595E;
  }

  .dream{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #67595E;
    margin-bottom: 5px;
    border-bottom: 2px dashed #67595E;
  }

  .future{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #67595E;
    margin-bottom: 50px;
    border-bottom: 2px dashed #67595E;
  }

  .places{
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #67595E;
    margin-bottom: 5px;
    border-bottom: 2px dashed #67595E;
  }

  .child{
    text-align: center;
    margin: 50px 0;
    font-size: 25px;
  }

  .years{
    text-align: center;
    margin: 50px 0;
    font-size: 25px;
  }

  .myself{
    text-align: center;
    margin: 50px 0;
    font-size: 25px;
  }

  .goto{
    text-align: center;
    margin: 50px 0;
    font-size: 25px;
  }

  .hobby{
    text-align: center;
    margin: 50px 0;
    font-size: 25px;
  }

  html{
    scroll-behavior: smooth;
  }

  p{
    text-align: center;
	padding-bottom: 20px;
  }
</style>

<body>
  <nav>
    <div class="pos">
    <label class="logo"></label>
    <ul>
      <li><a href="#home">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#dream">CS202</a></li>
      <li><a href="#places">CS405</a></li>
      <li><a href="#future">FUTURE</a></li>
    </ul>
    </div>
  </nav>
  <div class="containerHome" id="home">
    <div class="home">~ HOME ~<br><br>Dale Gibson Martin Magpantay
	</div>
    <div class="about">Hello! I'm Dale Gibson Martin Magpantay, currently a 3rd year College Student at Pamantasan ng Lungsod ng Pasig. I'm 20 years old nad taking
    Bacherlor of Science in Computer Science. Aiming to become a part of a well-known industry that involves artistry.</div>
    <div class="socials">
      <div class="socs">S  O  C  I  A  L  S</div>
      <ul>
      <a href="https://www.facebook.com/dalegibson.martin" class="fa fa-facebook"></a>
      <a href="https://twitter.com/deyl_0" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com/deyl_0" class="fa fa-instagram"></a>
      </ul>
    </div>
  </div>
  <div class="containerAbout" id="about"><div class="facts">~ ABOUT ~</div>
    <div class="myself">FACTS ABOUT MYSELF</div>
    <p>
      I'm quite reserved but not aloof or indifferent. I always try to calm myself up
      against any situation that's why I might give some stoic vibes. Quiet and calm places are my preffered environment. Much like other people, I dont like things that are boring and lame. Efficiency is my way of living, not exerting too much
      energy more than I need to. I always think openly to every situation, always thinking that the situation is something I cannot control thus making me think the best decisions to every situation.</p>
    <br>
    <p>
      I don't have a full-pledge hobbies like drawing, doing music or something like that but I do have things that I do to pass time. I love listening to music, especially japanese mussic. I learned to play guitar since 7th grade but I just play occasionally. My music taste genre is jazz because how aesthetic they can be by just listening to them. I also like RnB and Neo-soul because of their jazz aspects. I also listens to rock, but japanese rock in particular, and I dont listen to heavy metal. I also listen to some classical music sometimes, in order for me to focus and relax. I also like art but I do not have the skills for it. But I can understand the artist expression on their art at some level.
    </p>
    <br>
    <p>
      As I mentioned earlier, most of the time, I tend to dislike boring and lame things. I always tend to like things that have surprise, excitement and unpredictability. I dont like noisy things/people because I always have hard time focusing on things that's why I always need a quiet environment. I dislike people that always complains on things that are completely unnecessary.
    </p>
    <br>
    <p>
      As of right now, my hobby, I guess? is following esports. This is where the excitement always goes. Seeing this spectacular moments just keeps me going for more. Esports is where talented individuals gather and fight for who is the best. Esports for me is like a fantasy in real life, stories being made before our eyes that you would only expect to be written in tales. Unbelivable things can happen in esports, and that's why they're so exciting to watch.
    </p>
  </div>
  <div class="containerDream" id="dream"><div class="dream">~ CS202 ~</div>
    <div class="child">GIT</div>
    <p>
      Git is a free and open source distributed version control system designed to handle
	  everything from small to very large projects with speed and efficiency.

	  Git is easy to learn and has a tiny footprint with lightning fast performance. It outclasses
	  SCM tools like Subversion, CVS, Perforce, and ClearCase with features like cheap local
	  branching, convenient staging areas, and multiple workflows.
    </p>
  </div>
  <div class="containerPlaces" id="places">
    <div class="places">~ CS405 ~</div>
    <div class="goto">LARAVEL</div>
    <p>
		Laravel is an open-source web MVC framework for PHP.<br>
		Laravel is a robust framework that provides easy development of PHP web applications
		with features like a modular packaging system with a dedicated dependency manager,
		access to relational databases, and other utilities for application deployment and
		maintenance.
	</p>
  </div>
  <div class="containerFuture" id="future"><div class="future">~ FUTURE ~</div>
    <div class="years">6 Years From Now</div>
      <p>
        Well, my goals are not only at programming industry, I also can see myself in any industry that involves art. I also do not want to limit myself on what field I am taking. I can be om the programming field, people that are resposible for the balance of the game. I can be at the art department, responsible for the game design and visuals of the game. And even music department, resposnsible for the sound and music composition.<p>
        <br>
        <p>Game companies like Nintendo, Bandai Namco, Riot Games, and many more. Even with industries that involves artistry like Universal Studios and alike. I would like to experience what is like on working on this well-established companies.
      </p>
  </div>
</body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Acer\Documents\Laravel-Finals-Activity-main\resources\views/pages/home.blade.php ENDPATH**/ ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Blog layout</title>
<link rel="stylesheet" type="text/css" href="{{asset ('css/style.css')}}">
</head>
<body>

    <header>
        <div class="overlay">
            <h1>Blog</h1>
            <h3>Reasons for Choosing US</h3>
            <p>Our blog is dedicated to all things curious and creative. Join us everyweek for special C2C Class activities, leading research in the field of creativity and curiosity, and much much more!</p>
            <br>
            <button>READ MORE</button>
        </div>
    </header>
        <div class="row">
            <div class="left-column">
            <div class="card">
                <h2>{{$blog[0]}}</h2>
                <h5>Introduction to Reading</h5>
                <img src="{{asset ('img/blog1.jpg')}}" alt="blog "/>
                <p>Traveling is a very crucial part of life as it is the best way to get out of the busy schedule. It is also to experience life in different ways .Traveling is actually a good remedy for stress, anxiety and depression. It also improves the mental and physical health.</p>
            </div>
            <div class="card">
                <h2>{{$blog[1]}}</h2>
                <h5>Why traveling is important for human life?</h5>
                <img src="{{asset ('img/blog2.jpg')}}" alt="blog "/>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
 	    </div>
 	<div class="right-column">
 		<div class="card">
 			 <h3>Popular Post</h3>
 			 <img src="{{asset ('img/popular-blog1.jpg')}}" alt="popular"/>
 			 <img src="{{asset ('img/popular-blog2.jpg')}}" alt="popular"/>
 			 <img src="{{asset ('img/popular-blog3.jpg')}}" alt="popular"/>
 		</div>
 		<div class="card">
            <label for="story">Tell us your story:</label>
            <textarea id="story" name="story"
                rows="5" cols="33" placeholder="typeing....."></textarea>
            <button>Tell Us</button>
 		</div>
 	</div>
 </div>

        <div class="row">
                <div class="left-column">
                <div class="card">
                <div class="accordion">
                <div class="accordion">
        <div>
            <input type="radio" name="example_accordion" id="section1" class="accordion__input">
            <label for="section1" class="accordion__label">{{$blog[0]}}</label>
            <div class="accordion__content">
            <p>Introduction to Reading</p>
            <p>
            Reading is a complex developmental challenge that we know to be intertwined with many other developmental accomplishments: attention, memory, language, and motivation, for example. Reading is not only a cognitive psycholinguistic activity but also a social activity. 
            <br><br>
            Being a good reader in English means that a child has gained a functional knowledge of the principles of the English alphabetic writing system. Young children gain functional knowledge of the parts, products, and uses of the writing system from their ability to attend to and analyze the external sound structure of spoken words. Understanding the basic alphabetic principle requires an awareness that spoken language can be analyzed into strings of separable words, and words, in turn, into sequences of syllables and phonemes within syllables.
            <br><br>
            Beyond knowledge about how the English writing system works, though, there is a point in a child's growth when we expect "real reading" to start. Children are expected, without help, to read some unfamiliar texts, relying on the print and drawing meaning from it. There are many reasons why children have difficulty learning to read. These issues and problems led to the initiation of this study.
            </p>
            <button>Read More.....</button>
            </div>
        </div>
        <div>
            <input type="radio" name="example_accordion" id="section2" class="accordion__input">
            <label for="section2" class="accordion__label">{{$blog[1]}}</label>
            <div class="accordion__content">
            <p>Why traveling is important for human life?</p>
            <p>
            Traveling is a very crucial part of life as it is the best way to get out of the busy schedule. It is also to experience life in different ways .Traveling is actually a good remedy for stress, anxiety and depression. It also improves the mental and physical health. We only have one life and we should thank it for making us more advanced creature on this planet. Not only do we get to experience the beauty of nature, different geographies ,topographies, and people. Traveling is all about exploring new places, cultures, cuisines, rituals and styles of living. We also travel because distance and difference are the secret toxic of learning and creativity which one cannot observe by sitting at home. Traveling in itself has advantages, as it makes one forget his or her worries, problems, frustrations and fears. This helps by broadening your horizon to move in new directions, unplugging from the pulls and pushes of daily life. We have a passport to fill full of stamps rather  than to have a house full of stuff. Let’s use this to make memories all over the world.
            </p>
            <button>Read More.....</button>
            </div>
        </div>
        <div>
            <input type="radio" name="example_accordion" id="section3" class="accordion__input">
            <label for="section3" class="accordion__label">{{$blog[2]}}</label>
            <div class="accordion__content">
            <p>Implementing New Technology</p>
            <p>
            For all the dollars spent by American companies on R&D, there often remains a persistent and troubling gap between the inherent value of the technology they develop and their ability to put it to work effectively. At a time of fierce global competition, the distance between technical promise and genuine achievement is a matter of especially grave concern. Drawing on their long study of the difficulties managers have had in closing this gap, the authors identify half a dozen key challenges that managers responsible for implementing new technology must surmount: their inescapably dual role, the variety of internal markets to be served, legitimate resistance to change, the right degree of promotion, the choice of implementation site, and the need for one person to take overall responsibility.
            <br><br>
            Introducing technological change into an organization presents a different set of challenges to management than does the work of competent project administration. Frequently, however, the managers responsible for shepherding a technical innovation into routine use are much better equipped by education and experience to guide that innovation’s development than to manage its implementation.
            </p>
            <button>Read More.....</button>
            </div>
        </div>
        </div>
        </div>
                </div>
                </div>
                <br><br><br>
</body>
